@extends('aapp.app')

@section('title')
Tugas - Guru
@endsection

@section('nav-guru')
@include('guru.app.nav-guru')
@endsection

@section('app-guru')
{{-- START ================================================================================ HEADER --}}
@include('guru.app.header-guru')
{{-- END ================================================================================ HEADER --}}

{{-- START ================================================================================ CONTENT --}}
<section id="tab">
	<div class="container container-60" style="margin-bottom: 100px">
		@foreach($tugas as $tg)
		<div class="row">
			<div class="col s12 m12 l12">
				<div class="card cont-dash white">
					<ul class="collapsible materi-cont-siswa">
						<li>
							{{-- START ==================================================================== HEAD TITLE --}}
							<div class="collapsible-header materi-cont-siswa-he materi">
								<i class="material-icons materi-icon-siswa">assignment</i>{{ $tg->judul }}
								<span class="cont-icon-con">
									<a class="btn-floating btn-flat materi-icon-det">
										<i class="cont-det-icon material-icons">keyboard_arrow_down</i>
									</a>
								</span>
							</div>
							{{-- END ==================================================================== HEAD TITLE --}}

							{{-- START ==================================================================== BODY TUGAS --}}
							<div class="collapsible-body materi-cont-siswa-bo">
								<br>
								<h6><b>Detail Tugas</b></h6>
								<blockquote>
									<div class="tugas-text">
										<p>{{ $tg->tugas }}</p>
									</div>
								</blockquote>
								<br>
								<blockquote>
									<table>
										<tbody>
											<tr>
												<th>Siswa Mengumpulkan</th>
												<td>{{ \App\Jawabantugas::where(['id_tugas' => $tg->id])->count()}} Siswa</td>
											</tr>
											<tr>
												<th>Siswa Belum Mengumpulkan</th>
												@foreach($data as $dt)
												<td>{{ \App\Relation::where('id_pelajaran', $dt->id)->count()-\App\Jawabantugas::where(['id_tugas' => $tg->id])->count() }} Siswa</td>
												@endforeach
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
										<a href="{{route('GuruTugasDetail', $tg->id)}}" class="waves-effect waves-light btn rb-color-2"><i class="material-icons right">arrow_forward</i>Detail</a>
									</div>
								</div>
							</div>
							{{-- END ==================================================================== BODY TUGAS --}}

						</li>
					</ul>

					<div class="card-action">
						Deadline : {{ date('j F Y', strtotime($tg->deadline)) }}, {{ date('H:i', strtotime($tg->deadline)) }}
					</div>
				</div>
			</div>
		</div>
		@endforeach
	</div>
</section>
{{-- END ================================================================================ CONTENT --}}

{{-- START ================================================================================ TAMBAH TUGAS --}}
<section id="detail" style="display: none">
	<div class="container container-60" style="margin-bottom: 100px">
		<div class="card cont-dash white">
			<div class="card-content grey-text text-darken-2 con-card-cont">

				<form action="{{ route('addtugas') }}" method="post">
					@csrf
					<div class="col s12 m12 l12 fot-card-left">
						<div class="input-field">
							<input id="last_name" type="text" name="judul" class="validate">
							<label for="last_name">Judul Tugas</label>
						</div>
					</div>

					<div class="row con-form-60">
						<div class="input-field col s12">
							<textarea id="textarea1" name="tugas" class="materialize-textarea"></textarea>
							<label for="textarea1">Deskripsi Soal</label>
						</div>
						@foreach($data as $dt)
						<input type="hidden" name="id_pelajaran" value="{{ $dt->id }}">
						@endforeach
						<div class="row">
							<div class="input-field col s12 m12 l6">
								<i class="material-icons prefix">date_range</i>
								<input type="text" name="tgl" class="datepicker">
								<label for="textarea1">Tanggal Jatuh Tempo</label>
							</div>
							<div class="input-field col s12 m12 l6">
								<i class="material-icons prefix">access_time</i>
								<input type="text" name="jam" class="timepicker">
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
{{-- END ================================================================================ TAMBAH TUGAS --}}

@include('guru.app.modal-tugas-guru')
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