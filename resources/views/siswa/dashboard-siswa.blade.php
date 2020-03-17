@extends('aapp.app')

@section('title')
Dashboard - Siswa
@endsection

@section('nav-siswa')
@include('siswa.app.nav-siswa')
@endsection

@section('app-siswa')

{{-- START ================================================================================ SLIDE --}}
<section>
	<div class="container container-75">
		<div class="carousel carousel-slider dash">

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
	</div>
</section>
{{-- END ================================================================================ SLIDE --}}
<br>
<div class="container container-75">
	<div class="divider"></div>
</div>
<br>
{{-- START ================================================================================ LIST KELAS --}}
<section>
	<div class="container container-75">
		<div class="row">

			<div class="col s12 m12 l4">
				<div class="card cont-dash white">
					<div class="cont-head">
						<span class="card-title">
							<i class="cont-title-icon material-icons center">menu_book</i> Fisika
						</span>
					</div>
					<div class="card-content grey-text text-darken-2">
						<div class="sub-titile">Nama Guru, Jan 26</div>
						<ul class="collection no-bor">
							<li class="collection-item">Materi<div class="secondary-content">1</div></li>
							<li class="collection-item">Ujian<div class="secondary-content">1</div></li>
							<li class="collection-item">Diskusi<div class="secondary-content">1</div></li>
							<li class="collection-item">Tugas<div class="secondary-content">1</div></li>
						</ul>
					</div>
				</div>
			</div>

		</div>
	</div>
</section>
{{-- END ================================================================================ LIST KELAS --}}

<div id="modal-add-kelas" class="modal">
	<div class="modal-content">
		<div class="row">
			<h5>Tambah Kelas</h5>
			<form action="" method="post">
				@csrf
				<div class="input-field col s12">
					<input id="kode-kelas" type="text" class="validate" name="kode-kelas">
					<label for="kode-kelas">Kode Kelas</label>
				</div>
				<div class="input-field col s12 right-align">
					<button type="submit" class="waves-effect waves-light btn"><i class="material-icons right">send</i>submit</button>
				</div>
			</form>
		</div>
	</div>
</div>
@endsection