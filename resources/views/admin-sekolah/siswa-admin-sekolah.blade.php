@extends('aapp.app')

@section('title')
Siswa - Admin Sekolah
@endsection

@section('nav-admin-sekolah')
@include('admin-sekolah.app.nav-admin-sekolah')
@endsection

@section('app-admin-sekolah')
{{-- START ================================================================================ HEADER --}}
<section class="head-cont-tugas-siswa">
	<div class="container container-75">
		<div class="row valign-wrapper-rb">
			<div class="col s12 m12 l5 head-title-tugas-siswa">
				<div id="tab2" class="animated fadeIn faster">
					<h5>Siswa</h5>
					<p>SDN 1 Gendoh</p>
				</div>
				<div id="detail2" class="animated fadeIn faster" style="display: none">
					<a onclick="myClose()" class="waves-effect waves-light btn rb-color-2"><i class="material-icons left">arrow_back</i>Kembali</a>
				</div>
			</div>
			<div class="col s12 m12 l7 head-at-tugas-siswa valign">
				<div id="tab5" class="animated fadeIn faster" style="display: none">
					<div class="title-action">
						<h5>Tambah Siswa</h5>
						<p>SDN 1 Gendoh</p>
					</div>
				</div>

				<div class="row valign-wrapper-rb">
					<div class="col s12 m12 l8">
						<div id="tab4" class="animated fadeIn faster">
							<div class="search-cont">
								<div class="nav-wrapper">
									<form>
										<div class="input-field">
											<input id="myInputTextField" type="search" placeholder="Cari disini" required>
											<label class="label-icon" for="search"><i class="material-icons">search</i></label>
											<i class="material-icons">close</i>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
					<div class="col s12 m12 l4 valign cont-add-nav ">
						<div id="tab3" class="animated fadeIn faster">
							<a onclick="myDetail()" class="waves-effect waves-light btn rb-color-2"><i class="material-icons left">add</i>Siswa Baru</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<br>
		<div class="divider"></div>
		<br>
	</div>
</section>
{{-- END ================================================================================ HEADER --}}

{{-- START ================================================================================ CONTENT --}}

{{-- START ================================================================================ TABEL SISWA --}}
<section id="tab" class="animated fadeIn faster">
	<div class="container container-75" style="margin-bottom: 100px">
		<div class="row">

			<div class="col s12 m12 l12">
				<table id="example" class="highlight" style="width:100%">
					<thead>
						<tr>
							<th>No</th>
							<th>NIS</th>
							<th>Nama Lengkap</th>
							<th>JK</th>
							<th>Tanggal dibuat</th>
							<th>Join Kelas</th>
							<th style="width: 120px"></th>
						</tr>
					</thead>
				</table>
			</div>

		</div>
	</div>
</section>
{{-- END ================================================================================ TABEL SISWA --}}

{{-- START ================================================================================ ADD SISWA --}}
<section id="detail" class="animated fadeIn faster" style="display: none">
	<div class="container container-60" style="margin-bottom: 100px">
		<div class="card cont-dash white">
			<div class="card-content grey-text text-darken-2 con-card-cont">
				<form action="" method="">
					@csrf
					<div class="row">
						<div class="input-field col s12 m12 l6">
							<input id="last_name" type="text" class="validate">
							<label for="last_name">Nama Lengkap</label>
						</div>
						<div class="input-field col s12 m12 l6">
							<input id="last_name" type="number" class="validate">
							<label for="last_name">NIP</label>
						</div>
						<div class="input-field col s12 m12 l6">
							<input id="last_name" type="password" class="validate">
							<label for="last_name">Password</label>
						</div>
						<div class="input-field col s12 m12 l6">
							<input id="last_name" type="email" class="validate">
							<label for="last_name">Email</label>
						</div>
						<div class="input-field col s12 m12 l6">
							<select>
								<option value="" disabled selected>Pilih Jenis Kelamin</option>
								<option value="L">Laki - Laki</option>
								<option value="P">Perempuan</option>
							</select>
							<label>Jenis Kelamin</label>
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
{{-- END ================================================================================ ADD SISWA --}}
{{-- END ================================================================================ CONTENT --}}

@endsection

@section('js-plus')

<script type="text/javascript">

	function myDetail() {
		var x = document.getElementById("detail");
		var y = document.getElementById("tab");
		var t = document.getElementById("tab5");

		var i = document.getElementById("detail2");
		var j = document.getElementById("tab2");
		var n = document.getElementById("tab3");
		var s = document.getElementById("tab4");


		if (x.style.display === "none" || i.style.display === "none") {
			x.style.display = "block";
			y.style.display = "none";
			t.style.display = "block";

			i.style.display = "block";
			j.style.display = "none";
			n.style.display = "none";
			s.style.display = "none";
		}
	}

	function myClose() {
		var x = document.getElementById("detail");
		var y = document.getElementById("tab");
		var t = document.getElementById("tab5");

		var i = document.getElementById("detail2");
		var j = document.getElementById("tab2");
		var n = document.getElementById("tab3");
		var s = document.getElementById("tab4");

		if (x.style.display === "block" || i.style.display === "block") {
			x.style.display = "none";
			y.style.display = "block";
			t.style.display = "none";

			i.style.display = "none";
			j.style.display = "block";
			n.style.display = "block";
			s.style.display = "block";
		}
	}

	$(document).ready(function(){
		$('select').formSelect();
	});

	$(document).ready(function() {
		var table = $('#example').DataTable( {

			"dom": 
			"<'row'<'col s12 m12 l12'tr>>" +
			"<'row'<'col s12 m12 l5'i><'col s12 m12 l7'p>>",

			"ajax": {
				"url": "{{asset('asset/js/guru.js')}}",
				"dataSrc": "guru"
			},

			"columnDefs": [ {
				"targets": -1,
				"data": null,
				"defaultContent": "<div class='center-align'><button class='waves-effect btn-flat'>Detail<i class='material-icons right'>arrow_forward_ios</i></button></div>"
			},],

			'order': [[1, 'asc']],

			"lengthChange": true

		} );

		$('#example tbody').on( 'click', 'button', function () {
			var data = table.row( $(this).parents('tr') ).data();
			window.location.href = "http://www.w3schools.com";
		} );

		oTable = $('#example').DataTable();   //pay attention to capital D, which is mandatory to retrieve "api" datatables' object, as @Lionel said
		$('#myInputTextField').keyup(function(){
			oTable.search($(this).val()).draw() ;
		})

	} );
</script>
@endsection