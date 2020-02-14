@extends('aapp.app')

@section('title')
Detail Tugas - Guru
@endsection

@section('nav-siswa')
@include('guru.app.nav-guru')
@endsection

@section('app-guru')

<section class="head-cont-tugas-siswa">
	<div class="container">
		<div class="row valign-wrapper-rb">
			<div class="col s12 m12 l6 head-title-tugas-siswa">
				<h5>Judul Tugas</h5>
				<h6>Pelajaran Biologi</h6>
			</div>
			<div class="col s12 m12 l6 head-at-tugas-siswa valign">
				<h6>Batas pengumpulan : 24 June 2020 | 23:59</h6>
			</div>
		</div>
		<br>
		<div class="divider"></div>
		<br>
	</div>
</section>

<section style="margin-top: 5px">
	<div class="container">
		<div class="row">
			<div class="col s12 m12 l8">
				<blockquote>
					<h6><b>Dibuat : 23 June 2020 | 15:30</b></h6>
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
							<h6>Siswa Upload</h6>
						</span>
					</div>
					<div class="card-content grey-text text-darken-2 con-card-cont">
						<table class="highlight">
							<tbody>
								<tr>
									<td>Ivan Priyambudi</td>
									<td>
										<a href="#modal-tugas-det" class="modal-trigger btn-floating btn-flat waves-effect cont-det-back"><i class="cont-det-icon material-icons">arrow_forward</i></a>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>

			</div>
		</div>
	</div>
</section>

<div id="modal-tugas-det" class="modal">
	<div class="modal-content" style="max-height: calc(115vh - 210px);overflow-y: auto !important;">
		<div class="row">
			<div class="col s12 m12 l8 fot-card-left">
				<h5>Judul Tugas</h5>
				<h6>Fisika</h6>
			</div>
			<div class="col s12 m12 l4 fot-card-right">
				<h5>Ivan Priyambudi</h5>
				<h6>Sabtu, 21 Juni 2020 | 14:50</h6>
			</div>
			<div class="col s12 m12 l12">
				<br>
				<div class="divider"></div>
				<br>
			</div>
			<div class="col s12 m12 l12">
				<h6><b>File Tugas</b></h6>
				<blockquote>
					<div class="row">
						<div class="col s12 m12 l4">
							<a href="#!" class="materi-item-siswa">
								<div class="card cont-file white">
									<div class="materi-item-cont-siswa">
										<i class="material-icons icon center">description</i> 
										<span class="text">Fisika</span>
									</div>
								</div>
							</a>
						</div>
					</div>
				</blockquote>
				<br>
				<h6><b>Deskripsi Tugas</b></h6>
				<blockquote>
					<p>Tidak ada deskripsi</p>
				</blockquote>
			</div>
			<div class="col s12 m12 l12">
				<br>
				<div class="divider"></div>
				<br>
			</div>
			<div class="col s12 m12 l12">
				<form>
					@csrf
					<div class="input-field col s12">
						<input id="last_name" type="number" class="validate" min="0" max="100">
						<label for="last_name">Nilai</label>
					</div>
					<div class="input-field col s12 center">
						<a class="waves-effect waves-light btn"><i class="material-icons right">send</i>Submit</a>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
@endsection