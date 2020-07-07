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
<section id="tab" class="mt-1">
	<div class="container container-60" style="margin-bottom: 100px">
		<div class="row">

			@foreach($materi as $mt)
			<div class="col s12 m12 l12">
				<div class="card card-icon-collapsible">
					<ul class="collapsible">
						<li>
							<div class="collapsible-header">
								<i class="material-icons title">menu_book</i>
								{{ $mt->materi }}
								<span>
									<a class="waves-effect btn-icon-flat">
										<i class="material-icons">keyboard_arrow_down</i>
									</a>
								</span>
							</div>
							<div class="collapsible-body">
								<div class="card-content">
									
								</div>
								<h6><b>File</b></h6>
								<blockquote>
									@foreach($mt->komponen as $k)
									<div class="row">
										<table class="centered">
											<tbody>
												<tr>
													<td class="hide-on-med-and-down">{{ $k->judul }}</td>
													<td class="w22">
														<a href="{{ route('welcome')}}/file/{{ $k->file}}">
															<div class="card card-icon-desc-btn">
																<div class="row">
																	<div class="col s12 m12 l2 icon">
																		<i class="material-icons">
																			description
																		</i> 
																	</div>
																	<div class="col s12 m12 l10 desc">
																		{{ $k->file }} 
																	</div>
																</div>
															</div>
														</a>
													</td>
													<td class="w8">
														<span style="">
															<a class="dropdown-trigger waves-effect btn-icon-flat" data-target="dropdownmenumat{{ $k->id }}">
																<i class="material-icons">more_vert</i>
															</a>
														</span>
														<ul id="dropdownmenumat{{ $k->id }}" class="dropdown-content dropdown-menu-table">
															<li>
																<a href="#modal-edit-materi{{ $k->id }}" class="modal-trigger">
																	<i class="material-icons">edit</i>Edit
																</a>
															</li>
															<li>
																<a href="#modal-hapus-materi{{ $k->id }}" class="modal-trigger">
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
									<div class="center">
										<a href="#modal-add-file{{ $mt->id }}" class="waves-effect btn-flat btn-border-prim modal-trigger">
											<i class="material-icons left">add</i>Tambah File Materi Baru
										</a>
									</div>
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
		<div class="card card-polos">
			<div class="card-content">
				<form action="{{ route('addmateri') }}" method="post">
					@csrf
					<div class="row">
						<div class="input-field col s12 pwh-bg">
							@foreach($data as $dt)
							<input type="hidden" name="id_pelajaran" value="{{ $dt->id }}">
							@endforeach

							<input id="materi" type="text" class="validate" name="materi">
							<label for="materi">Judul Materi</label>
						</div>
						<div class="input-field col s12 center">
							<button type="submit" class="waves-effect waves-light btn modal-trigger btn-solid-prim">
								<i class="material-icons right">send</i>Submit
							</button>
						</div>
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