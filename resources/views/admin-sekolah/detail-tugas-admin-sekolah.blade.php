@extends('aapp.app')

@section('title')
Detail Tugas - Admin Sekolah
@endsection

@section('nav-admin-sekolah')
@include('admin-sekolah.app.nav-admin-sekolah')
@endsection

@section('app-admin-sekolah')
{{-- START ================================================================================ HEADER --}}
<section class="head-cont-tugas-siswa animated fadeIn faster">
	<div class="container container-75">
		<div class="row valign-wrapper-rb">
			<div class="col s12 m12 l6 head-title-tugas-siswa">

				<div class="bread-rb-cont">
					<nav class="bread-rb">
						<div class="nav-wrapper">
							<div class="col s12 bread-rb-col">
								<a href="#!" class="breadcrumb bread-rb-c">Kelas</a>
								<a href="#!" class="breadcrumb bread-rb-c">Kode Kelas</a>
								<a href="#!" class="breadcrumb bread-rb-c">Fisika</a>
							</div>
						</div>
					</nav>
				</div>

			</div>
			<div class="col s12 m12 l6 head-at-tugas-siswa valign">
				<h6>SDN 1 Gendoh</h6>
			</div>
		</div>
		<br>
		<div class="divider"></div>
		<br>
	</div>
</section>
{{-- END ================================================================================ HEADER --}}

{{-- START ================================================================================ CONTENT --}}
<section class="animated fadeIn faster">
	<div class="container container-75" style="margin-bottom: 100px">
		<div class="row">

			<div class="col s12 m12 l3 nav-second-bor">
				@include('admin-sekolah.app.subnav-admin-sekolah')
			</div>
			<div class="col s12 m12 l9">
				<div class="sub-bread">
					<h5>Gerak Gravitasi</h5>
				</div>
				
				<div class="row">
					<div class="col s12 m12 l12">
						<h6><b>Detail Tugas</b></h6>
						<blockquote>
							asdasd
						</blockquote>
					</div>

					<div class="col s12 m12 l12">
						<blockquote>
							<table>
								<tbody>
									<tr>
										<th>Siswa Mengumpulkan</th>
										<td class="right-align">
											<a class="modal-trigger" href="#modal-siswa-mengumpulkan">5 Siswa</a>
										</td>
									</tr>
									<tr>
										<th>Siswa Belum Mengumpulkan</th>
										<td class="right-align">
											<a class="modal-trigger" href="#modal-siswa-belum-mengumpulkan">10 Siswa</a>
										</td>
									</tr>
								</tbody>
							</table>
						</blockquote>
					</div>

					<div class="col s12 m12 l12">
						<blockquote>
							<table>
								<tbody>
									<tr>
										<th>Status</th>
										<td class="right-align">Aktif</td>
									</tr>
									<tr>
										<th>Tanggal dibuat</th>
										<td class="right-align">21 Juni 2020</td>
									</tr>
									<tr>
										<th>Jatuh Tempo</th>
										<td class="right-align">23 Juni 2020</td>
									</tr>
								</tbody>
							</table>
						</blockquote>
					</div>
				</div>

			</div>

		</div>
	</div>
</section>
{{-- END ================================================================================ CONTENT --}}

{{-- START ================================================================================ MODAL SISWA MENGUMPULKAN --}}
<div id="modal-siswa-mengumpulkan" class="modal">
	<div class="modal-content">

		<div class="row valign-wrapper-rb">
			<div class="col s12 m12 l4">
				<h5>Siswa Mengumpulkan</h5>
			</div>
			<div class="col s12 m12 l8 valign">
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

		<br>
		<table id="example" class="highlight" style="width:100%">
			<thead>
				<tr>
					<th>No</th>
					<th>Nama</th>
					<th>Tanggal Mengumpulkan</th>
					<th>File</th>
				</tr>
			</thead>
		</table>
	</div>
</div>
{{-- END ================================================================================ MODAL SISWA MENGUMPULKAN --}}

{{-- START ================================================================================ MODAL SISWA MENGUMPULKAN --}}
<div id="modal-siswa-belum-mengumpulkan" class="modal">
	<div class="modal-content">
		
		<div class="row valign-wrapper-rb">
			<div class="col s12 m12 l4">
				<h5>Siswa Belum Mengumpulkan</h5>
			</div>
			<div class="col s12 m12 l8 valign">
				<div class="search-cont">
					<div class="nav-wrapper">
						<form>
							<div class="input-field">
								<input id="myInputTextField2" type="search" placeholder="Cari disini" required>
								<label class="label-icon" for="search"><i class="material-icons">search</i></label>
								<i class="material-icons">close</i>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>

		<br>
		<table id="example2" class="highlight" style="width:100%">
			<thead>
				<tr>
					<th>No</th>
					<th>Nama</th>
				</tr>
			</thead>
		</table>
	</div>
</div>
{{-- END ================================================================================ MODAL SISWA MENGUMPULKAN --}}

@endsection

@section('js-plus')

<script type="text/javascript">
	$(document).ready(function(){
		$('select').formSelect();
	});

	$(document).ready(function() {
		var table = $('#example').DataTable( {

			"dom": 
			"<'row'<'col s12 m12 l12'tr>>" +
			"<'row'<'col s12 m12 l5'i><'col s12 m12 l7'p>>",

			"ajax": {
				"url": "{{asset('asset/js/adminsekolah-tugas-pengumpul.js')}}",
				"dataSrc": "adminsekolah-tugas-pengumpul"
			},

			"columnDefs": [ {
				"targets": -1,
				"data": null,
				"defaultContent": "<div><button class='waves-effect btn-flat'>Detail<i class='material-icons right'>arrow_forward_ios</i></button></div>"
			},],

			'order': [[0, 'asc']],

			"lengthChange": true

		} );

		var table = $('#example2').DataTable( {

			"dom": 
			"<'row'<'col s12 m12 l12'tr>>" +
			"<'row'<'col s12 m12 l5'i><'col s12 m12 l7'p>>",

			"ajax": {
				"url": "{{asset('asset/js/adminsekolah-tugas-belum-pengumpul.js')}}",
				"dataSrc": "adminsekolah-tugas-belum-pengumpul"
			},

			'order': [[0, 'asc']],

			"lengthChange": true

		} );

		$('#example tbody').on( 'click', 'button', function () {
			var data = table.row( $(this).parents('tr') ).data();
			window.location.href = "{{route('AdminSekolahDetailTugas')}}";
		} );

		oTable = $('#example').DataTable();   //pay attention to capital D, which is mandatory to retrieve "api" datatables' object, as @Lionel said
		$('#myInputTextField').keyup(function(){
			oTable.search($(this).val()).draw() ;
		})

		oTable2 = $('#example2').DataTable();   //pay attention to capital D, which is mandatory to retrieve "api" datatables' object, as @Lionel said
		$('#myInputTextField2').keyup(function(){
			oTable2.search($(this).val()).draw() ;
		})

	} );


</script>
@endsection