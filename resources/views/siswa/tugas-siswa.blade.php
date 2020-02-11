@extends('aapp.app')

@section('title')
Tugas - Siswa
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
						<h3>Kelas Biologi / Tugas</h3>
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
										<i class="material-icons materi-icon-siswa">assignment</i>Gaya
										<span class="cont-text-con">
											<span class="cont-text">Belum dikerjakan</span>
											<a class="btn-floating btn-flat materi-icon-det">
												<i class="cont-det-icon material-icons">keyboard_arrow_down</i>
											</a>
										</span>
									</div>

									<div class="collapsible-body materi-cont-siswa-bo">

										<h6>Batas pengumpulan : 24 June 2020 | 23:59</h6>
										<br>
										<div class="divider"></div>
										<br>
										<h6>Detail Tugas</h6>
										<blockquote>
											<p>Buatlah program android sederhana yang terdiri dari 2 activity (bebas nama activity) yang activity 1 dapat berpindah ke activity 2. Kirim file Java dan XML serta video capture hasil aplikasi (bisa dari emulator/HP). Dan tambahkan file TXT dengan format NIM_NAMA</p>
										</blockquote>
										<br>
										<h6>Pekerjaan Anda</h6>
										<blockquote>
											Belum ada file
										</blockquote>
										<br>
										<div class="row">
											<div class="col s12 m12 l12 center">
												<a href="{{route('SiswaTugasDetail')}}" class="waves-effect waves-light rb-color-2 btn"><i class="material-icons right">arrow_forward</i>Detail Tugas</a>
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
										<i class="material-icons materi-icon-siswa">assignment</i>Gaya
										<span class="cont-text-con">
											<span class="cont-text">Dikerjakan, 23 June 2020 | 15:30</span>
											<a class="btn-floating btn-flat materi-icon-det">
												<i class="cont-det-icon material-icons">keyboard_arrow_down</i>
											</a>
										</span>
									</div>

									<div class="collapsible-body materi-cont-siswa-bo">
										<h6>Detail Tugas</h6>
										<blockquote>
											<p>Buatlah program android sederhana yang terdiri dari 2 activity (bebas nama activity) yang activity 1 dapat berpindah ke activity 2. Kirim file Java dan XML serta video capture hasil aplikasi (bisa dari emulator/HP). Dan tambahkan file TXT dengan format NIM_NAMA</p>
										</blockquote>
										<br>
										<h6>Pekerjaan Anda</h6>
										<blockquote>
											<div class="row">
												<div class="col s12 m12 l6">
													<a href="#!" class="materi-item-siswa">
														<div class="card cont-file white">
															<div class="materi-item-cont-siswa">
																<i class="material-icons icon center">description</i> 
																<span class="text">Nama File Tugas</span>
															</div>
														</div>
													</a>
												</div>
											</div>
											<h6>Dikerja : 24 June 2020 | 23:59</h6>
										</blockquote>
										<br>
										<div class="row">
											<div class="col s12 m12 l12 center">
												<a href="{{route('SiswaTugasDetail')}}" class="waves-effect waves-light rb-color-2 btn"><i class="material-icons right">arrow_forward</i>Detail Tugas</a>
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