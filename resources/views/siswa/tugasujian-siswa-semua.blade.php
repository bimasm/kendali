@extends('aapp.app')

@section('title')
Semua Tugas & Ujian - Siswa
@endsection

@section('nav-siswa')
@include('siswa.app.nav-siswa')
@endsection

@section('app-siswa')

{{-- START ================================================================================ SLIDE --}}
@include('siswa.app.header-siswa')
{{-- END ================================================================================== SLIDE --}}

{{-- START ================================================================================ CONTENT --}}
<section>
	<div class="container container-60" style="margin-bottom: 100px">
		<div class="row">

			{{-- START ================================================================================ CARD BELUM DISKUSI --}}
			<div class="col s12 m12 l12">
				<div class="card cont-dash white">
					<ul class="collapsible materi-cont-siswa">
						<li>
							<div class="collapsible-header materi-cont-siswa-he">
								<i class="material-icons materi-icon-siswa">assignment</i>Gaya
								<span class="cont-text-con">
									Belum diekrjakan
								</span>
								<span class="cont-icon-con">
									<a class="btn-floating btn-flat materi-icon-det">
										<i class="cont-det-icon material-icons">keyboard_arrow_down</i>
									</a>
								</span>
							</div>
							<div class="collapsible-body materi-cont-siswa-bo">
								
								<h6>Batas pengumpulan : 24 June 2020 | 23:59</h6>
								<br>
								<div class="divider"></div>

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
										<a href="" class="waves-effect waves-light rb-color-2 btn"><i class="material-icons right">arrow_forward</i>Detail Tugas</a>
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
			{{-- END ================================================================================ CARD BELUM DISKUSI --}}

			{{-- START ================================================================================ CARD PERNAH DIKERJAKAN --}}
			<div class="col s12 m12 l12">
				<div class="card cont-dash white">
					<ul class="collapsible materi-cont-siswa done">{{-- Jika pernah ditambahkan done pada class --}}
						<li>
							<div class="collapsible-header materi-cont-siswa-he done">{{-- Jika pernah ditambahkan done pada class --}}
								<i class="material-icons materi-icon-siswa">assignment</i>Gaya
								<span class="cont-text-con">
									Dikerjakan, 23 June 2020 | 15:30
								</span>
								<span class="cont-icon-con">
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
			{{-- END ================================================================================ CARD PERNAH DIKERJAKAN --}}

			{{-- START ================================================================================ CARD BELUM DIKERJAKAN --}}
			<div class="col s12 m12 l12">
				<div class="card cont-dash white">
					<ul class="collapsible materi-cont-siswa">
						<li>
							<div class="collapsible-header materi-cont-siswa-he">
								<i class="material-icons materi-icon-siswa">list_alt</i>Gaya
								<span class="cont-text-con">
									Belum Dikerjakan
								</span>
								<span class="cont-icon-con">
									<a class="btn-floating btn-flat materi-icon-det">
										<i class="cont-det-icon material-icons">keyboard_arrow_down</i>
									</a>
								</span>
							</div>
							<div class="collapsible-body materi-cont-siswa-bo">
								
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
			{{-- END ================================================================================ CARD BELUM DIKERJAKAN --}}

			{{-- START ================================================================================ CARD PERNAH DIKERJAKAN --}}
			<div class="col s12 m12 l12">
				<div class="card cont-dash white">
					<ul class="collapsible materi-cont-siswa done">{{-- Jika pernah ditambahkan done pada class --}}
						<li>
							<div class="collapsible-header materi-cont-siswa-he done">{{-- Jika pernah ditambahkan done pada class --}}
								<i class="material-icons materi-icon-siswa">list_alt</i>Gaya
								<span class="cont-text-con">
									Dikerjakan, 23 June 2020 | 15:30
								</span>
								<span class="cont-icon-con">
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
			{{-- END ================================================================================ CARD PERNAH DIKERJAKAN --}}
		</div>
	</div>
</section>
{{-- END ================================================================================ CONTENT --}}
@endsection