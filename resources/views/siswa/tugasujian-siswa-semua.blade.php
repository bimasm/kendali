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

			{{-- START ================================================================================ CARD--}}
			<div class="col s12 m12 l12">
				<div class="card card-icon-collapsible">
					<ul class="collapsible">
						<li>
							<div class="collapsible-header">
								<i class="material-icons title">assignment</i>
								Gaya
								<span class="text">
									Belum diekrjakan
								</span>
								<span>
									<a class="waves-effect btn-icon-flat">
										<i class="material-icons">keyboard_arrow_down</i>
									</a>
								</span>
							</div>
							<div class="collapsible-body">
								<h6>
									Batas pengumpulan : 
									24 June 2020 | 23:59
								</h6>
								<br>
								<div class="divider"></div>
								<br>
								<h6><b>Detail Tugas</b></h6>
								<blockquote>
									<div class="tugas-text">
										<p>
											Buatlah program android sederhana yang terdiri dari 2 activity (bebas nama activity) yang activity 1 dapat berpindah ke activity 2. Kirim file Java dan XML serta video capture hasil aplikasi (bisa dari emulator/HP). Dan tambahkan file TXT dengan format NIM_NAMA
										</p>
									</div>
								</blockquote>
								{{-- <br>
								<h6>Pekerjaan Anda</h6>
								<blockquote>
									Belum ada file
								</blockquote> --}}
								<br>
								<div class="row">
									<div class="col s12 m12 l12 right-align">
										<a href="" class="waves-effect btn-flat btn-border-prim">
											<i class="material-icons right">arrow_forward</i>Detail Tugas
										</a>
									</div>
								</div>

							</div>
						</li>
					</ul>
					<div class="card-action">
						<b>Batas Pengumpulan : </b>23 Juni 2020
					</div>
				</div>
			</div>
			{{-- END ================================================================================ CARD--}}


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