@extends('aapp.app')

@section('title')
Detail Ujian - Admin Sekolah
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
						<h6><b>Detail Ujian</b></h6>
						<blockquote>
							<table>
								<tbody>
									<tr>
										<th>Jenis Ujian</th>
										<td class="right-align">Ulangan Harian</td>
									</tr>
									<tr>
										<th>Jumlah Soal</th>
										<td class="right-align">50 Soal</td>
									</tr>
									<tr>
										<th>Waktu</th>
										<td class="right-align">90 menit</td>
									</tr>
								</tbody>
							</table>
						</blockquote>
						<br>
						<h6><b>Monitoring</b></h6>
						<blockquote>
							<table>
								<tbody>
									<tr>
										<th>Siswa Telah Mengerjakan</th>
										<td class="right-align">
											<a class="modal-trigger" href="#modal-siswa-mengerjakan">5 Siswa</a>
										</td>
									</tr>
									<tr>
										<th>Siswa Belum Mengerjakan</th>
										<td class="right-align">
											<a class="modal-trigger" href="#modal-siswa-belum-mengerjakan">10 Siswa</a>
										</td>
									</tr>
									<tr>
										<th>Rekap Nilai</th>
										<td class="right-align"><a class="waves-effect waves-light btn btn-flat-rb"><i class="material-icons left">insert_chart_outlined</i>Rekap Nilai</a></td>
									</tr>
								</tbody>
							</table>
						</blockquote>
						<br>
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
<div id="modal-siswa-mengerjakan" class="modal">
	<div class="modal-content">

		<div class="row valign-wrapper-rb">
			<div class="col s12 m12 l4">
				<h5>Siswa Mengerjakan</h5>
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
					<th>Tanggal Mengerjakan</th>
					<th>Nilai</th>
				</tr>
			</thead>
		</table>
	</div>
</div>
{{-- END ================================================================================ MODAL SISWA MENGUMPULKAN --}}

{{-- START ================================================================================ MODAL SISWA MENGUMPULKAN --}}
<div id="modal-siswa-belum-mengerjakan" class="modal">
	<div class="modal-content">
		
		<div class="row valign-wrapper-rb">
			<div class="col s12 m12 l4">
				<h5>Siswa Belum Mengurus</h5>
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
				"url": "{{asset('asset/js/adminsekolah-ujian-mengerjakan.js')}}",
				"dataSrc": "adminsekolah-ujian-mengerjakan"
			},

			'order': [[0, 'asc']],

			"lengthChange": true

		} );

		var table = $('#example2').DataTable( {

			"dom": 
			"<'row'<'col s12 m12 l12'tr>>" +
			"<'row'<'col s12 m12 l5'i><'col s12 m12 l7'p>>",

			"ajax": {
				"url": "{{asset('asset/js/adminsekolah-ujian-belum-mengerjakan.js')}}",
				"dataSrc": "adminsekolah-ujian-belum-mengerjakan"
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