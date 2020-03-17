@extends('aapp.app')

@section('title')
Ujian - Siswa
@endsection

@section('nav-siswa')
@include('siswa.app.nav-siswa')
@endsection

@section('app-siswa')
{{-- START ================================================================================ SLIDE --}}
<section>
	<div class="container container-75-head">
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
{{-- END ================================================================================ SLIDE --}}

{{-- START ================================================================================ CONTENT --}}
<section>
	<div class="container container-60-t" style="margin-bottom: 100px">
		<div class="row">

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