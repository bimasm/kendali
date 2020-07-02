@extends('aapp.app')

@section('title')
Ujian - Siswa
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
<section class="mt-1">
	<div class="container container-60-t" style="margin-bottom: 100px">
		<div class="row">

			{{-- START ================================================================================ CARD BELUM DIKERJAKAN --}}
			<div class="col s12 m12 l12">
				<div class="card card-icon-collapsible">
					<ul class="collapsible">
						<li>
							<div class="collapsible-header">
								<i class="material-icons title">list_alt</i>
								Gaya
								<span class="text">
									Belum Dikerjakan
								</span>
								<span>
									<a class="waves-effect btn-icon-flat">
										<i class="material-icons">keyboard_arrow_down</i>
									</a>
								</span>
							</div>
							<div class="collapsible-body">
								<h6><b>Detail Ujian</b></h6>
								<blockquote>
									<div class="row">
										<div class="col s12 m12 l12">
											<table>
												<tbody>
													<tr>
														<th>Jenis Ujian</th>
														<td>Ulangan Harian</td>
													</tr>
													<tr>
														<th>Jumlah Soal</th>
														<td>50 Soal</td>
													</tr>
													<tr>
														<th>Waktu</th>
														<td>90 menit</td>
													</tr>
													<tr>
														<th>Nilai</th>
														<td>Belum Dikerjakan</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</blockquote>
								<br>
								<div class="row">
									<div class="col s12 m12 l12 right-align">
										<a href="" class="waves-effect btn-flat btn-border-prim">
											<i class="material-icons right">arrow_forward</i>Kerjakan Sekarang
										</a>
									</div>
								</div>

							</div>
						</li>
					</ul>
					<div class="card-action">
						<b>Heri</b>, 23 Juni 2020
					</div>
				</div>
			</div>
			{{-- END ================================================================================ CARD BELUM DIKERJAKAN --}}

		</div>
	</div>
</section>
{{-- END ================================================================================ CONTENT --}}

@endsection