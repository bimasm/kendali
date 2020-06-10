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
				<div class="card cont-dash white">
					<ul class="collapsible materi-cont-siswa">
						<li>
							{{-- START ================================================================================ HEAD TITILE --}}
							<div class="collapsible-header materi-cont-siswa-he materi">
								<i class="material-icons materi-icon-siswa">people_alt</i>Judul Diskusi
								<span class="cont-icon-con">
									<a class="btn-floating btn-flat materi-icon-det">
										<i class="cont-det-icon material-icons">keyboard_arrow_down</i>
									</a>
								</span>
							</div>
							{{-- START ================================================================================ HEAD TITILE --}}

							{{-- START ================================================================================ BODY DISKUSI --}}
							<div class="collapsible-body materi-cont-siswa-bo">
								<br>
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
								<br>
								<div class="row">
									<div class="col s12 m12 l6">
										<a href="#modal-tugas-edit" class="waves-effect waves-light btn modal-trigger blue darken-1"><i class="material-icons left">edit</i>Edit</a>

										<a href="#modal-tugas-hapus" class="waves-effect waves-light btn modal-trigger red darken-2"><i class="material-icons left">delete</i>Hapus</a>	
									</div>
									<div class="col s12 m12 l6 fot-card-right">
										@foreach($data as $dt)
										<a href="{{route('GuruDiskusiDetail', $dt->id)}}" class="waves-effect waves-light btn rb-color-2"><i class="material-icons right">arrow_forward</i>Masuk</a>
										@endforeach
									</div>
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
		<div class="card cont-dash white">
			<div class="card-content grey-text text-darken-2 con-card-cont">
				<form action="" method="">
					@csrf
					<div class="col s12 m12 l12">
						<div class="input-field">
							<input id="last_name" type="text" class="validate">
							<label for="last_name">Judul Diskusi</label>
						</div>
					</div>
					<div class="row con-form-60">
						<div class="input-field col s12">
							<textarea id="textarea1" class="materialize-textarea"></textarea>
							<label for="textarea1">Deskripsi Diskusi</label>
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