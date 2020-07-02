@extends('aapp.app')

@section('title')
Tugas - Siswa
@endsection

@section('nav-siswa')
@foreach($data as $dt)
@include('siswa.app.nav-siswa')
@endforeach
@endsection

@section('app-siswa')
{{-- START ================================================================================ SLIDE --}}
@include('siswa.app.header-siswa')
{{-- END ================================================================================== SLIDE --}}

{{-- START ================================================================================ CONTENT --}}
<section class="mt-1">
	<div class="container container-60-t" style="margin-bottom: 100px">
		<div class="row">

			{{-- START ================================================================================ CARD BELUM DIKERJAKAN --}}
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
									@if(\App\Jawabantugas::where('id_tugas', $tg->id)->where('id_siswa',Auth::guard('siswa')->user()->id)->count()>0)
									Sudah dikerjakan
									@else
									Belum dikerjakan
									@endif
								</span>
								<span>
									<a class="waves-effect btn-icon-flat">
										<i class="material-icons">keyboard_arrow_down</i>
									</a>
								</span>
							</div>
							<div class="collapsible-body">
								<h6>
									Batas pengumpulan : 
									{{ date('j F Y', strtotime($tg->deadline)) }}, 
									{{ date('H:i', strtotime($tg->deadline)) }}
								</h6>
								<br>
								<div class="divider"></div>
								<br>
								<h6><b>Detail Tugas</b></h6>
								<blockquote>
									<div class="tugas-text">
										<p>{{ $tg->tugas }}</p>
									</div>
								</blockquote>
								{{-- <br>
								<h6><b>Pekerjaan Anda</b></h6>
								<blockquote>
									Belum ada file
								</blockquote> --}}
								<br>
								<div class="row">
									<div class="col s12 m12 l12 right-align">
										<a href="/siswa/tugas/{{$tg->id_pelajaran}}/detail/{{$tg->id}}" class="waves-effect btn-flat btn-border-prim">
											<i class="material-icons right">arrow_forward</i>Detail Tugas
										</a>
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
			{{-- END ================================================================================ CARD BELUM DIKERJAKAN --}}

			{{-- START ================================================================================ CARD PERNAH DIKERJAKAN --}}
			{{-- <div class="col s12 m12 l12">
				<div class="card cont-dash white">
					<ul class="collapsible materi-cont-siswa done">
						<li>
							<div class="collapsible-header materi-cont-siswa-he done">
								<i class="material-icons materi-icon-siswa">assignment</i>Gaya
								<span class="cont-text-con">
									Dikerjakan, 23 June 2020 | 15:30
								</span>
								<span class="cont-icon-con">
									<a class="btn-floating btn-flat materi-icon-det">
										<i class="cont-det-icon material-icons">keyboard_arrow_down</i>
									</a>
								</span>
							</div>
							<div class="collapsible-body materi-cont-siswa-bo">
								<h6><b>Detail Tugas</b></h6>
										<blockquote>
											<div class="tugas-text">
												<p>Buatlah program android sederhana yang terdiri dari 2 activity (bebas nama activity) yang activity 1 dapat berpindah ke activity 2. Kirim file Java dan XML serta video capture hasil aplikasi (bisa dari emulator/HP). Dan tambahkan file TXT dengan format NIM_NAMA</p>
											</div>
										</blockquote>
										<br>
										<h6><b>Pekerjaan Anda</b></h6>
										<blockquote>
											<div class="row">
												<div class="col s12 m12 l6">
													<a href="#!" class="materi-item-siswa">
														<div class="card cont-file white">
															<div class="materi-item-cont-siswa">
																<i class="material-icons icon center">description</i> 
																<span class="text">Nama File Tugas</span>
															</div>
														</div>
													</a>
												</div>
											</div>
										</blockquote>
										<br>
										<div class="row">
											<div class="col s12 m12 l12 center">
												<a href="{{route('SiswaTugasDetail')}}" class="waves-effect waves-light rb-color-2 btn"><i class="material-icons right">arrow_forward</i>Detail Tugas</a>
											</div>
										</div>
							</div>
						</li>
					</ul>
					<div class="card-action">
						<b>Heri</b>, 23 Juni 2020
					</div>
				</div>
			</div> --}}
			{{-- END ================================================================================ CARD PERNAH DIKERJAKAN --}}

		</div>
	</div>
</section>
{{-- END ================================================================================ CONTENT --}}

@endsection