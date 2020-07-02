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
<section id="tab" class="mt-1">
	<div class="container container-60" style="margin-bottom: 100px">
		@foreach($tugas as $tg)
		<div class="row">
			<div class="col s12 m12 l12">
				<div class="card card-icon-collapsible">
					<ul class="collapsible">
						<li>
							<div class="collapsible-header">
								<i class="material-icons title">assignment</i>
								{{ $tg->judul }}
								<span>
									<a class="waves-effect btn-icon-flat">
										<i class="material-icons">keyboard_arrow_down</i>
									</a>
								</span>
							</div>
							<div class="collapsible-body">
								<div class="row valign-wrapper">
									<div class="col s10">
										<h6><b>Detail Tugas</b></h6>
										<blockquote>
											<div class="tugas-text">
												<p>{{ $tg->tugas }}</p>
											</div>
										</blockquote>
									</div>
									<div class="col s2 center valign">
										<span>
											<a class="dropdown-trigger waves-effect btn-icon-flat" data-target="dropdownmenumat{{ $tg->id }}">
												<i class="material-icons">more_vert</i>
											</a>
										</span>
										<ul id="dropdownmenumat{{ $tg->id }}" class="dropdown-content dropdown-menu-table">
											<li>
												<a href="#modal-edit-tugas{{ $tg->id }}" class="modal-trigger">
													<i class="material-icons">edit</i>Edit
												</a>
											</li>
											<li>
												<a href="#modal-hapus-tugas{{ $tg->id }}" class="modal-trigger">
													<i class="material-icons">delete</i>Hapus
												</a>
											</li>
										</ul>
									</div>
								</div>
								<div class="divider"></div>
								<blockquote>
									<table>
										<tbody>
											<tr>
												<th>Siswa Mengumpulkan</th>
												<td>
													{{ \App\Jawabantugas::where(['id_tugas' => $tg->id])->count()}} Siswa
												</td>
											</tr>
											<tr>
												<th>Siswa Belum Mengumpulkan</th>
												@foreach($data as $dt)
												<td>
													{{ \App\Relation::where('id_pelajaran', $dt->id)->count()-\App\Jawabantugas::where(['id_tugas' => $tg->id])->count() }} Siswa
												</td>
												@endforeach
											</tr>
										</tbody>
									</table>
								</blockquote>
								<br>
								<div class="right-align">
									<a href="{{route('GuruTugasDetail', $tg->id)}}" class="waves-effect btn-flat btn-border-prim">
										<i class="material-icons right">arrow_forward</i>Detail Tugas
									</a>
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
		<div class="card card-polos">
			<div class="card-content">

				<form action="{{ route('addtugas') }}" method="post">
					@csrf
					<div class="row">
						@foreach($data as $dt)
						<input type="hidden" name="id_pelajaran" value="{{ $dt->id }}">
						@endforeach

						<div class="input-field col s12 pwh-bg">
							<input id="judul" type="text" class="validate" name="judul">
							<label for="judul">Judul Tugas</label>
						</div>

						<div class="input-field col s12 pwh-bg pwh-textarea">
							<textarea id="tugas" class="materialize-textarea" name="tugas">
							</textarea>
							<label for="tugas">Textarea</label>
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
					</div>

					<div class="input-field col s12 center">
						<button type="submit" class="waves-effect waves-light btn btn-solid-prim">
							<i class="material-icons right">send</i>Submit
						</button>
					</div>
				</form>

			</div>
		</div>
	</div>
</section>
{{-- END ================================================================================ TAMBAH TUGAS --}}
@foreach($tugas as $tg)
@include('guru.app.modal-tugas-guru')
@endforeach
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