@extends('aapp.app')

@section('title')
Kelas - Admin Sekolah
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
				<h5>Kelas</h5>
				<p>SDN 1 Gendoh</p>
			</div>
			<div class="col s12 m12 l6 head-at-tugas-siswa valign">
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
		<div class="divider"></div>
		<br>
	</div>
</section>
{{-- END ================================================================================ HEADER --}}

{{-- START ================================================================================ CONTENT --}}
<section class="animated fadeIn faster">
	<div class="container container-75" style="margin-bottom: 100px">
		<div class="row">

			<div class="col s12 m12 l12">
				<table id="example" class="highlight" style="width:100%">
					<thead>
						<tr>
							<th>No</th>
							<th>Kode Kelas</th>
							<th>Mata Pelajaran</th>
							<th>Guru</th>
							<th>Tanggal dibuat</th>
							<th>Jumlah Siswa</th>
							<th style="width: 120px"></th>
						</tr>
					</thead>
				</table>
			</div>

		</div>
	</div>
</section>
{{-- END ================================================================================ CONTENT --}}

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
				"url": "{{asset('asset/js/dat.js')}}",
				"dataSrc": "data"
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
			window.location.href = "{{route('AdminSekolahDetailKelasMateri')}}";
		} );

		oTable = $('#example').DataTable();   //pay attention to capital D, which is mandatory to retrieve "api" datatables' object, as @Lionel said
		$('#myInputTextField').keyup(function(){
			oTable.search($(this).val()).draw() ;
		})

	} );
</script>
@endsection