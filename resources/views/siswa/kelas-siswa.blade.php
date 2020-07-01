@extends('aapp.app')

@section('title')
Kelas - Siswa
@endsection

@section('nav-siswa')
@foreach($data as $dt)
@include('siswa.app.nav-siswa')
@endforeach
@endsection

@section('app-siswa')
{{-- START ================================================================================ SLIDE --}}
@include('siswa.app.header-siswa')
{{-- END ================================================================================== SLIDE --}}

{{-- START ================================================================================ CONTENT --}}
<section>
	<div class="container container-60-t" style="margin-bottom: 100px">
		<div class="row">

			{{-- START ================================================================================ CARD MATERI --}}
			@foreach($materi as $mt)
			<div class="col s12 m12 l12">
				<div class="card card-icon-collapsible">
					<ul class="collapsible">
						<li>
							<div class="collapsible-header">
								<i class="material-icons title">description</i>
								{{ $mt->materi }}
								<span>
									<a class="waves-effect btn-icon-flat">
										<i class="material-icons">keyboard_arrow_down</i>
									</a>
								</span>
							</div>
							<div class="collapsible-body">
								<h6><b>Materi</b></h6>
								<blockquote>
									<div class="row">
										@foreach( $mt->komponen as $k)
										<div class="col s12 m12 l6">

											<a href="{{ route('welcome')}}/file/{{ $k->file}}">
												<div class="card card-icon-desc-btn">
													<div class="row">
														<div class="col s12 m12 l2 icon">
															<i class="material-icons">
																description
															</i> 
														</div>
														<div class="col s12 m12 l10 desc">
															{{ $k->file }} 
														</div>
													</div>
												</div>
											</a>

										</div>
										@endforeach
									</div>
								</blockquote>

								<br>

								{{-- <h6><b>Latihan Soal</b></h6>
								<blockquote>
									<table>
										<tbody>
											<tr>
												<td>Nama Latihan</td>
												<td>90 menit</td>
												<td>50 soal</td>
												<td class="center">
													<a href="" class="waves-effect btn-flat btn-border-prim"><i class="material-icons right">arrow_forward</i>Mulai</a>
												</td>
											</tr>
											<tr>
												<td>Nama Latihan</td>
												<td>90 menit</td>
												<td>50 soal</td>
												<td class="center">
													<a href="" class="waves-effect btn-flat btn-border-prim"><i class="material-icons right">arrow_forward</i>Mulai</a>
												</td>
											</tr>
											<tr>
												<td>Nama Latihan</td>
												<td>90 menit</td>
												<td>50 soal</td>
												<td class="center">
													<a href="" class="waves-effect btn-flat btn-border-prim"><i class="material-icons right">arrow_forward</i>Mulai</a>
												</td>
											</tr>
										</tbody>
									</table>
								</blockquote> --}}
								
							</div>
						</li>
					</ul>
					<div class="card-action">
						{{ date('j F Y', strtotime($mt->created_at)) }}, 
						{{ date('H:i', strtotime($mt->created_at)) }}
					</div>
				</div>
			</div>
			@endforeach
			{{-- END ================================================================================ CARD MATERI --}}

		</div>
	</div>
</section>
{{-- END ================================================================================ CONTENT --}}

@endsection