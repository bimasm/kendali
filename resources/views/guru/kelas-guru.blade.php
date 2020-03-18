@extends('aapp.app')

@section('title')
Kelas - Guru
@endsection

@section('nav-guru')
@foreach($data as $dt)
@include('guru.app.nav-guru')
@endforeach
@endsection

@section('app-guru')

{{-- START ================================================================================ HEADER --}}
<section class="head-cont-tugas-guru">
	<div class="container container-75">
		<div class="row">
			<div class="col s12 m12 l6 fot-card-left">
				@foreach($data as $dt)
				<h4>Kelas {{ $dt->pelajaran }} ( {{ $dt->kode }} )</h4>
				@endforeach
			</div>

			<div class="col s12 m12 l6 fot-card-right">
				<div class="con-head-guru">
					<div id="tab2">
						<a onclick="myDetail()" class="waves-effect waves-light btn rb-color-2"><i class="material-icons right">add</i>Materi Baru</a>
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
{{-- END ================================================================================ HEADER --}}

{{-- START ================================================================================ CONTENT --}}
<section id="tab">
	<div class="container container-60" style="margin-bottom: 100px">
		<div class="row">

			@foreach($materi as $mt)
			<div class="col s12 m12 l12">
				<div class="card cont-dash white">
					<ul class="collapsible materi-cont-siswa">
						<li>
							{{-- START ==================================================================== HEAD TITLE --}}
							<div class="collapsible-header materi-cont-siswa-he materi">
								<i class="material-icons materi-icon-siswa">menu_book</i>{{ $mt->materi }}

								<span class="cont-icon-con">
									<a class="btn-floating btn-flat materi-icon-det">
										<i class="cont-det-icon material-icons">keyboard_arrow_down</i>
									</a>
								</span>
							</div>
							{{-- END ==================================================================== HEAD TITLE --}}

							{{-- START ==================================================================== BODY MATERI --}}
							<div class="collapsible-body materi-cont-siswa-bo">
								<h6><b>File</b></h6>
								<blockquote>
									@foreach($mt->komponen as $k)
									<div class="row">
										<table class="highlight">
											<tbody>
												<tr>
													<td>{{ $k->judul }}</td>
													<td class="center">
														<a href="{{ route('welcome') }}/file/{{ $k->file }}" class="materi-item-siswa" target="_blank">
															<div class="card cont-file white">
																<div class="materi-item-cont-siswa">
																	<i class="material-icons icon center">description</i> 
																	<span class="text">{{ $k->file }}</span>
																</div>
															</div>
														</a>
													</td>

													<td class="center">
														<a href="#modal-edit" class="btn-floating btn waves-effect waves-light blue darken-1 modal-trigger"><i class="material-icons">edit</i></a>

														<a href="#modal-hapus" class="btn-floating btn waves-effect waves-light modal-trigger red"><i class="material-icons">delete</i></a>
													</td>
												</tr>
											</tbody>
										</table>
									</div>
									@endforeach

									<a href="#modal-add-file" class="waves-effect waves-light btn rb-color-2 modal-trigger"><i class="material-icons right">add</i>File Baru</a>
								</blockquote>

								<br>
								{{-- <h6><b>Latihan Soal</b></h6>
										<blockquote>
											<table class="highlight">
												<tbody>
													<tr>
														<td>Nama Latihan</td>
														<td>90 menit</td>
														<td>50 soal</td>
														<td>10 Siswa Mencoba</td>
														<td class="center">
															<a href="#modal-latso-edit" class="btn-floating btn waves-effect waves-light blue darken-1 modal-trigger"><i class="material-icons">edit</i></a>

															<a href="#modal-latso-hapus" class="btn-floating btn waves-effect waves-light red modal-trigger"><i class="material-icons">delete</i></a>

															<a class="waves-effect btn-flat grey-text text-darken-1"><i class="material-icons right">arrow_forward</i>Mulai</a>
														</td>
													</tr>
												</tbody>
											</table>
										</blockquote> --}}
							</div>
							{{-- END ==================================================================== BODY MATERI --}}
						</li>
					</ul>

					<div class="card-action">
						<b>Dibuat : </b>{{ $mt->created_at }}
					</div>
				</div>
			</div>
			@endforeach

		</div>
	</div>
</section>
{{-- END ================================================================================ CONTENT --}}

{{-- START ================================================================================ ADD MATERI --}}
<section id="detail" style="display: none">
	<div class="container container-60" style="margin-bottom: 100px">
		<div class="card cont-dash white">
			<div class="card-content grey-text text-darken-2 con-card-cont">
				<form action="{{ route('addmateri') }}" method="post">
					@csrf
					<div class="col s12 m12 l8 fot-card-left">
						<div class="input-field">
							@foreach($data as $dt)
							<input type="hidden" name="id_pelajaran" value="{{ $dt->id }}">
							@endforeach
							<input id="last_name" type="text" name="materi" class="validate">
							<label for="last_name">Judul Materi</label>
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
{{-- END ================================================================================ ADD MATERI --}}

{{-- START ================================================================================ EDIT MATERI --}}
<div id="modal-edit" class="modal">
	<div class="modal-content">
		<div class="row">
			<form action="" method="">
				@csrf
				<div class="col s12 m12 l8 fot-card-left">
					<div class="input-field">
						<input id="last_name" type="text" class="validate in-jud" value="Judul Tugas">
						<label for="last_name">Judul Materi</label>
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
					<div class="row">
						<div class="file-field input-field col s12">
							<div class="btn-up btn no-shads">
								<i class="material-icons">add_circle</i>
								<input type="file" multiple>
							</div>
							<div class="file-path-wrapper">
								<input class="file-path validate" type="text" placeholder="File Materi">
							</div>
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
{{-- END ================================================================================ EDIT MATERI --}}

{{-- START ================================================================================ ADD FILE MATERI --}}
@foreach($materi as $mt)
<div id="modal-add-file" class="modal">
	<div class="modal-content">
		<div class="row">
			<form action="{{ route('addfilemateri') }}" method="post" enctype="multipart/form-data">
				@csrf
				<div class="col s12 m12 l12 fot-card-left">
					<div class="input-field">
						<input id="last_name" type="text" name="judul" class="validate">
						<label for="last_name">Judul Materi</label>
					</div>
				</div>

				<div class="row" style="padding: 0 60px;">
					<div class="row">
						<div class="file-field input-field col s12">
							<div class="btn-up btn no-shads">
								<i class="material-icons">add_circle</i>
								<input type="file" name="filemateri" multiple>
							</div>
							<div class="file-path-wrapper">
								@foreach($data as $dt)
								<input type="hidden" name="id_pelajaran" value="{{ $dt->id }}">
								@endforeach
								
								<input type="hidden" name="id_materi" value="{{ $mt->id }}">
								
								<input class="file-path validate" type="text" placeholder="File Materi harus pdf">
							</div>
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
@endforeach
{{-- END ================================================================================ ADD FILE MATERI --}}

{{-- START ================================================================================ HAPUS MATERI --}}
<div id="modal-hapus" class="modal m-hapus">
	<div class="modal-content">
		<div class="row">
			<form action="" method="">
				@csrf
				<div class="col s12 center">
					<h5>Apakah anda yakin ?</h5>
					<p>Hapus Judul Materi</p>
				</div>
				<div class="input-field col s12 center">
					<a class="waves-effect waves-light btn red darken-2"><i class="material-icons right">delete</i>Hapus</a>
				</div>
			</form>
		</div>
	</div>
</div>
{{-- END ================================================================================ HAPUS MATERI --}}

{{-- START ================================================================================ HAPUS LATSO MATERI --}}
<div id="modal-latso-hapus" class="modal m-hapus">
	<div class="modal-content">
		<div class="row">
			<form action="" method="">
				@csrf
				<div class="col s12 center">
					<h5>Apakah anda yakin ?</h5>
					<p>Hapus Judul Latihan Soal</p>
				</div>
				<div class="input-field col s12 center">
					<a class="waves-effect waves-light btn red darken-2"><i class="material-icons right">delete</i>Hapus</a>
				</div>
			</form>
		</div>
	</div>
</div>
{{-- END ================================================================================ HAPUS LATSO MATERI --}}

{{-- START ================================================================================ EDIT LATSO MATERI --}}
<div id="modal-latso-edit" class="modal">
	<div class="modal-content">
		<div class="row">
			<form action="" method="">
				@csrf
				<div class="col s12 m12 l8 fot-card-left">
					<div class="input-field">
						<input id="last_name" type="text" class="validate in-jud" value="Judul Latihan Soal">
						<label for="last_name">Judul Latihan Soal</label>
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
					<div class="row">
						<div class="input-field col s12">
							<i class="material-icons prefix">timer</i>
							<input type="text" class="datepicker">
							<label for="textarea1">Durasi</label>
						</div>
						<div class="file-field input-field col s12">
							<div class="btn-up btn no-shads">
								<i class="material-icons">add_circle</i>
								<input type="file" multiple>
							</div>
							<div class="file-path-wrapper">
								<input class="file-path validate" type="text" placeholder="File Latihan Soal">
							</div>
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
{{-- END ================================================================================ HAPUS LATSO MATERI --}}

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