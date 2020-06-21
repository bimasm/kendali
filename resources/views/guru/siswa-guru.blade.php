@extends('aapp.app')

@section('title')
Siswa - Guru
@endsection

@section('nav-guru')
@include('guru.app.nav-guru')
@endsection

@section('app-guru')
{{-- START ================================================================================ HEADER --}}
@include('guru.app.header-guru')
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
							<th>Tugas</th>
							{{-- 							<th>Kelas</th> --}}
							<th>Nilai</th>
							<th class="center">Action</th>
						</tr>
					</thead>
					<tbody>
						@foreach($nilai as $dt)
						<tr>
							<td>
								{{ 
									\App\Siswa::where('id', $dt->id_siswa)->value('nama')
								}} 
								
								
							</td>
							<td>
								{{ 
									\App\Tugaskelas::where('id',$dt->id_tugas)->value('judul')
																		
								}}
							</td>
							{{-- <td>7C</td> --}}
							<td>
								{{ $dt->nilai }}
							</td>
{{-- 							<td class="center">
								<a class="waves-effect waves-light blue btn">Terima</a>
								<a class="waves-effect waves-light red btn">Tolak</a>
								<a class="waves-effect waves-light red btn">Keluarkan</a>
							</td> --}}
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
</section>
{{-- END ================================================================================ CONTENT --}}

@endsection