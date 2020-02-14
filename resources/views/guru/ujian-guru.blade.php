@extends('aapp.app')

@section('title')
Ujian - Guru
@endsection

@section('nav-guru')
@include('guru.app.nav-guru')
@endsection

@section('app-guru')
<section>
	<div class="container" style="margin-top: 1em">
		<div class="row">
			<div class="col s12 m12 l6 fot-card-left">
				<h4>Kelas Fisika \ Ujian</h4>
			</div>
			<div class="col s12 m12 l6 fot-card-right">
				<div class="con-head-guru">
					<div id="tab2">
						<a onclick="myDetail()" class="waves-effect waves-light btn rb-color-2"><i class="material-icons right">add</i>Ujian Baru</a>
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
										<i class="material-icons materi-icon-siswa">list_alt</i>Judul Ujian
										<span class="cont-text-con">
											<span class="cont-text">Fisika</span>
											<a class="btn-floating btn-flat materi-icon-det">
												<i class="cont-det-icon material-icons">keyboard_arrow_down</i>
											</a>
										</span>
									</div>

									<div class="collapsible-body materi-cont-siswa-bo">
										<h6><b>Detail Ujian</b></h6>
										<blockquote>
											<table>
												<tbody>
													<tr>
														<th>Jenis Ujian</th>
														<td>Ulangan Harian</td>
													</tr>
													<tr>
														<th>Jumlah Soal</th>
														<td>50 Soal</td>
													</tr>
													<tr>
														<th>Waktu</th>
														<td>90 menit</td>
													</tr>
												</tbody>
											</table>
										</blockquote>
										<br>
										<h6><b>Monitoring</b></h6>
										<blockquote>
											<table>
												<tbody>
													<tr>
														<th>Siswa Telah Mengerjakan</th>
														<td>5 Siswa</td>
													</tr>
													<tr>
														<th>Siswa Belum Mengerjakan</th>
														<td>10 Siswa</td>
													</tr>
													<tr>
														<th>Rekap Nilai</th>
														<td><a class="waves-effect waves-light btn btn-flat-rb"><i class="material-icons left">insert_chart_outlined</i>Rekap Nilai</a></td>
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
					<div class="col s12 m12 l12">
						<div class="input-field">
							<input id="last_name" type="text" class="validate">
							<label for="last_name">Judul Ujian</label>
						</div>
					</div>
					<div class="row" style="padding: 0 60px;">
						<div class="input-field col s12">
							<select>
								<option value="" disabled selected>Pilih Jenis Ujian</option>
								<option value="1">Ulangan Harian</option>
								<option value="2">UTS</option>
								<option value="3">UAS</option>
							</select>
							<label>Jenis Ujian</label>
						</div>
						<div class="input-field col s12">
							<i class="material-icons prefix">timer</i>
							<input type="text" class="datepicker">
							<label for="textarea1">Durasi</label>
						</div>
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
						<div class="file-field input-field col s12">
							<div class="btn-up btn no-shads">
								<i class="material-icons">add_circle</i>
								<input type="file" multiple>
							</div>
							<div class="file-path-wrapper">
								<input class="file-path validate" type="text" placeholder="Unggah File Ujian di sini">
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
						<input id="last_name" type="text" class="validate in-jud" value="Judul Ujian">
						<label for="last_name">Judul Ujian</label>
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
						<select>
							<option value="" disabled selected>Pilih Jenis Ujian</option>
							<option value="1">Ulangan Harian</option>
							<option value="2">UTS</option>
							<option value="3">UAS</option>
						</select>
						<label>Jenis Ujian</label>
					</div>
					<div class="input-field col s12">
						<i class="material-icons prefix">timer</i>
						<input type="text" class="datepicker">
						<label for="textarea1">Durasi</label>
					</div>
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
					<div class="file-field input-field col s12">
						<div class="btn-up btn no-shads">
							<i class="material-icons">add_circle</i>
							<input type="file" multiple>
						</div>
						<div class="file-path-wrapper">
							<input class="file-path validate" type="text" placeholder="Unggah File Tugas di sini">
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
					<p>Hapus Judul Ujian</p>
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