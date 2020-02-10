@extends('aapp.app')

@section('title')
Dashboard - Siswa
@endsection

@section('nav-siswa')
@include('siswa.app.nav-siswa')
@endsection

@section('app-siswa')
<section>
	<div class="container" style="width: 75%">

		<div class="carousel carousel-slider dash" style="margin-top:30px">

			<div class="carousel-item car-dash white rb-text-1" href="#one!">
				<div class="container container-slide-dashboard">
					<div class="row" style="padding-bottom: 50px;">
						<div class="col s12 m12 l12">
							<div class="animated is-visible">
								<h2 style="margin-bottom: 0;">Rumah Belajar</h2>
								<h5 style="margin-top: 0;">Banyuwangi</h5>
								<p class="rb-text-1">
									Belajar asyik dan menyenangkan bersama Rumah Belajar, portal pembelajaran yang menyediakan bahan belajar serta fasilitas komunikasi yang mendukung interaksi antar komunitas.
								</p>
							</div>
						</div>
					</div>
				</div>  
			</div>

			<div class="carousel-item car-dash white rb-text-1" href="#two!">
				<div class="container container-slide-dashboard">
					<div class="row" style="padding-bottom: 50px;">
						<div class="col s12 m12 l12">
							<div class="animated is-visible">
								<h2 style="margin-bottom: 0;">Rumah Belajar</h2>
								<h5 style="margin-top: 0;">Banyuwangi</h5>
								<p class="rb-text-1">
									Belajar asyik dan menyenangkan bersama Rumah Belajar, portal pembelajaran yang menyediakan bahan belajar serta fasilitas komunikasi yang mendukung interaksi antar komunitas.
								</p>
							</div>
						</div>
					</div>
				</div>  
			</div>

		</div>
		<br>
		<div class="row">
			{{-- <div class="col s12 m12 l2">
				<div class="collection">
					<a href="#!" class="collection-item active">Semua</a>
					<a href="#!" class="collection-item">Kelas</a>
					<a href="#!" class="collection-item">Ujian & Tugas</a>
					<a href="#!" class="collection-item">Pengetahuan</a>
				</div>
			</div> --}}
			<div class="col s12 m12 l12">
				<div class="row">

					<div class="col s12 m12 l4">
						<div class="card cont-dash white">
							<div class="card-content grey-text text-darken-2">
								<span class="card-title">
									<i class="material-icons">menu_book</i> Biologi
								</span>
								<hr>
								<p>Jan 26</p>
								<br>
								<p>I am a very simple card. I am good at containing small bits of information.
								I am convenient because I require little markup to use effectively.</p>
							</div>
							<div class="card-action">
								<a href="#">Lihat</a>
							</div>
						</div>
					</div>

					<div class="col s12 m12 l4">
						<div class="card cont-dash white">
							<div class="card-content grey-text text-darken-2">
								<span class="card-title">Card Title</span>
								<p>I am a very simple card. I am good at containing small bits of information.
								I am convenient because I require little markup to use effectively.</p>
							</div>
							<div class="card-action">
								<a href="#">Lihat</a>
							</div>
						</div>
					</div>

					<div class="col s12 m12 l4">
						<div class="card cont-dash white">
							<div class="card-content grey-text text-darken-2">
								<span class="card-title">Card Title</span>
								<p>I am a very simple card. I am good at containing small bits of information.
								I am convenient because I require little markup to use effectively.</p>
							</div>
							<div class="card-action">
								<a href="#">Lihat</a>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>
</section>
@endsection