@extends('aapp.app')

@section('title')
Tugas - Guru
@endsection

@section('nav-guru')
@foreach($data as $dt)
@include('guru.app.nav-guru')
@endforeach
@endsection

@section('app-guru')
<section>
	<div class="container" style="margin-top: 1em">
		<div class="row">
			<div class="col s12 m12 l6 fot-card-left">
				@foreach($data as $dt)
				<h4>Kelas {{ $dt->pelajaran }} ( {{ $dt->kode }} )</h4>
				@endforeach
			</div>
			<div class="col s12 m12 l6 fot-card-right">
				<div class="con-head-guru">
					<div id="tab2">
						<a onclick="myDetail()" class="waves-effect waves-light btn rb-color-2"><i class="material-icons right">add</i>Tugas Baru</a>
					</div>

					<div id="detail2" style="display: none">
						<a onclick="myClose()" class="waves-effect waves-light btn rb-color-2"><i class="material-icons left">arrow_back</i>Kembali</a>
					</div>
				</div>
			</div>
		</div>
		<div class="divider"></div>
	</div>
</section>
<br>
<section id="tab">
	<div class="container" style="width: 60%">
		<div class="row">
			<div class="col s12 m12 l12">
				<div class="row">

					<div class="col s12 m12 l12">
						<div class="card cont-dash white">
							<ul class="collapsible materi-cont-siswa">
								<li>
									<div class="collapsible-header materi-cont-siswa-he">
										<i class="material-icons materi-icon-siswa">assignment</i>Judul Tugas
										<span class="cont-text-con">
											<span class="cont-text">Fisika</span>
											<a class="btn-floating btn-flat materi-icon-det">
												<i class="cont-det-icon material-icons">keyboard_arrow_down</i>
											</a>
										</span>
									</div>

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
												<a href="{{route('GuruTugasDetail')}}" class="waves-effect waves-light btn rb-color-2"><i class="material-icons right">arrow_forward</i>Detail</a>
											</div>
										</div>
									</div>

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
		</div>
	</div>
</section>

<section id="detail" style="display: none">
	<div class="container" style="width: 60%">
		<div class="card cont-dash white">
			<div class="card-content grey-text text-darken-2 con-card-cont">
				<form action="" method="">
					@csrf
					<div class="col s12 m12 l12 fot-card-left">
						<div class="input-field">
							<input id="last_name" type="text" class="validate">
							<label for="last_name">Judul Tugas</label>
						</div>
					</div>
					<div class="row" style="padding: 0 60px;">
						<div class="input-field col s12">
							<textarea id="textarea1" class="materialize-textarea"></textarea>
							<label for="textarea1">Deskripsi Soal</label>
						</div>
						<div class="row">
							<div class="input-field col s6">
								<i class="material-icons prefix">date_range</i>
								<input type="text" class="datepicker">
								<label for="textarea1">Tanggal Jatuh Tempo</label>
							</div>
							<div class="input-field col s6">
								<i class="material-icons prefix">access_time</i>
								<input type="text" class="timepicker">
								<label for="textarea1">Waktu Jatuh Tempo</label>
							</div>
						</div>
					</div>
					<div class="input-field col s12 center">
						<button type="submit" class="waves-effect waves-light btn rb-color-2"><i class="material-icons right">send</i>Submit</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>

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
				<div class="row" style="padding: 0 60px;">
					<div class="input-field col s12">
						<textarea id="textarea1" class="materialize-textarea">Buatlah program android sederhana yang terdiri dari 2 activity (bebas nama activity) yang activity 1 dapat berpindah ke activity 2. Kirim file Java dan XML serta video capture hasil aplikasi (bisa dari emulator/HP). Dan tambahkan file TXT dengan format NIM_NAMA</textarea>
						<label for="textarea1">Deskripsi Soal</label>
					</div>
					<div class="row">
						<div class="input-field col s6">
							<i class="material-icons prefix">date_range</i>
							<input type="text" class="datepicker">
							<label for="textarea1">Tanggal Jatuh Tempo</label>
						</div>
						<div class="input-field col s6">
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
@endsection

@section('js-plus')
<script type="text/javascript">
	function myDetail() {
		var x = document.getElementById("detail");
		var y = document.getElementById("tab");

		var i = document.getElementById("detail2");
		var j = document.getElementById("tab2");


		if (x.style.display === "none" || i.style.display === "none") {
			x.style.display = "block";
			y.style.display = "none";

			i.style.display = "block";
			j.style.display = "none";
		}
	}

	function myClose() {
		var x = document.getElementById("detail");
		var y = document.getElementById("tab");

		var i = document.getElementById("detail2");
		var j = document.getElementById("tab2");

		if (x.style.display === "block" || i.style.display === "block") {
			x.style.display = "none";
			y.style.display = "block";

			i.style.display = "none";
			j.style.display = "block";
		}
	}
</script>
@endsection