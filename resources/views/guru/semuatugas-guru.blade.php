@extends('aapp.app')

@section('title')
Semua Tugas - Guru
@endsection

@section('nav-guru')
@include('guru.app.nav-guru')
@endsection

@section('app-guru')
{{-- START ================================================================================ HEADER --}}
@include('guru.app.header-guru')
{{-- END ================================================================================== HEADER --}}

{{-- START ================================================================================ CONTENT --}}
<section>
	<div class="container container-60" style="margin-bottom: 100px">
		<br>
		<div class="row">

			{{-- START ================================================================================ LIST TUGAS --}}
			<div class="col s12 m12 l12">
				<div class="row">

					@foreach($data as $tg)
					<div class="col s12 m12 l12">
						<div class="card card-icon-collapsible">
							<ul class="collapsible">
								<li>
									<div class="collapsible-header">
										<i class="material-icons title">assignment</i>
										{{ $tg->judul }}
										<span class="text">
											{{ \App\Pelajaran::where(['id' => $tg->id_pelajaran])->value('pelajaran')}}
										</span>
										<span>
											<a class="waves-effect btn-icon-flat">
												<i class="material-icons">keyboard_arrow_down</i>
											</a>
										</span>
									</div>

									<div class="collapsible-body">
										<div class="row valign-wrapper">
											<div class="col s10">
												<h6><b>Detail Tugas</b></h6>
												<blockquote>
													<div class="tugas-text">
														<p>{{$tg->tugas}}</p>
													</div>
												</blockquote>
											</div>
											<div class="col s2 center valign">
												<span>
													<a class="dropdown-trigger waves-effect btn-icon-flat" data-target="dropdownmenumat{{ $tg->id }}">
														<i class="material-icons">more_vert</i>
													</a>
												</span>
												<ul id="dropdownmenumat{{ $tg->id }}" class="dropdown-content dropdown-menu-table">
													<li>
														<a href="#modal-edit-tugas{{ $tg->id }}" class="modal-trigger">
															<i class="material-icons">edit</i>Edit
														</a>
													</li>
													<li>
														<a href="#modal-hapus-tugas{{ $tg->id }}" class="modal-trigger">
															<i class="material-icons">delete</i>Hapus
														</a>
													</li>
												</ul>
											</div>
										</div>

										<br>
										<blockquote>
											<table>
												<tbody>
													<tr>
														<th>Siswa Mengumpulkan</th>
														<td>
															{{ \App\Jawabantugas::where(['id_tugas' => $tg->id])->count()}} Siswa
														</td>
													</tr>
													<tr>
														<th>Siswa Belum Mengumpulkan</th>
														<td>
															{{ \App\Relation::where('id_pelajaran', $tg->id_pelajaran)->count()-\App\Jawabantugas::where(['id_tugas' => $tg->id])->count() }} Siswa
														</td>
													</tr>
												</tbody>
											</table>
										</blockquote>
										<br>
										<div class="right-align">
											<a href="{{route('GuruTugasDetail', $tg->id)}}" class="waves-effect btn-flat btn-border-prim">
												<i class="material-icons right">arrow_forward</i>Detail Tugas
											</a>
										</div>
									</div>
								</li>
							</ul>

							<div class="card-action">
								Deadline : {{ date('j F Y', strtotime($tg->deadline)) }}, {{ date('H:i', strtotime($tg->deadline)) }}
							</div>
						</div>
					</div>
					@endforeach

				</div>
			</div>
			{{-- END ================================================================================ LIST TUGAS --}}

		</div>
	</div>
</section>
{{-- END ================================================================================ CONTENT --}}
@foreach($data as $tg)
@include('guru.app.modal-tugas-guru')
@endforeach
@endsection