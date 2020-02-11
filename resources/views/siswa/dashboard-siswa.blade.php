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
		<div class="divider"></div>
		<br>
		<div class="row">
			<div class="col s12 m12 l12">
				<div class="row">

					<div class="col s12 m12 l4">
						<div class="card cont-dash white">

							<div class="cont-head">
								<span class="card-title">
									<i class="cont-title-icon material-icons center">menu_book</i> Fisika
								</span>
								<span style="float: right;">
									<a class="dropdown-trigger btn-floating btn-flat waves-effect cont-det-back" href='#' data-target='dropdown2'><i class="cont-det-icon material-icons">more_vert</i></a>
								</span>
							</div>

							<div class="card-content grey-text text-darken-2 con-card-cont">
								<p>Nama Guru, Jan 26</p>
								<br>
								<p>I am a very simple card. I am good at containing small bits of information.
								I am convenient because I require little markup to use effectively.</p>

								<br>
								<div class="center">
									<a class="waves-effect btn-flat grey-text text-darken-1"><i class="material-icons right">arrow_forward</i>Detail</a>
								</div>
							</div>

						</div>

						<ul id='dropdown2' class='dropdown-content'>
							<li><a href="#!">Copy Link</a></li>
							<li class="divider" tabindex="-1"></li>
							<li><a href="#!">three</a></li>
						</ul>
					</div>

					<div class="col s12 m12 l4">
						<div class="card cont-dash white">

							<div class="cont-head">
								<span class="card-title">
									<i class="cont-title-icon material-icons center cont-tugas">assignment</i> Fisika
								</span>
								<span style="float: right;">
									<a class="btn-floating btn-flat waves-effect cont-det-back"><i class="cont-det-icon material-icons">more_vert</i></a>
								</span>
							</div>

							<div class="card-content grey-text text-darken-2 con-card-cont">
								<p>Nama Guru, Jan 26</p>
								<br>
								<p>I am a very simple card. I am good at containing small bits of information.
								I am convenient because I require little markup to use effectively.</p>

								<br>
								<div class="center">
									<a class="waves-effect btn-flat grey-text text-darken-1"><i class="material-icons right">arrow_forward</i>Detail</a>
								</div>
							</div>

						</div>
					</div>

					<div class="col s12 m12 l4">
						<div class="card cont-dash white">

							<div class="cont-head">
								<span class="card-title">
									<i class="cont-title-icon material-icons center">menu_book</i> Fisika
								</span>
								<span style="float: right;">
									<a class="btn-floating btn-flat waves-effect cont-det-back"><i class="cont-det-icon material-icons">more_vert</i></a>
								</span>
							</div>

							<div class="card-content grey-text text-darken-2 con-card-cont">
								<p>Nama Guru, Jan 26</p>
								<br>
								<p>I am a very simple card. I am good at containing small bits of information.
								I am convenient because I require little markup to use effectively.</p>

								<br>
								<div class="center">
									<a class="waves-effect btn-flat grey-text text-darken-1"><i class="material-icons right">arrow_forward</i>Detail</a>
								</div>
							</div>

						</div>
					</div>

					<div class="col s12 m12 l4">
						<div class="card cont-dash white">

							<div class="cont-head">
								<span class="card-title">
									<i class="cont-title-icon material-icons center">menu_book</i> Fisika
								</span>
								<span style="float: right;">
									<a class="btn-floating btn-flat waves-effect cont-det-back"><i class="cont-det-icon material-icons">more_vert</i></a>
								</span>
							</div>

							<div class="card-content grey-text text-darken-2 con-card-cont">
								<p>Nama Guru, Jan 26</p>
								<br>
								<p>I am a very simple card. I am good at containing small bits of information.
								I am convenient because I require little markup to use effectively.</p>

								<br>
								<div class="center">
									<a class="waves-effect btn-flat grey-text text-darken-1"><i class="material-icons right">arrow_forward</i>Detail</a>
								</div>
							</div>

						</div>
					</div>

				</div>
			</div>
		</div>
	</div>
</section>
@endsection