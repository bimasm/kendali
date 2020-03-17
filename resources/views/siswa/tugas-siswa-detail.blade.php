@extends('aapp.app')

@section('title')
Tugas - Siswa
@endsection

@section('nav-siswa')
@include('siswa.app.nav-siswa')
@endsection

@section('app-siswa')

{{-- START ================================================================================ HEADER --}}
<section class="head-cont-tugas-siswa-plus">
	<div class="container">
		<div class="row valign-wrapper-rb">
			<div class="col s12 m12 l6 head-title-tugas-siswa">
				<h5>Judul Tugas</h5>
				<h6>Pelajaran Biologi</h6>
			</div>
			<div class="col s12 m12 l6 head-at-tugas-siswa valign">
				<h6>Anda Belum mengerjakan tugas ini</h6>
				<div class="divider"></div>
				<h6>Batas pengumpulan : 24 June 2020 | 23:59</h6>
			</div>
		</div>
		<br>
		<div class="divider"></div>
		<br>
	</div>
</section>
{{-- END ================================================================================ HEADER --}}

{{-- START ================================================================================ CONTENT --}}
<section>
	<div class="container container-75" style="margin-bottom: 100px">
		<div class="row">

			<div class="col s12 m12 l8">
				<blockquote>
					<h6><b>Heri, 23 June 2020 | 15:30</b></h6>
					<div class="tugas-text">
						<p>
							Buatlah program android sederhana yang terdiri dari 2 activity (bebas nama activity) yang activity 1 dapat berpindah ke activity 2. Kirim file Java dan XML serta video capture hasil aplikasi (bisa dari emulator/HP). Dan tambahkan file TXT dengan format NIM_NAMA
						</p>
					</div>
				</blockquote>
			</div>
			<div class="col s12 m12 l4">
				<div class="card cont-dash white">
					<div class="cont-head">
						<span class="card-title">
							<h6>Upload tugas</h6>
						</span>
					</div>
					<div class="card-content grey-text text-darken-2 con-card-cont">
						<a href="#!" class="materi-item-siswa">
							<div class="card cont-file white">
								<div class="materi-item-cont-siswa">
									<i class="material-icons icon center">description</i> 
									<span class="text">Nama File Tugas</span>
								</div>
							</div>
						</a>
						<form action="#">
							<div class="file-field input-field">
								<div class="btn-up btn no-shads">
									<i class="material-icons">add_circle</i>
									<input type="file" multiple>
								</div>
								<div class="file-path-wrapper">
									<input class="file-path validate" type="text" placeholder="Unggah File Tugas di sini">
								</div>
							</div>
						</form>
						<div class="center">
							<a class="waves-effect btn-flat grey-text text-darken-1"><i class="material-icons right">send</i>Submit</a>
						</div>
					</div>
				</div>

				<div class="card cont-dash white">
					<div class="cont-head">
						<span class="card-title">
							<h6>Tulis pesan untuk tugas</h6>
						</span>
					</div>
					<div class="card-content grey-text text-darken-2 con-card-cont">
						<form action="" method="POST">
							@csrf
							<div class="input-field">
								<textarea id="textarea1" class="chat materialize-textarea"></textarea>
								<label for="textarea1">Deskripsi Tugas</label>
							</div>

							<div class="input-field center">
								<a class="waves-effect btn-flat grey-text text-darken-1"><i class="material-icons right">send</i>Submit</a>
							</div>
						</form>
					</div>
				</div>
			</div>

		</div>
	</div>
</section>
@endsection