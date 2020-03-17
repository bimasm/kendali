@extends('aapp.app')

@section('title')
Diskusi - Siswa
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
						<h3>Kelas Biologi / Diskusi</h3>
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

			{{-- START ================================================================================ CARD BELUM DISKUSI --}}
			<div class="col s12 m12 l12">
				<div class="card cont-dash white">
					<ul class="collapsible materi-cont-siswa">
						<li>
							<div class="collapsible-header materi-cont-siswa-he">
								<i class="material-icons materi-icon-siswa">people_alt</i>Forum Gaya
								<span class="cont-text-con">
									Belum berdiskusi
								</span>
								<span class="cont-icon-con">
									<a class="btn-floating btn-flat materi-icon-det">
										<i class="cont-det-icon material-icons">keyboard_arrow_down</i>
									</a>
								</span>
							</div>
							<div class="collapsible-body materi-cont-siswa-bo">
								<div class="row">
									<div class="col s12 m12 l12">
										<h6 class="center">Peraturan Diskusi</h6>
									</div>
									<div class="col s12 m12 l12 center">
										<br>
										<a href="{{route('SiswaDiskusiDetail')}}" class="waves-effect waves-light rb-color-2 btn"><i class="material-icons right">arrow_forward</i>Diskusi sekarang</a>
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

			{{-- START ================================================================================ CARD PERNAH DISKUSI --}}
			<div class="col s12 m12 l12">
				<div class="card cont-dash white">
					<ul class="collapsible materi-cont-siswa done">{{-- Jika pernah ditambahkan done pada class --}}
						<li>
							<div class="collapsible-header materi-cont-siswa-he done">{{-- Jika pernah ditambahkan done pada class --}}
								<i class="material-icons materi-icon-siswa">people_alt</i>Forum Gaya
								<span class="cont-text-con">
									Terakhir berdiskusi, 23 June 2020 | 15:30
								</span>
								<span class="cont-icon-con">
									<a class="btn-floating btn-flat materi-icon-det">
										<i class="cont-det-icon material-icons">keyboard_arrow_down</i>
									</a>
								</span>
							</div>
							<div class="collapsible-body materi-cont-siswa-bo">
								<div class="row">
									<div class="col s12 m12 l12">
										<h6 class="center">Peraturan Diskusi</h6>
									</div>
									<div class="col s12 m12 l12 center">
										<br>
										<a href="{{route('SiswaDiskusiDetail')}}" class="waves-effect waves-light rb-color-2 btn"><i class="material-icons right">arrow_forward</i>Diskusi sekarang</a>
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
			{{-- END ================================================================================ CARD PERNAH DISKUSI --}}

		</div>
	</div>
</section>
{{-- END ================================================================================ CONTENT --}}
@endsection