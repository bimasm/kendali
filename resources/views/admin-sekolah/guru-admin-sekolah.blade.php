@extends('aapp.app')

@section('title')
Guru - Admin Sekolah
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
					<h5>Guru</h5>
					<p>SDN 1 Gendoh</p>
				</div>
				<div id="detail2" class="animated fadeIn faster" style="display: none">
					<a onclick="myClose()" class="waves-effect waves-light btn rb-color-2"><i class="material-icons left">arrow_back</i>Kembali</a>
				</div>
			</div>
			<div class="col s12 m12 l7 head-at-tugas-siswa valign">
				<div id="tab5" class="animated fadeIn faster" style="display: none">
					<div class="title-action">
						<h5>Tambah Guru</h5>
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
							<a onclick="myDetail()" class="waves-effect waves-light btn rb-color-2"><i class="material-icons left">add</i>Guru Baru</a>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="row no-mar">
			<div class="col s12 m12 l12">
				<div class="row">
					<div class="col s12 m12 l6">
						
					</div>
					<div class="col s12 m12 l6">
						<button class="btn-floating btn-large waves-effect waves-light red" id="b-hapus" style="display: none"><i class="material-icons">delete</i>Hapus</button>
						<button class="btn-floating btn-large waves-effect waves-light red" id="b-edit" style="display: none"><i class="material-icons">edit</i>Edit</button>
					</div>
				</div>
			</div>
		</div>
		<div class="divider"></div>
		<br>
	</div>
</section>
{{-- END ================================================================================ HEADER --}}

{{-- START ================================================================================ CONTENT --}}

{{-- START ================================================================================ TABEL GURU --}}
<section id="tab" class="animated fadeIn faster">
	<div class="container container-75" style="margin-bottom: 100px">
		<div class="row">

			<div class="col s12 m12 l12">
				<table id="example" class="highlight" style="width:100%">
					<thead>
						<tr>
							<th>No</th>
							<th>NIP</th>
							<th>Nama Lengkap</th>
							<th>JK</th>
							<th>Tanggal dibuat</th>
							<th>Jumlah Kelas</th>
							<th style="width: 120px"></th>
						</tr>
					</thead>
				</table>
			</div>

		</div>
	</div>
</section>
{{-- END ================================================================================ TABEL GURU --}}

{{-- START ================================================================================ ADD GURU --}}
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
							<input id="last_name" type="number" class="validate">
							<label for="last_name">Contact</label>
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
{{-- END ================================================================================ ADD GURU --}}
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
				"defaultContent": "<div class='center-align'><a class='btn-floating waves-effect waves-light red'><i class='material-icons'>edit</i></a><a class='btn-floating waves-effect waves-light red'><i class='material-icons'>pageview</i></a></div>"
			},
			],

			select: true,

			'order': [[1, 'asc']],

			"lengthChange": true

		} );

		$('#example tbody').on( 'click', 'button', function () {
			var data = table.row( $(this).parents('tr') ).data();
			window.location.href = "http://www.w3schools.com";
		} );

		oTable = $('#example').DataTable();   //pay attention to capital D, which is mandatory to retrieve "api" datatables' object, as @Lionel said
		$('#myInputTextField').keyup(function(){
			oTable.search($(this).val()).draw();
		})

		// $('#example tbody').on( 'click', 'tr', function () {
		// 	var hapus = document.getElementById("b-hapus");
		// 	var edit = document.getElementById("b-edit");
		// 	var sum = $('#example tbody tr.selected').length;

		// 	$(this).toggleClass("selected");

		// 	console.log('n :' + n);
		// 	console.log('sum :' + sum);
		// 	console.log('sim :' + sim);

		// 	if (sum == 1) {
		// 		hapus.style.display = "block";
		// 		edit.style.display = "block";

		// 	} else if (sum >= 2) {
		// 		hapus.style.display = "block";
		// 		edit.style.display = "none";

		// 	} else {
		// 		hapus.style.display = "none";
		// 		edit.style.display = "none";
		// 	}
		// });

		// $( document.body )
		// .click(function() {
		// 	$( document.body ).append( $( "<div>" ) );
		// 	var n = $( "div" ).length;
		// 	// $( "span" ).text( "There are " + n + " divs." +
		// 	// 	"Click to add more.");
		// })

		// var bb = $('#example .selected').length;
		// var n = 0;

		$('#example tbody').on( 'click', 'tr', function () {
			// var hapus = document.getElementById("b-hapus");
			// var edit = document.getElementById("b-edit");
			// var sum = $('#example tbody tr.selected').length;

			var j = $( ".selected" ).length;

			// n += 1;

			// $(this).find('selected');

			// console.log(bb);
			// console.log(n);
			console.log(j);

			// if (bb == 0 && n >= 1) {
			// 	hapus.style.display = "block";
			// 	edit.style.display = "block";

			// } else if (bb >= 2) {
			// 	hapus.style.display = "block";
			// 	edit.style.display = "none";

			// } else if (bb == 0) {
			// 	hapus.style.display = "none";
			// 	edit.style.display = "none";

			// } else {
			// 	hapus.style.display = "none";
			// 	edit.style.display = "none";
			// }

		});

	});
</script>
@endsection