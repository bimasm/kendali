@extends('aapp.app')

@section('title')
Semua Ujian - Guru
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
	<div class="container container-60" style="margin-bottom: 100px">
		<br>
		<div class="row">
			{{-- START ================================================================================ LIST UJIAN --}}
			<div class="col s12 m12 l12">
				<div class="row">

					<div class="col s12 m12 l12">
						<div class="card card-icon-collapsible">
							<ul class="collapsible">
								<li>
									<div class="collapsible-header">
										<i class="material-icons title">list_alt</i>
										Judul Ujian
										<span class="text">
											Fisika
										</span>
										<span>
											<a class="waves-effect btn-icon-flat">
												<i class="material-icons">keyboard_arrow_down</i>
											</a>
										</span>
									</div>

									<div class="collapsible-body">
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
												<a href="#!" class="waves-effect waves-light btn rb-color-2"><i class="material-icons right">arrow_forward</i>Detail</a>
											</div>
										</div>
									</div>
									{{-- END ======================================================================== BODY UJIAN --}}

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
			{{-- END ================================================================================ LIST UJIAN --}}

		</div>
	</div>
</section>
{{-- END ================================================================================ CONTENT --}}

{{-- START ================================================================================ EDIT UJIAN --}}
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

				<div class="row con-form-60">
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
{{-- END ================================================================================ EDIT UJIAN --}}

{{-- START ================================================================================ HAPUS UJIAN --}}
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
{{-- END ================================================================================ HAPUS UJIAN --}}
@endsection