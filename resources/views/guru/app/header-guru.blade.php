
<section class="header-csrb container 
{{ (request()->routeIs('GuruSemuaTugas','GuruSemuaUjian','GuruRekapNilai','GuruRekapNilaiDetail','GuruSetting','GuruDashboard')) ? 'header-csrb-mod' : '' }}
">
<div class="row">

	{{-- START ================================================================================= HEADER WITH ALL DATA --}}
	@if(request()->routeIs('DetailKelas','TugasKelas','UjianKelas','DiskusiKelas','SiswaKelas'))
	<div class="col s12 m12 l6 left">
		@foreach($data as $dt)

		@if(request()->routeIs('DetailKelas','TugasKelas','UjianKelas','DiskusiKelas','SiswaKelas'))
		<h4>Kelas {{ $dt->pelajaran }} ( {{ $dt->kode }} )</h4>
		@endif

		@endforeach
	</div>

	<div class="col s12 m12 l6 right con">

		@if(request()->routeIs('DetailKelas','TugasKelas','UjianKelas','DiskusiKelas'))
		<div id="tab2">
			<a onclick="myDetail()" class="waves-effect waves-light btn btn-flat-2-rb">
				<i class="material-icons left">add</i>

				@if(request()->routeIs('DetailKelas'))
				Materi Baru
				@endif

				@if(request()->routeIs('TugasKelas'))
				Tugas Baru
				@endif

				@if(request()->routeIs('UjianKelas'))
				Ujian Baru
				@endif

				@if(request()->routeIs('DiskusiKelas'))
				Diskusi Baru
				@endif
			</a>
		</div>

		<div id="detail2" style="display: none">
			<a onclick="myClose()" class="waves-effect waves-light btn btn-flat-2-rb">
				<i class="material-icons left">arrow_back</i>Kembali
			</a>
		</div>
		@endif
	</div>
	@endif
	{{-- END =================================================================================== HEADER WITH ALL DATA --}}

	{{-- START ================================================================================= HEADER WITH DETAIL DATA --}}
	@if(request()->routeIs('GuruTugasDetail','GuruDiskusiDetail'))
	<div class="col s12 m12 l6 left">

		@if(request()->routeIs('GuruTugasDetail'))
		<h5>{{ $tg->judul }}</h5>
		<h6>Pelajaran {{ \App\Pelajaran::where(['id' => $tg->id_pelajaran])->value('pelajaran')}}</h6>
		@endif

		@if(request()->routeIs('GuruDiskusiDetail'))
		<h5>Diskusi Gaya</h5>
		<h6>Pelajaran Biologi</h6>
		@endif

	</div>

	<div class="col s12 m12 l6 right con">

		@if(request()->routeIs('GuruTugasDetail'))
		<h6>Batas pengumpulan : 
			{{ date('j F Y', strtotime($tg->deadline)) }} | {{ date('H:i', strtotime($tg->deadline)) }}
		</h6>
		@endif

		@if(request()->routeIs('GuruDiskusiDetail'))
		@endif
	</div>
	@endif
	{{-- END =================================================================================== HEADER WITH DETAIL DATA --}}

	{{-- START ================================================================================= HEADER WITH MONITOR DATA --}}
	@if(request()->routeIs('GuruSemuaTugas','GuruSemuaUjian','GuruRekapNilai','GuruRekapNilaiDetail','GuruSetting','GuruDashboard'))
	<div class="col s12 m12 l6 left">

		@if(request()->routeIs('GuruSemuaTugas'))
		<h5>Semua Tugas</h5>
		@endif

		@if(request()->routeIs('GuruSemuaUjian'))
		<h5>Semua Ujian</h5>
		@endif

		@if(request()->routeIs('GuruRekapNilai'))
		<h5>Rekap Nilai</h5>
		@endif

		@if(request()->routeIs('GuruRekapNilaiDetail'))
		<h5>Rekap Nilai</h5>
		@endif

		@if(request()->routeIs('GuruSetting'))
		<h5>Setting Akun</h5>
		@endif

		@if(request()->routeIs('GuruDashboard'))
		<h5>Dashboard</h5>
		@endif

	</div>

	<div class="col s12 m12 l6 right">
		@if(request()->routeIs('GuruRekapNilaiDetail'))
		<h5>Fisika</h5>
		@endif

		@if(request()->routeIs('GuruDashboard'))
		<div id="tab2">
			<a href="#modal-add-kelas" class="modal-trigger waves-effect waves-light btn btn-flat-2-rb">
				<i class="material-icons right">add</i>Kelas Baru
			</a>
		</div>
		@endif
	</div>
	@endif
	{{-- END =================================================================================== HEADER WITH MONITOR DATA --}}

</div>
<div class="divider"></div>
</section>