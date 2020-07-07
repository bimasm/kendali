@extends('aapp.app')

@section('title')
Semua Tugas & Ujian - Siswa
@endsection

@section('nav-siswa')
@include('siswa.app.nav-siswa')
@endsection

@section('app-siswa')

{{-- START ================================================================================ SLIDE --}}
@include('siswa.app.header-siswa')
{{-- END ================================================================================== SLIDE --}}

{{-- START ================================================================================ CONTENT --}}
<section>
	<div class="container container-75" style="margin-bottom: 100px">
		<div class="row">
			<div class="col s12" style="margin-bottom: 2rem">
				<ul class="tabs">
					<li class="tab col s4"><a class="active" href="#tugas">Tugas</a></li>
					<li class="tab col s4"><a href="#ujian">Ujian</a></li>
					<li class="tab col s4"><a href="#diskusi">Diskusi</a></li>
				</ul>
			</div>
			<div id="tugas" class="col s12">

				<div class="container container-75">
					<div class="row">

						@foreach($tugas as $tg)
						<div class="col s12 m12 l12">
							<div class="card card-icon-collapsible">
								<ul class="collapsible">
									<li>
										<div class="collapsible-header">
											<i class="material-icons title">assignment</i>
											<div class="show-on-medium-and-down hide-on-large-only">
												{!! Str::limit($tg->judul, 18, '...') !!}
											</div>
											<div class="show-on-large hide-on-med-and-down">
												{!! Str::limit($tg->judul, 45, '...') !!}
											</div>
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
											<div class="card-content">
												<div class="center">
													<h6>
														@if(\App\Jawabantugas::where('id_tugas', $tg->id)->where('id_siswa',Auth::guard('siswa')->user()->id)->count()>0)
														Sudah dikerjakan ({{ date('j F Y', strtotime( \App\Jawabantugas::where('id_tugas', $tg->id)->where('id_siswa',Auth::guard('siswa')->user()->id)->value('updated_at'))) }}, {{ date('H:i', strtotime( \App\Jawabantugas::where('id_tugas', $tg->id)->where('id_siswa',Auth::guard('siswa')->user()->id)->value('updated_at'))) }})
														@else
														Belum dikerjakan
														@endif
													</h6>
												</div>
												<br>
												<div class="divider"></div>
												<br>
												<h6><b>Detail Tugas</b></h6>
												{{ \App\Guru::where('id', \App\Pelajaran::where('id', \App\Tugaskelas::where('id', $tg->id)->value('id_pelajaran'))->value('id_guru'))->value('nama') }}, {{ date('j F Y', strtotime($tg->created_at)) }}, {{ date('H:i', strtotime($tg->created_at)) }}
												<blockquote>
													<div class="tugas-text">
														<p>{{ $tg->tugas }}</p>
													</div>
												</blockquote>
												<br>
											</div>
											<div class="card-actions">
												<div class="row">
													<div class="col s12 m12 l12 right-align">
														<a href="/siswa/tugas/{{$tg->id_pelajaran}}/detail/{{$tg->id}}" class="waves-effect btn-flat btn-border-prim">
															<i class="material-icons right">arrow_forward</i>Detail Tugas
														</a>
													</div>
												</div>
											</div>
										</div>
									</li>
								</ul>
								<div class="card-action">
									Batas pengumpulan : 
									{{ date('j F Y', strtotime($tg->deadline)) }}, 
									{{ date('H:i', strtotime($tg->deadline)) }}
								</div>
							</div>
						</div>
						@endforeach

					</div>
				</div>

			</div>
			<div id="ujian" class="col s12">

				<div class="container container-75">
					<div class="row">
						<div class="col s12 m12 l12">
							<div class="card card-icon-collapsible">
								<ul class="collapsible">
									<li>
										<div class="collapsible-header">
											<i class="material-icons title">list_alt</i>
											Gaya
											<span class="text">
												Biologi
											</span>
											<span>
												<a class="waves-effect btn-icon-flat">
													<i class="material-icons">keyboard_arrow_down</i>
												</a>
											</span>
										</div>
										<div class="collapsible-body">
											<div class="card-content">
												<h6><b>Detail Ujian</b></h6>
												Heri, 23 June 2020, 02:50
												<blockquote>
													<div class="row">
														<div class="col s12 m12 l12">
															<table>
																<tbody>
																	<tr>
																		<th>Jenis Ujian</th>
																		<td>Ulangan Harian</td>
																	</tr>
																	<tr>
																		<th>Jumlah Soal</th>
																		<td>50 Soal</td>
																	</tr>
																	<tr>
																		<th>Waktu</th>
																		<td>90 menit</td>
																	</tr>
																	<tr>
																		<th>Nilai</th>
																		<td>Belum Dikerjakan</td>
																	</tr>
																</tbody>
															</table>
														</div>
													</div>
												</blockquote>
												<br>
											</div>
											<div class="card-actions">
												<div class="row">
													<div class="col s12 m12 l12 right-align">
														<a href="" class="waves-effect btn-flat btn-border-prim">
															<i class="material-icons right">arrow_forward</i>Kerjakan Sekarang
														</a>
													</div>
												</div>
											</div>
										</div>
									</li>
								</ul>
								<div class="card-action">
									Batas: 23 Juni 2020, 16:30
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
			<div id="diskusi" class="col s12">
				
				<div class="container container-75">
					<div class="row">
						<div class="col s12 m12 l12">
							<div class="card card-icon-collapsible">
								<ul class="collapsible">
									<li>
										<div class="collapsible-header">
											<i class="material-icons title">people_alt</i>
											Forum Gaya
											<span class="text">
												Biologi
											</span>
											<span>
												<a class="waves-effect btn-icon-flat">
													<i class="material-icons">keyboard_arrow_down</i>
												</a>
											</span>
										</div>
										<div class="collapsible-body">
											<div class="card-content">
												<div class="row">
													<div class="col s12 m12 l12">
														<h6 class="center">Peraturan Diskusi</h6>
													</div>
												</div>
											</div>
											<div class="card-actions">
												<div class="row">
													<div class="col s12 m12 l12 right-align">
														<a href="{{route('SiswaDiskusiDetail')}}" class="waves-effect btn-flat btn-border-prim">
															<i class="material-icons right">arrow_forward</i>Diskusi Sekarang
														</a>
													</div>
												</div>
											</div>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>

			</div>

		</div>
	</div>
</section>
{{-- END ================================================================================ CONTENT --}}
@endsection