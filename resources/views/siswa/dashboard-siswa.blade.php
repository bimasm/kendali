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

			@foreach($kelas as $ks)
			<div class="col s12 m12 l4">
				<div class="card card-icon-menu">
					<div class="card-header">
						<a class="title" href="siswa/kelas/{{ $ks->id }}">
							<i class="material-icons">menu_book</i> 
							<span>{{ $ks->pelajaran }}</span>
						</a>
						<span>
							<a class="dropdown-trigger waves-effect btn-icon-flat" data-target='menu-card1-{{$ks->id}}'>
								<i class="material-icons">more_vert</i>
							</a>
						</span>
					</div>
					<div class="card-content">
						By {{ \App\Guru::where('id', $ks->id_guru)->value('nama') }}
					</div>
				</div>
				<ul id="menu-card1-{{$ks->id}}" class="dropdown-content dropdown-menu-card">
					<li>
						<a href="#!">
							<i class="material-icons">assignment_ind</i>Record Anda
						</a>
					</li>
					<li>
						<a href="#!">
							<i class="material-icons">meeting_room</i>Keluar
						</a>
					</li>
				</ul>
			</div>
			@endforeach

		</div>
	</div>
</section>
{{-- END ================================================================================ LIST KELAS --}}
<div id="modal-add-kelas" class="modal">
	<div class="modal-content white">
		<div class="row">
			<h5>Tambah Kelas</h5>
			<form action="{{route('JoinKelasSiswa')}}" method="post">
				@csrf
				<div class="input-field col s12">
					<input id="kode-kelas" type="text" class="validate" name="kode">
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