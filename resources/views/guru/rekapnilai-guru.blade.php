@extends('aapp.app')

@section('title')
Rekap Nilai - Guru
@endsection

@section('nav-guru')
@include('guru.app.nav-guru')
@endsection

@section('app-guru')
<section>
	<div class="container" style="margin-top: 1em">
		<div class="row">
			<div class="col s12 m12 l6">
				<h4>Rekap Nilai</h4>
			</div>
			<div class="col s12 m12 l6">
				
			</div>
		</div>
		<div class="divider"></div>
	</div>
</section>
<section>
	<div class="container" style="width: 60%">
		<br>
		<div class="row">
			<div class="col s12 m12 l12">
				<div class="row">

					<div class="col s12 m12 l12">
						<div class="card cont-dash white">
							<ul class="materi-cont-siswa">
								<li>
									<div class="collapsible-header materi-cont-siswa-he">
										<i class="material-icons materi-icon-siswa">insert_chart_outlined</i>Kelas
										<span class="cont-text-con">
											<a href="{{route('GuruRekapNilaiDetail')}}" class="waves-effect waves-light btn btn-flat-rb no-bor"><i class="material-icons right">arrow_forward</i>Detail</a>
										</span>
									</div>
								</li>
							</ul>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>
</section>
@endsection