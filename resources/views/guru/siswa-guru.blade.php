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
							<th>Nama/NIS</th>
							<th>Jenjang</th>
{{-- 							<th>Kelas</th> --}}
							<th>Status</th>
							<th class="center">Action</th>
						</tr>
					</thead>
					<tbody>
						@foreach($data as $dt)
						<tr>
							<td>
								{{ 
									\App\Siswa::where(['id' => 
										\App\Relation::where(['id_pelajaran' => $dt->id])
										->value('id_siswa')])
									->value('nama')
								}} 
								/ 
								{{ 
									\App\Siswa::where(['id' => 
										\App\Relation::where(['id_pelajaran' => $dt->id])
										->value('id_siswa')])
									->value('nis')
								}}
							</td>
							<td>
								{{ 
									\App\Sekolah::where(['id' => 
										\App\Siswa::where(['id' => 
											\App\Relation::where(['id_pelajaran' => $dt->id])
											->value('id_siswa')])
										->value('id')])
									->value('jenjang')
								}}
							</td>
							{{-- <td>7C</td> --}}
							<td>Aktif</td>
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