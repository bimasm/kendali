
{{-- START ================================================================================= HEADER WITH ALL DATA --}}
@if(request()->routeIs('DetailKelasSiswa','SiswaTugas','SiswaUjian','SiswaDiskusi'))
<section class="container header-csrb-img">
	<div class="slider">
		<ul class="slides">
			<li>
				<img src="{{asset('asset/img/kelas/header/head.jpg')}}">
				<div class="caption center-align">

					@foreach($data as $dt)
					<h3>
						Kelas {{ $dt->pelajaran }} ({{ $dt->kode }}) / 

						@if(request()->routeIs('DetailKelasSiswa'))
						Materi
						@endif

						@if(request()->routeIs('SiswaTugas'))
						Tugas
						@endif

						@if(request()->routeIs('SiswaUjian'))
						Ujian
						@endif

						@if(request()->routeIs('SiswaDiskusi'))
						Diskusi
						@endif

					</h3>
					<h5 class="light grey-text text-lighten-3">{{ \App\Guru::where('id', $dt->id_guru)->value('nama') }}</h5>
					@endforeach

				</div>
			</li>
		</ul>
	</div>
</section>
@endif
{{-- END =================================================================================== HEADER WITH ALL DATA --}}

{{-- START ================================================================================= HEADER WITH MONITORING DATA --}}
@if(request()->routeIs('SiswaRekapNilai','SiswaTugasUjianSemua'))
<section class="header-csrb container 
{{ (request()->routeIs('SiswaRekapNilai')) ? 'header-csrb-mod' : '' }}
">
<div class="row">
	<div class="col s12 m12 l6 left">

		@if(request()->routeIs('SiswaRekapNilai'))
		<h5>Rekap Nilai</h5>
		@endif

		@if(request()->routeIs('SiswaTugasUjianSemua'))
		<h5>Semua Tugas & Ujian</h5>
		@endif

	</div>

	<div class="col s12 m12 l6 right">
		@if(request()->routeIs('SiswaTugasUjianSemua'))
		<h6>1 Tugas belum dikerjakan</h6>
		<div class="divider"></div>
		<h6>1 Ujian belum dikerjakan</h6>
		@endif
	</div>
</div>
<div class="divider"></div>
</section>
<br>
@endif
{{-- END =================================================================================== HEADER WITH MONITORING DATA --}}