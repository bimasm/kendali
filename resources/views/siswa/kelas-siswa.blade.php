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
				<div class="card cont-dash white">
					<ul class="collapsible materi-cont-siswa">
						<li>
							<div class="collapsible-header materi-cont-siswa-he materi">
								<i class="material-icons materi-icon-siswa">people_alt</i>{{ $mt->materi }}
								<span class="cont-icon-con">
									<a class="btn-floating btn-flat materi-icon-det">
										<i class="cont-det-icon material-icons">keyboard_arrow_down</i>
									</a>
								</span>
							</div>
							<div class="collapsible-body materi-cont-siswa-bo">
								<h6><b>Materi</b></h6>
								<blockquote>
									<div class="row">

										@foreach( $mt->komponen as $k)
										<div class="col s12 m12 l6">
											<a href="{{ route('welcome')}}/file/{{ $k->file}}" class="materi-item-siswa">
												<div class="card cont-file white">
													<div class="materi-item-cont-siswa">
														<i class="material-icons icon center">description</i> 
														<span class="text">{{ $k->file }}</span>
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
													<a class="waves-effect btn-flat grey-text text-darken-1"><i class="material-icons right">arrow_forward</i>Mulai</a>
												</td>
											</tr>
											<tr>
												<td>Nama Latihan</td>
												<td>90 menit</td>
												<td>50 soal</td>
												<td class="center">
													<a class="waves-effect btn-flat grey-text text-darken-1"><i class="material-icons right">arrow_forward</i>Mulai</a>
												</td>
											</tr>
											<tr>
												<td>Nama Latihan</td>
												<td>90 menit</td>
												<td>50 soal</td>
												<td class="center">
													<a class="waves-effect btn-flat grey-text text-darken-1"><i class="material-icons right">arrow_forward</i>Mulai</a>
												</td>
											</tr>
										</tbody>
									</table>
								</blockquote> --}}
							</div>
						</li>
					</ul>
					<div class="card-action">
						<b>Heri</b>, {{ date('j F Y', strtotime($mt->created_at)) }}, {{ date('H:i', strtotime($mt->created_at)) }}
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