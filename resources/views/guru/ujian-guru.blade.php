@extends('aapp.app')

@section('title')
Ujian - Guru
@endsection

@section('nav-guru')
@include('guru.app.nav-guru')
@endsection

@section('app-guru')

{{-- START ================================================================================ HEADER --}}
@include('guru.app.header-guru')
{{-- END ================================================================================ HEADER --}}

{{-- START ================================================================================ CONTENT --}}
<section id="tab" class="mt-1">
	<div class="container container-60" style="margin-bottom: 100px">
		<div class="row">

			<div class="col s12 m12 l12">
				<div class="card card-icon-collapsible">
					<ul class="collapsible">
						<li>
							{{-- START ==================================================================== HEAD TITLE --}}
							<div class="collapsible-header">
								<i class="material-icons title">list_alt</i>
								Judul Ujian
								<span>
									<a class="waves-effect btn-icon-flat">
										<i class="material-icons">keyboard_arrow_down</i>
									</a>
								</span>
							</div>
							{{-- END ==================================================================== HEAD TITLE --}}

							{{-- START ==================================================================== BODY UJIAN --}}
							<div class="collapsible-body">
								<div class="row valign-wrapper">
									<div class="col s10">
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
									</div>
									<div class="col s2 center valign">
										<span>
											<a class="dropdown-trigger waves-effect btn-icon-flat" data-target="dropdown-ujian">
												<i class="material-icons">more_vert</i>
											</a>
										</span>
										<ul id="dropdown-ujian" class="dropdown-content dropdown-menu-table">
											<li>
												<a href="#modal-ujian-edit" class="modal-trigger">
													<i class="material-icons">edit</i>Edit
												</a>
											</li>
											<li>
												<a href="#modal-ujian-hapus" class="modal-trigger">
													<i class="material-icons">delete</i>Hapus
												</a>
											</li>
										</ul>
									</div>
								</div>
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
								<div class="right-align">
									<a href="#!" class="waves-effect btn-flat btn-border-prim">
										<i class="material-icons right">arrow_forward</i>Detail Ujian
									</a>
								</div>
							</div>
							{{-- END ==================================================================== BODY TUGAS --}}

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
</section>
{{-- END ================================================================================ CONTENT --}}

{{-- START ================================================================================ ADD UJIAN --}}
<section id="detail" style="display: none">
	<div class="container container-60" style="margin-bottom: 100px">
		<div class="card card-polos">
			<div class="card-content">

				<form action="" method="POST">
					@csrf
					<div class="row">
						<div class="input-field col s12 pwh-bg">
							<input id="judul" type="text" class="validate" name="judul">
							<label for="judul">Judul Ujian</label>
						</div>

						<div class="input-field col s12 pwh-bg pwh-select">
							<select name="jenis">
								<option value="" disabled selected>Pilih Jenis Ujian</option>
								<option value="1">Ulangan Harian</option>
								<option value="2">UTS</option>
								<option value="3">UAS</option>
							</select>
							<label>Jenis Ujian</label>
						</div>

						<div class="input-field col s12 m12 l12 pwh-bg pwh-inicon">
							<i class="material-icons prefix">timer</i>
							<input id="durasi" type="text" class="datepicker" name="durasi">
							<label for="durasi">Durasi</label>
						</div>

						<div class="input-field col s12 m12 l6 pwh-bg pwh-inicon">
							<i class="material-icons prefix">date_range</i>
							<input type="text" class="datepicker" name="tgl">
							<label for="textarea1">Tanggal Jatuh Tempo</label>
						</div>
						<div class="input-field col s12 m12 l6  pwh-bg pwh-inicon end">
							<i class="material-icons prefix">access_time</i>
							<input type="text" class="timepicker" name="jam">
							<label for="textarea1">Waktu Jatuh Tempo</label>
						</div>

						<div class="input-field col s12 center">
							<button type="submit" class="waves-effect waves-light btn btn-solid-prim">
								<i class="material-icons right">send</i>Submit
							</button>
						</div>
					</div>
				</form>

			</div>
		</div>
	</div>
</section>
{{-- END ================================================================================ ADD UJIAN --}}
@include('guru.app.modal-ujian-guru')
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