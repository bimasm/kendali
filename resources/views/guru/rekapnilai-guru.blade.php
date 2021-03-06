@extends('aapp.app')

@section('title')
Rekap Nilai - Guru
@endsection

@section('nav-guru')
@include('guru.app.nav-guru')
@endsection

@section('app-guru')
{{-- START ================================================================================ HEADER --}}
@include('guru.app.header-guru')
{{-- END ================================================================================== HEADER --}}

{{-- START ================================================================================ CONTENT --}}
<section class="mt-1">
	<div class="container container-60" style="margin-bottom: 100px">
		<br>
		<div class="row">

			<div class="col s12 m12 l12">
				<div class="card cont-dash white">
					<ul class="materi-cont-siswa">
						<li>
							<div class="collapsible-header materi-cont-siswa-he materi">
								<i class="material-icons materi-icon-siswa">insert_chart_outlined</i>Kelas
								<span class="cont-icon-con">
									<a href="{{route('GuruRekapNilaiDetail')}}" class="waves-effect waves-light btn btn-flat-rb no-bor">
										<i class="cont-det-icon material-icons right">arrow_forward</i>Detail
									</a>
								</span>
							</div>
						</li>
					</ul>
				</div>
			</div>

		</div>
	</div>
</section>
{{-- END ================================================================================ CONTENT --}}

@endsection