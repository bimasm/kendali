@extends('aapp.app')

@section('title')
Detail Rekap Nilai - Guru
@endsection

@section('nav-guru')
@include('guru.app.nav-guru')
@endsection

@section('app-guru')
{{-- START ================================================================================ HEADER --}}
<section class="head-cont-tugas-siswa">
	<div class="container container-75">
		<div class="row">
			<div class="col s12 m12 l6 fot-card-left">
				<h4>Semua Tugas</h4>
			</div>
			<div class="col s12 m12 l6 fot-card-right">
				<h5>Fisika</h5>
			</div>
		</div>
		<div class="divider"></div>
	</div>
</section>
{{-- END ================================================================================ HEADER --}}

{{-- START ================================================================================ CONTENT --}}
<section>
	<div class="container container-60" style="margin-bottom: 100px">
		<div class="row">

			{{-- START ================================================================================ BAR TIPE --}}
			<div class="col s12">
				<ul class="tabs">
					<li class="tab col s4"><a class="active" href="#semua">Semua Tipe</a></li>
					<li class="tab col s4"><a href="#tugas">Tugas</a></li>
					<li class="tab col s4"><a href="#ujian">Ujian</a></li>
				</ul>
			</div>
			{{-- END ================================================================================ BAR TIPE --}}

			{{-- START ================================================================================ SEMUA TIPE --}}
			<div id="semua" class="col s12">
				<div class="con-nilai-tab">
					<div class="row">
						<div class="col s12 m12 l12">
							<table>
								<thead>
									<tr>
										<th>Nama</th>
										<th>Tipe</th>
										<th>Judul</th>
										<th>Nilai</th>
									</tr>
								</thead>

								<tbody>
									<tr>
										<td>Ivan Priyambudi</td>
										<td>Ulangan Harian</td>
										<td>Ulangan Gerak Jatuh Bebas</td>
										<td>80 / 100</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
			{{-- START ================================================================================ SEMUA TIPE --}}

			{{-- START ================================================================================ TIPE TUGAS --}}
			<div id="tugas" class="col s12">
				<div class="con-nilai-tab">
					<div class="row">
						<div class="col s12 m12 l12">
							<table>
								<thead>
									<tr>
										<th>Nama</th>
										<th>Judul</th>
										<th>Nilai</th>
									</tr>
								</thead>

								<tbody>
									<tr>
										<td>Ivan Priyambudi</td>
										<td>Ulangan Gerak Jatuh Bebas H</td>
										<td>80 / 100</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
			{{-- END ================================================================================ TIPE TUGAS --}}

			{{-- START ================================================================================ TIPE ULANGAN HARIAN --}}
			<div id="ujian" class="col s12">
				<div class="con-nilai-tab">
					<div class="row">
						<div class="col s12 m12 l12">
							<table>
								<thead>
									<tr>
										<th>Nama</th>
										<th>Level</th>
										<th>Judul</th>
										<th>Nilai</th>
									</tr>
								</thead>

								<tbody>
									<tr>
										<td>Ivan Priyambudi</td>
										<td>Ulangan Harian</td>
										<td>Ulangan Gerak Jatuh Bebas</td>
										<td>80 / 100</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
			{{-- END ================================================================================ TIPE ULANGAN HARIAN --}}
			
		</div>
	</div>
</section>
{{-- END ================================================================================ CONTENT --}}

@endsection