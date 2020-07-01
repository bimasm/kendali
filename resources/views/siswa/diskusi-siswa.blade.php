@extends('aapp.app')

@section('title')
Diskusi - Siswa
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
<section>
	<div class="container container-60-t" style="margin-bottom: 100px">
		<div class="row">

			{{-- START ================================================================================ CARD BELUM DISKUSI --}}
			<div class="col s12 m12 l12">
				<div class="card card-icon-collapsible">
					<ul class="collapsible">
						<li>
							<div class="collapsible-header">
								<i class="material-icons title">people_alt</i>
								Forum Gaya
								<span class="text">
									Belum berdiskusi
								</span>
								<span>
									<a class="waves-effect btn-icon-flat">
										<i class="material-icons">keyboard_arrow_down</i>
									</a>
								</span>
							</div>
							<div class="collapsible-body">
								<div class="row">
									<div class="col s12 m12 l12">
										<h6 class="center">Peraturan Diskusi</h6>
									</div>
									<div class="col s12 m12 l12 center">
										<br>
										<a href="{{route('SiswaDiskusiDetail')}}" class="waves-effect btn-flat btn-border-prim">
											<i class="material-icons right">arrow_forward</i>Detail Diskusi
										</a>
									</div>
								</div>
							</div>
						</li>
					</ul>
					<div class="card-action">
						<b>Heri</b>, 23 Juni 2020
					</div>
				</div>
			</div>
			{{-- END ================================================================================ CARD BELUM DISKUSI --}}

		</div>
	</div>
</section>
{{-- END ================================================================================ CONTENT --}}
@endsection