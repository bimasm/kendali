@extends('aapp.app')

@section('title')
Ujian - Siswa
@endsection

@section('nav-siswa')
@include('siswa.app.nav-siswa')
@endsection

@section('app-siswa')
<section>
	<div class="container con-kelas-siswa-2">
		<div class="slider">
			<ul class="slides slider-kelas-siswa slider-kelas-siswa-h">
				<li>
					<img class="slider-kelas-siswa" src="{{asset('asset/img/kelas/header/head.jpg')}}">
					<div class="caption center-align slider-kelas-siswa-c">
						<h3>Kelas Biologi / Ujian</h3>
						<h5 class="light grey-text text-lighten-3">Heri</h5>
					</div>
				</li>
			</ul>
		</div>
	</div>
</section>

<section>
	<div class="container con-kelas-siswa">
		<div class="row">
			<div class="col s12 m12 l12">
				<div class="row">

					<div class="col s12 m12 l12">
						<div class="card cont-dash white">
							<ul class="collapsible materi-cont-siswa">
								<li>
									<div class="collapsible-header materi-cont-siswa-he">
										<i class="material-icons materi-icon-siswa">list_alt</i>Gaya
										<span class="cont-text-con">
											<span class="cont-text">Belum Dikerjakan</span>
											<a class="btn-floating btn-flat materi-icon-det">
												<i class="cont-det-icon material-icons">keyboard_arrow_down</i>
											</a>
										</span>
									</div>

									<div class="collapsible-body materi-cont-siswa-bo">
										<h6>Detail Ujian</h6>
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
											<div class="col s12 m12 l12 center">
												<a class="waves-effect waves-light rb-color-2 btn"><i class="material-icons right">arrow_forward</i>Kerjakan sekarang</a>
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

					<div class="col s12 m12 l12">
						<div class="card cont-dash white">
							<ul class="collapsible materi-cont-siswa">
								<li>
									<div class="collapsible-header materi-cont-siswa-he">
										<i class="material-icons materi-icon-siswa">list_alt</i>Gaya
										<span class="cont-text-con">
											<span class="cont-text">Dikerjakan, 23 June 2020 | 15:30</span>
											<a class="btn-floating btn-flat materi-icon-det">
												<i class="cont-det-icon material-icons">keyboard_arrow_down</i>
											</a>
										</span>
									</div>

									<div class="collapsible-body materi-cont-siswa-bo">
										<h6>Detail Ujian</h6>
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
																<td>60/100</td>
															</tr>
														</tbody>
													</table>
												</div>
											</div>
										</blockquote>
										<br>
										<div class="row">
											<div class="col s12 m12 l12 center">
												<a class="waves-effect waves-light rb-color-2 btn disabled"><i class="material-icons right">arrow_forward</i>Kerjakan sekarang</a>
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
					
				</div>
			</div>
		</div>
	</div>
</section>
@endsection