@extends('aapp.app')

@section('title')
Semua Tugas - Guru
@endsection

@section('nav-guru')
@include('guru.app.nav-guru')
@endsection

@section('app-guru')
{{-- START ================================================================================ HEADER --}}
@include('guru.app.header-guru')
{{-- END ================================================================================== HEADER --}}

{{-- START ================================================================================ CONTENT --}}
<section>
	<div class="container container-75" style="margin-bottom: 100px">
		<br>
		<div class="row">
			{{-- START ================================================================================ BAR KELAS --}}
			<div class="col s12 m12 l4">
				<div class="collection n-bor">
					<h5>Kelas</h5>
					<div class="divider"></div>
					<a href="#!" class="collection-item n-bor">Alvin</a>
					<a href="#!" class="collection-item n-bor active">Alvin</a>
					<a href="#!" class="collection-item n-bor">Alvin</a>
					<a href="#!" class="collection-item n-bor">Alvin</a>
				</div>
			</div>
			{{-- END ================================================================================ BAR KELAS --}}

			{{-- START ================================================================================ LIST TUGAS --}}
			<div class="col s12 m12 l8">
				<div class="row">

					<div class="col s12 m12 l12">
						<div class="card cont-dash white">
							<ul class="collapsible materi-cont-siswa">
								<li>
									{{-- START ========================================================================== HEAD TITLE --}}
									<div class="collapsible-header materi-cont-siswa-he">
										<i class="material-icons materi-icon-siswa">assignment</i>Judul Tugas
										<span class="cont-text-con">
											Fisika
										</span>
										<span class="cont-icon-con">
											<a class="btn-floating btn-flat materi-icon-det">
												<i class="cont-det-icon material-icons">keyboard_arrow_down</i>
											</a>
										</span>
									</div>
									{{-- END ========================================================================== HEAD TITLE --}}

									{{-- START ========================================================================== BODY TUGAS --}}
									<div class="collapsible-body materi-cont-siswa-bo">
										<br>
										<h6><b>Detail Tugas</b></h6>
										<blockquote>
											<div class="tugas-text">
												<p>Buatlah program android sederhana yang terdiri dari 2 activity (bebas nama activity) yang activity 1 dapat berpindah ke activity 2. Kirim file Java dan XML serta video capture hasil aplikasi (bisa dari emulator/HP). Dan tambahkan file TXT dengan format NIM_NAMA</p>
											</div>
										</blockquote>
										<br>
										<blockquote>
											<table>
												<tbody>
													<tr>
														<th>Siswa Mengumpulkan</th>
														<td>5 Siswa</td>
													</tr>
													<tr>
														<th>Siswa Belum Mengumpulkan</th>
														<td>10 Siswa</td>
													</tr>
												</tbody>
											</table>
										</blockquote>
										<br>
										<div class="row">
											<div class="col s12 m12 l6">
												<a href="#modal-tugas-edit" class="waves-effect waves-light btn modal-trigger blue darken-1"><i class="material-icons left">edit</i>Edit</a>

												<a href="#modal-tugas-hapus" class="waves-effect waves-light btn modal-trigger red darken-2"><i class="material-icons left">delete</i>Hapus</a>	
											</div>
											<div class="col s12 m12 l6 fot-card-right">
												<a href="#!" class="waves-effect waves-light btn rb-color-2"><i class="material-icons right">arrow_forward</i>Detail</a>
											</div>
										</div>
									</div>
									{{-- END ========================================================================== BODY TUGAS --}}

								</li>
							</ul>

							<div class="card-action">
								<div class="row" style="margin: 0">
									<div class="col s12 m12 l6 fot-card-left">
										Dibuat : 26 Jan 2020, 14:30
									</div>
									<div class="col s12 m12 l6 fot-card-right">
										Jatuh tempo : 27 Jan 2020, 14:30
									</div>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
			{{-- END ================================================================================ LIST TUGAS --}}

		</div>
	</div>
</section>
{{-- END ================================================================================ CONTENT --}}

{{-- START ================================================================================ EDIT TUGAS --}}
<div id="modal-tugas-edit" class="modal">
	<div class="modal-content">
		<div class="row">
			<form action="" method="">
				@csrf
				<div class="col s12 m12 l8 fot-card-left">
					<div class="input-field">
						<input id="last_name" type="text" class="validate in-jud" value="Judul Tugas">
						<label for="last_name">Judul Tugas</label>
					</div>
				</div>
				<div class="col s12 m12 l4 fot-card-right">
					<h5>kelas</h5>
				</div>
				<div class="col s12 m12 l12">
					<hr>
					<br>
				</div>
				<div class="row con-form-60">
					<div class="input-field col s12">
						<textarea id="textarea1" class="materialize-textarea">Buatlah program android sederhana yang terdiri dari 2 activity (bebas nama activity) yang activity 1 dapat berpindah ke activity 2. Kirim file Java dan XML serta video capture hasil aplikasi (bisa dari emulator/HP). Dan tambahkan file TXT dengan format NIM_NAMA</textarea>
						<label for="textarea1">Deskripsi Soal</label>
					</div>
					<div class="row">
						<div class="input-field col s12 m12 l6">
							<i class="material-icons prefix">date_range</i>
							<input type="text" class="datepicker">
							<label for="textarea1">Tanggal Jatuh Tempo</label>
						</div>
						<div class="input-field col s12 m12 l6">
							<i class="material-icons prefix">access_time</i>
							<input type="text" class="timepicker">
							<label for="textarea1">Waktu Jatuh Tempo</label>
						</div>
					</div>
				</div>
				<div class="input-field col s12 center">
					<button type="submit" class="waves-effect waves-light btn rb-color-2"><i class="material-icons right">send</i>Simpan Perubahan</button>
				</div>
			</form>
		</div>
	</div>
</div>
{{-- END ================================================================================ EDIT TUGAS --}}

{{-- START ================================================================================ HAPUS TUGAS --}}
<div id="modal-tugas-hapus" class="modal m-hapus">
	<div class="modal-content">
		<div class="row">
			<form action="" method="">
				@csrf
				<div class="col s12 center">
					<h5>Apakah anda yakin ?</h5>
					<p>Hapus Judul Tugas</p>
				</div>
				<div class="input-field col s12 center">
					<a class="waves-effect waves-light btn red darken-2"><i class="material-icons right">delete</i>Hapus</a>
				</div>
			</form>
		</div>
	</div>
</div>
{{-- END ================================================================================ HAPUS TUGAS --}}
@endsection