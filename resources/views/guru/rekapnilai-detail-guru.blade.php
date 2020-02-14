@extends('aapp.app')

@section('title')
Detail Rekap Nilai - Guru
@endsection

@section('nav-guru')
@include('guru.app.nav-guru')
@endsection

@section('app-guru')
<section>
	<div class="container" style="margin-top: 1em">
		<div class="row">
			<div class="col s12 m12 l6 fot-card-left">
				<h4>Detail Rekap Nilai</h4>
			</div>
			<div class="col s12 m12 l6 fot-card-right">
				<h5>Fisika</h5>
			</div>
		</div>
		<div class="divider"></div>
	</div>
</section>
<section>
	<div class="container" style="width: 60%">
		<div class="row">
			<div class="col s12">
				<ul class="tabs">
					<li class="tab col s4"><a class="active" href="#semua">Semua Tipe</a></li>
					<li class="tab col s4"><a href="#tugas">Tugas</a></li>
					<li class="tab col s4"><a href="#ujian">Ujian</a></li>
				</ul>
			</div>
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
										<td>Ulangan Gerak Jatuh Bebas</td>
										<td>80 / 100</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
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
			
		</div>
	</div>
</section>
@endsection