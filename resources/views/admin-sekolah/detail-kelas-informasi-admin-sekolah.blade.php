@extends('aapp.app')

@section('title')
Detail Kelas - Admin Sekolah
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
					<h5>Informasi</h5>
				</div>
				
				<div class="con-info-kelas">
					<ul class="collection no-bor">
						<li class="collection-item">
							<div>Kode Kelas<div class="secondary-content-2">Kode</div></div>
						</li>
						<li class="collection-item">
							<div>Guru<div class="secondary-content-2">Heri | 1202170035</div></div>
						</li>
						<li class="collection-item">
							<div>Tanggal dibuat<div class="secondary-content-2">25 Mei 2020</div></div>
						</li>
						<li class="collection-item">
							<div>Jumlah Siswa<div class="secondary-content-2">40 Siswa</div></div>
						</li>
					</ul>
				</div>
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
				"url": "{{asset('asset/js/adminsekolah-ujian.js')}}",
				"dataSrc": "adminsekolah-ujian"
			},

			"columnDefs": [ {
				"targets": -1,
				"data": null,
				"defaultContent": "<div class='center-align'><button class='waves-effect btn-flat'>Detail<i class='material-icons right'>arrow_forward_ios</i></button></div>"
			},],

			'order': [[0, 'asc']],

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