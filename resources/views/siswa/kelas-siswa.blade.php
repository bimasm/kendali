@extends('aapp.app')

@section('title')
Kelas - Siswa
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
						<h3>Kelas Biologi / Materi</h3>
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

			{{-- START ================================================================================ CARD MATERI --}}
			<div class="col s12 m12 l12">
				<div class="card cont-dash white">
					<ul class="collapsible materi-cont-siswa">
						<li>
							<div class="collapsible-header materi-cont-siswa-he materi">
								<i class="material-icons materi-icon-siswa">people_alt</i>Forum Gaya
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
										<div class="col s12 m12 l6">
											<a href="#!" class="materi-item-siswa">
												<div class="card cont-file white">
													<div class="materi-item-cont-siswa">
														<i class="material-icons icon center">description</i> 
														<span class="text">Fisika</span>
													</div>
												</div>
											</a>
										</div>
										<div class="col s12 m12 l6">
											<a href="#!" class="materi-item-siswa">
												<div class="card cont-file white">
													<div class="materi-item-cont-siswa">
														<i class="material-icons icon center">movie</i> 
														<span class="text">Fisika</span>
													</div>
												</div>
											</a>
										</div>
										<div class="col s12 m12 l6">
											<a href="#!" class="materi-item-siswa">
												<div class="card cont-file white">
													<div class="materi-item-cont-siswa">
														<i class="material-icons icon center">tab</i> 
														<span class="text">Fisika</span>
													</div>
												</div>
											</a>
										</div>
									</div>
								</blockquote>

								<br>

								<h6><b>Latihan Soal</b></h6>
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
								</blockquote>
							</div>
						</li>
					</ul>
					<div class="card-action">
						<b>Heri</b>, 23 Juni 2020
					</div>
				</div>
			</div>
			{{-- END ================================================================================ CARD MATERI --}}

		</div>
	</div>
</section>
{{-- END ================================================================================ CONTENT --}}

@endsection