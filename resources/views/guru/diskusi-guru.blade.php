@extends('aapp.app')

@section('title')
Diskusi - Guru
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
		<div class="row">

			<div class="col s12 m12 l12">
				<div class="card card-icon-collapsible">
					<ul class="collapsible">
						<li>
							{{-- START ================================================================================ HEAD TITILE --}}
							<div class="collapsible-header">
								<i class="material-icons title">people_alt</i>
								Judul Diskusi
								<span>
									<a class="waves-effect btn-icon-flat">
										<i class="material-icons">keyboard_arrow_down</i>
									</a>
								</span>
							</div>
							{{-- START ================================================================================ HEAD TITILE --}}

							{{-- START ================================================================================ BODY DISKUSI --}}
							<div class="collapsible-body">
								<div class="row valign-wrapper">
									<div class="col s10">
										<h6><b>Detail Diskusi</b></h6>
										<blockquote>
											<table>
												<tbody>
													<tr>
														<th>Siswa saat ini</th>
														<td>5 Siswa</td>
													</tr>
													<tr>
														<th>Siswa pernah masuk</th>
														<td>10 Siswa</td>
													</tr>
													<tr>
														<th>Siswa belum pernah masuk</th>
														<td>10 Siswa</td>
													</tr>
												</tbody>
											</table>
										</blockquote>
									</div>
									<div class="col s2 center valign">
										<span>
											<a class="dropdown-trigger waves-effect btn-icon-flat" data-target="dropdown-diskusi">
												<i class="material-icons">more_vert</i>
											</a>
										</span>
										<ul id="dropdown-diskusi" class="dropdown-content dropdown-menu-table">
											<li>
												<a href="#modal-diskusi-edit" class="modal-trigger">
													<i class="material-icons">edit</i>Edit
												</a>
											</li>
											<li>
												<a href="#modal-diskusi-hapus" class="modal-trigger">
													<i class="material-icons">delete</i>Hapus
												</a>
											</li>
										</ul>
									</div>
								</div>
								<br>
								<div class="right-align">
									@foreach($data as $dt)
									<a href="{{route('GuruDiskusiDetail', $dt->id)}}" class="waves-effect btn-flat btn-border-prim">
										<i class="material-icons right">arrow_forward</i>Detail Diskusi
									</a>
									@endforeach
								</div>
							</div>
							{{-- END ================================================================================ BODY DISKUSI --}}

						</li>
					</ul>

					<div class="card-action">
						<div class="row" style="margin: 0">
							<div class="col s12 m12 l6 fot-card-left">
								Dibuat : 26 Jan 2020, 14:30
							</div>
							<div class="col s12 m12 l6 fot-card-right">
								2 Siswa <b>Online</b> saat ini
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
</section>
{{-- END ================================================================================ CONTENT --}}

{{-- START ================================================================================ ADD DISKUSI --}}
<section id="detail" style="display: none">
	<div class="container container-60" style="margin-bottom: 100px">
		<div class="card card-polos">
			<div class="card-content">
				<form action="" method="POST">
					@csrf
					<div class="row">
						<div class="input-field col s12 pwh-bg">
							<input id="judul" type="text" class="validate" name="judul">
							<label for="judul">Judul Dikusi</label>
						</div>

						<div class="input-field col s12 pwh-bg pwh-textarea">
							<textarea id="deskripsi" class="materialize-textarea" name="deskripsi">
							</textarea>
							<label for="deskripsi">Textarea</label>
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
{{-- END ================================================================================ ADD DISKUSI --}}
@include('guru.app.modal-diskusi-guru')
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