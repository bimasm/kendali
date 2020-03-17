@extends('aapp.app')

@section('title')
Rekap Nilai - Siswa
@endsection

@section('nav-siswa')
@include('siswa.app.nav-siswa')
@endsection

@section('app-siswa')

{{-- START ================================================================================ HEADER --}}
<section class="head-cont-tugas-siswa">
	<div class="container">
		<div class="row">
			<div class="col s12 m12 l6 head-title-tugas-siswa">
				<h5>Rekap Nilai</h5>
			</div>
			<div class="col s12 m12 l6 head-at-tugas-siswa">
			</div>
		</div>
		<br>
		<div class="divider"></div>
		<br>
	</div>
</section>
{{-- END ================================================================================ HEADER --}}

{{-- START ================================================================================ CONTENT --}}
<section>
	<div class="container container-60" style="margin-bottom: 100px">
		
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
</section>
{{-- END ================================================================================ CONTENT --}}

@endsection