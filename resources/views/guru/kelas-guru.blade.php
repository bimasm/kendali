@extends('aapp.app')

@section('title')
Kelas - Guru
@endsection

@section('nav-guru')
@include('guru.app.nav-guru')
@endsection

@section('app-guru')
{{-- START ================================================================================ HEADER --}}
@include('guru.app.header-guru')
{{-- END ================================================================================== HEADER --}}

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
										<table>
											<tbody>
												<tr>
													<td>{{ $k->judul }}</td>

													<td class="center" style="width: 22rem !important">
														<a href="{{ route('welcome') }}/file/{{ $k->file }}" class="materi-item-siswa" target="_blank">
															<div class="card cont-file white">
																<div class="materi-item-cont-siswa">
																	<i class="material-icons icon center">description</i> 
																	<span class="text">{{ $k->file }}</span>
																</div>
															</div>
														</a>
													</td>

													<td class="center" style="width: 8rem !important">
														<span style="">
															<a class="dropdown-trigger btn-floating btn-flat waves-effect cont-det-back" data-target='dropdownmenumat{{ $k->id }}'>
																<i class="cont-det-icon material-icons">more_vert</i>
															</a>
														</span>

														<ul id='dropdownmenumat{{ $k->id }}' class='dropdown-content'>
															<li>
																<a class="grey-text text-darken-3 modal-trigger" href="#modal-edit-materi{{ $k->id }}">
																	<i class="material-icons">edit</i>Edit
																</a>
															</li>
															<li>
																<a class="grey-text text-darken-3 modal-trigger" href="#modal-hapus{{ $k->id }}">
																	<i class="material-icons">delete</i>Hapus
																</a>
															</li>
														</ul>
													</td>
												</tr>
											</tbody>
										</table>
									</div>
									@endforeach

									<a href="#modal-add-file{{ $mt->id }}" class="waves-effect waves-light btn btn-flat-2-rb modal-trigger">
										<i class="material-icons left">add</i>File Baru
									</a>
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
								<b>Dibuat : </b>{{ date('j F Y', strtotime($mt->created_at)) }}, {{ date('H:i', strtotime($mt->created_at)) }}
							</div>
						</div>
					</div>
					@endforeach

				</div>
			</div>
		</section>
		{{-- END ================================================================================== CONTENT --}}

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
								<button type="submit" class="waves-effect waves-light btn btn-flat-2-rb">
									<i class="material-icons right">send</i>Submit
								</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</section>
		{{-- END ================================================================================== ADD MATERI --}}
		@include('guru.app.modal-materi-guru')
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