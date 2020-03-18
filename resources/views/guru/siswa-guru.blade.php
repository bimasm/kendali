@extends('aapp.app')

@section('title')
Siswa - Guru
@endsection

@section('nav-guru')
@foreach($data as $dt)
@include('guru.app.nav-guru')
@endforeach
@endsection

@section('app-guru')
{{-- START ================================================================================ HEADER --}}
<section class="head-cont-tugas-guru">
	<div class="container container-75">
		<div class="row">
			<div class="col s12 m12 l6 fot-card-left">
				@foreach($data as $dt)
				<h4>Kelas {{ $dt->pelajaran }} ( {{ $dt->kode }} )</h4>
				@endforeach
			</div>
			<div class="col s12 m12 l6 fot-card-right">
				
			</div>
		</div>
		<div class="divider"></div>
	</div>
</section>
<br>
<br>
{{-- END ================================================================================ HEADER --}}

{{-- START ================================================================================ CONTENT --}}
<section>
	<div class="container container-60" style="margin-bottom: 100px">
		<div class="row">
			<div class="col s12 m12 l12">
				<table>
					<thead>
						<tr>
							<th>Nama</th>
							<th>Jenjang</th>
							<th>Kelas</th>
							<th>Status</th>
							<th class="center">Action</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Ivan Priyambudi</td>
							<td>SMP</td>
							<td>7C</td>
							<td>Aktif</td>
							{{-- <td class="center">
								<a class="waves-effect waves-light blue btn">Terima</a>
								<a class="waves-effect waves-light red btn">Tolak</a>
								<a class="waves-effect waves-light red btn">Keluarkan</a>
							</td> --}}
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</section>
{{-- END ================================================================================ CONTENT --}}

@endsection