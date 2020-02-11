@extends('aapp.app')

@section('title')
Rekap Nilai - Siswa
@endsection

@section('nav-siswa')
@include('siswa.app.nav-siswa')
@endsection

@section('app-siswa')

<section class="head-cont-tugas-siswa">
	<div class="container">
		<div class="row {{-- valign-wrapper-rb --}}">
			<div class="col s12 m12 l6 head-title-tugas-siswa">
				<h5>Rekap Nilai</h5>
				{{-- <h6>Pelajaran Biologi</h6> --}}
			</div>
			<div class="col s12 m12 l6 head-at-tugas-siswa {{-- valign --}}">
				{{-- <h6>1 Tugas belum dikerjakan</h6>
				<div class="divider"></div>
				<h6>1 Ujian belum dikerjakan</h6> --}}
			</div>
		</div>
		<br>
		<div class="divider"></div>
		<br>
	</div>
</section>

<section style="margin: 60px 0">
	<div class="container">
		<div class="row">
			<div class="col s12 m12 l12">
				
				<table class="highlight">
					<thead>
						<tr>
							<th>No</th>
							<th>Kelas</th>
							<th>Materi</th>
							<th>Sesi</th>
							<th>Waktu</th>
							<th>Nilai</th>
						</tr>
					</thead>

					<tbody>
						<tr>
							<td>1</td>
							<td>Biologi, Heri</td>
							<td>Sistem Reproduksi</td>
							<td>Ujian</td>
							<td>23 June 2020 | 15:30</td>
							<td>60 / 100</td>
						</tr>
						<tr>
							<td>2</td>
							<td>Biologi, Heri</td>
							<td>Sistem Reproduksi</td>
							<td>Tugas</td>
							<td>23 June 2020 | 15:30</td>
							<td>60 / 100</td>
						</tr>
						<tr>
							<td>3</td>
							<td>Biologi, Heri</td>
							<td>Sistem Reproduksi</td>
							<td>Ujian</td>
							<td>23 June 2020 | 15:30</td>
							<td>60 / 100</td>
						</tr>
						<tr>
							<td>3</td>
							<td>Biologi, Heri</td>
							<td>Sistem Reproduksi</td>
							<td>Ujian</td>
							<td>23 June 2020 | 15:30</td>
							<td>60 / 100</td>
						</tr>
						<tr>
							<td>3</td>
							<td>Biologi, Heri</td>
							<td>Sistem Reproduksi</td>
							<td>Ujian</td>
							<td>23 June 2020 | 15:30</td>
							<td>60 / 100</td>
						</tr>
						<tr>
							<td>3</td>
							<td>Biologi, Heri</td>
							<td>Sistem Reproduksi</td>
							<td>Ujian</td>
							<td>23 June 2020 | 15:30</td>
							<td>60 / 100</td>
						</tr>
						<tr>
							<td>3</td>
							<td>Biologi, Heri</td>
							<td>Sistem Reproduksi</td>
							<td>Ujian</td>
							<td>23 June 2020 | 15:30</td>
							<td>60 / 100</td>
						</tr>
					</tbody>
				</table>

			</div>
		</div>
	</div>
</section>
@endsection