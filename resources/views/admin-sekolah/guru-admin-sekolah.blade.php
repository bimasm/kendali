@extends('aapp.app')

@section('title')
Guru - Admin Sekolah
@endsection

@section('nav-admin-sekolah')
@include('admin-sekolah.app.nav-admin-sekolah')
@endsection

@section('app-admin-sekolah')

<div id="tab3" class="fixed-action-btn animated fadeIn faster">
	<a onclick="myDetail()" class="btn-floating btn-large waves-effect waves-light red modal-trigger">
		<i class="material-icons">add</i>
	</a>
</div>

{{-- START ================================================================================ HEADER --}}
<section class="head-cont-tugas-siswa">
	<div class="container container-75">
		<div class="row valign-wrapper-rb">
			<div class="col s12 m12 l4 head-title-tugas-siswa">

				<div id="tab2" class="animated fadeIn faster">
					<h5>Guru</h5>
					<p>SDN 1 Gendoh</p>
				</div>
				<div id="detail2" class="animated fadeIn faster" style="display: none">
					<a onclick="myClose()" class="waves-effect waves-light btn rb-color-2"><i class="material-icons left">arrow_back</i>Kembali</a>
				</div>

			</div>

			<div class="col s12 m12 l8 head-at-tugas-siswa valign">
				<div id="tab5" class="animated fadeIn faster" style="display: none">
					<div class="title-action">
						<h5>Tambah Guru</h5>
						<p>SDN 1 Gendoh</p>
					</div>
				</div>

				<div id="tab4" class="prop2 animated fadeIn faster">
					<div class="row valign-wrapper-rb">

						<div id="datacek" class="col s12 m12 l6 prop con-properti" style="display: none">
							<ul>
								<li>
									<button id="hapus" href="#modalhapus" class='waves-effect btn-flat modal-trigger'>
										<i class="material-icons left">delete</i>hapus
									</button>
								</li>
								<li>
									<button id="status" href="#modaledit" class='waves-effect btn-flat modal-trigger'>
										<i class="material-icons left">edit</i>edit
									</button>
								</li>
								<li>
									<button id="view" href="#!" class='waves-effect btn-flat modal-trigger'>
										<i class="material-icons left">pageview</i>View
									</button>
								</li>
							</ul>
						</div>

						<div class="col s12 m12 l6">
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

				{{-- START ========================================================== TABEL WEB --}}
				<div class="web-view">
					<table id="example" class="highlight" style="width:100%">
						<thead>
							<tr>
								<th></th>
								<th>NIP</th>
								<th>Nama Lengkap</th>
								<th>JK</th>
								<th>Tanggal dibuat</th>
								<th>Jumlah Kelas</th>
							</tr>
						</thead>
					</table>
				</div>
				{{-- END ========================================================== TABEL WEB --}}

				{{-- START ========================================================== TABEL MOBILE --}}
				<div class="mobile-view">
					<table id="example2" class="highlight" style="width:100%">
						<thead>
							<tr>
								<th>NIP</th>
								<th>Nama Lengkap</th>
								<th></th>
							</tr>
						</thead>
					</table>
				</div>
				{{-- END ========================================================== TABEL MOBILE --}}
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

@include('admin-sekolah.app.modal')

@endsection

@section('js-plus')

{{-- tab --}}
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
</script>

{{-- tabel WEB --}}
<script type="text/javascript">
	$(document).ready(function() {
		var table = $('#example').DataTable( {

			"dom": 
			"<'row'<'col s12 m12 l12'tr>>" +
			"<'row'<'col s12 m12 l5'><'col s12 m12 l7'p>>",

			"ajax": {
				"url": "{{asset('asset/js/guru.js')}}"
			},

			"columnDefs": [
			{
				'targets': 0,
				"data" : "id",
				render: function (data, type, row, meta) {
					if (type === "display") {
						data = '<div class="checkbox"><input type="checkbox" class="dt-checkboxes filled-in"><span style="top:5px"></span></div>';
					}
					return data;
				},
				'checkboxes': {
					'selectRow': false,
					'selectAllRender': '<div class="checkbox"><input type="checkbox" class="filled-in"><span style="top:5px"></span></div>'
				}
			},
			{ "targets": 1,"data": "nip" },
			{ "targets": 2,"data": "nama" },
			{ "targets": 3,"data": "jk" },
			{ "targets": 4,"data": "cretaed_at" },
			{ "targets": 5,"data": "kelas_count" },
			],

			select: false,
			
			'order': [[1, 'dsc']]
		} );

		$('#example tbody').on( 'click', 'button', function () { /////////////////////////////////// link
			var data = table.row( $(this).parents('tr') ).data();
			window.location.href = "http://www.w3schools.com";
		} );

		$("#hapus").on("click",function(){ /////////////////////////////////////////////////////////// hapus
			var oAll =[];
			
			$('#example tbody tr.selected').each(function(){
				var data = table.row($(this)).data();
				var row = data[ 'nama' ];
				oAll.push(row);
			});

			document.getElementById("datas2").innerHTML = oAll;

		});

		$('#status').click( function () { /////////////////////////////////////////////////////////// edit
			var data = table.row('.selected').data();

			var nip = data[ 'nip' ];
			var nama = data[ 'nama' ];
			var jk = data[ 'jk' ];
			var kelas_count = data[ 'kelas_count' ];

			document.getElementById("nip").value = nip;
			document.getElementById("nama").value = nama;
			document.getElementById("jk").value = jk;
			document.getElementById("kelas_count").value = kelas_count;
		} );

		oTable = $('#example').DataTable(); ////////////////////////////////////////////////////// search @Lionel 
		$('#myInputTextField').keyup(function(){
			oTable.search($(this).val()).draw();
		})

	} );
</script>

{{-- tabel MOBILE --}}
<script type="text/javascript">
	function format ( d ) {

		return '<table id="tes" cellpadding="5" cellspacing="0" border="0" style="padding-left:50px;">'+
		'<tr style="border: 0;">'+
		'<th>Jenis Kelamin</th>'+
		'<td>'+d.jk+'</td>'+
		'</tr>'+
		'<tr style="border: 0;">'+
		'<th>Jumlah Kelas</th>'+
		'<td>'+d.kelas_count+'</td>'+
		'</tr>'+
		'<tr style="border: 0;">'+
		'<th>Tanggal dibuat</th>'+
		'<td>'+d.cretaed_at+'</td>'+
		'</tr>'+
		'</table>'+
		'<div class="row con-but-mtabel">'+
		'<div class="col s12 m12">'+
		'<a class="waves-effect waves-light btn but-fullw light-blue"><i class="material-icons right">pageview</i>View</a>'+
		'</div>'+
		'<div class="col s12 m12">'+
		'<button id="status2" href="#modaledit" class="waves-effect waves-light btn but-fullw amber modal-trigger"><i class="material-icons right">edit</i>Edit</button>'+
		'</div>'+
		'<div class="col s12 m12">'+
		'<button id="hapus3" href="#modalhapus" class="waves-effect waves-light btn but-fullw red modal-trigger"><i class="material-icons right">delete</i>Hapus</button>'+
		'</div>'+
		'</div>'
		;
	}

	$(document).ready(function() {
		var table2 = $('#example2').DataTable( {

			"dom": 
			"<'row'<'col s12 m12 l12'tr>>" +
			"<'row'<'col s12 m12 l5'><'col s12 m12 l7'p>>",

			"ajax": {
				"url": "{{asset('asset/js/guru.js')}}"
			},

			"columnDefs": [
			{
				'targets': -1,
				"className":      'details-control',
				"orderable":      false,
				"data":           null,
				"defaultContent": ''
			},
			{ "targets": 0,"data": "nip" },
			{ "targets": 1,"data": "nama" },
			],

			select: false,
			
			'order': [[1, 'dsc']]
		} );

		$('#example2 tbody').on('click', 'td.details-control', function () { ////////////////////////// tab
			var tr = $(this).closest('tr');
			var row = table2.row( tr );

			if ( row.child.isShown() ) {

				row.child.hide();
				tr.removeClass('shown');
			}
			else {

				row.child( format(row.data()) ).show();
				tr.addClass('shown');
			}
		} );

		$('#example2').on( 'click', '#hapus3', function () { ///////////////////////////////////////// hapus
			var data = table2.row( $(this).closest('tr').prev()[0] ).data();

			document.getElementById("datas2").innerHTML = data[ 'nip' ];
		} );

		$('#example2').on( 'click', '#status2', function () { ///////////////////////////////////////// edit
			var data = table2.row( $(this).closest('tr').prev()[0] ).data();

			var nip = data[ 'nip' ];
			var nama = data[ 'nama' ];
			var jk = data[ 'jk' ];
			var kelas_count = data[ 'kelas_count' ];

			document.getElementById("nip").value = nip;
			document.getElementById("nama").value = nama;
			document.getElementById("jk").value = jk;
			document.getElementById("kelas_count").value = kelas_count;
		} );

		oTable = $('#example2').DataTable(); ////////////////////////////////////////////////////// search @Lionel 
		$('#myInputTextField').keyup(function(){
			oTable.search($(this).val()).draw();
		})

	} );
</script>

<script>
	$(document).ready(function () {
		var xx = document.getElementById("status");
		var xt = document.getElementById("view");
		var xy = document.getElementById("hapus");
		var xz = document.getElementById("datacek");

		$('#example').on('change', 'input[type="checkbox"]', function () {

			if($(this).is(":checked")) {
				$(this).parents('tr').addClass("selected");
			} else {
				$(this).parents('tr').removeClass("selected");
			}

			var countCheckedCheckboxes = $('#example').find('td input[type="checkbox"]:checked').length;

			if (countCheckedCheckboxes == 1) {
				xx.style.display = "block";
				xt.style.display = "block";
				xy.style.display = "block";
				xz.style.display = "block";
			} else if (countCheckedCheckboxes >= 2) {
				xx.style.display = "none";
				xt.style.display = "none";
				xy.style.display = "block";
				xz.style.display = "block";
			} else {
				xx.style.display = "none";
				xt.style.display = "none";
				xy.style.display = "none";
				xz.style.display = "none";
			}

			$('#text-datacek').text(countCheckedCheckboxes);
		});

	});
</script>

@endsection