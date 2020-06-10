
{{-- START /////////////////////////////////////////////////////////////////////////////////////// DROPDOWN AKUN --}}
<div id="dropdown1" class="dropdown-content" style="width: 250px;">
	<div class="drop-akun">
		<div class="drop-akun-icon">
			<i class="material-icons rb-text-1 center" style="font-size: 50px;">account_circle</i>
		</div>
		<div class="center drop-name">
			<b><p>{{ Auth::guard('siswa')->user()->nama }}</p></b>
		</div>
{{-- 		<div class="center drop-dat">
			<a href="{{route('SiswaSetting')}}"><p>Edit Profile</p></a>
		</div> --}}
	</div>
	<div class="divider" tabindex="-1"></div>
	<div class="center">
		<a href="/logout" class="border-but rb-text-1 waves-effect waves-teal btn-flat">Logout</a>
	</div>
</div>
{{-- END /////////////////////////////////////////////////////////////////////////////////////// DROPDOWN AKUN --}}

{{-- START /////////////////////////////////////////////////////////////////////////////////////// NAVBAR --}}
<div class="navbar-fixed">
	<nav class="asu nav-extended">
		<div class="container con-nav">

			<div class="nav-wrapper">
				{{-- START //////////////////////////////////////////////////////////////////////////// HEAD NAVBAR MOBILE --}}
				<ul class="left">
					<li>
						<a href="#" data-target="slide-out" class="sidenav-trigger show-on-medium-and-up rb-text-1">
							<i class="material-icons">menu</i>
						</a>
					</li>
					<li>
						<a href="/siswa" class="brand-logo rb-text-1" style="position: relative;">Kendali Belajar</a>
					</li>
				</ul>
				{{-- END //////////////////////////////////////////////////////////////////////////// HEAD NAVBAR MOBILE --}}

				{{-- START //////////////////////////////////////////////////////////////////////////// MENU NAVBAR --}}
				@if(request()->routeIs('DetailKelasSiswa','SiswaUjian','SiswaDiskusi','SiswaDiskusiDetail','SiswaTugas','SiswaTugasDetail'))
				<div class="second-navbar-rb">
					<ul class="center">
						<li class="menu-kelas 
						{{ (request()->routeIs(

							'DetailKelasSiswa'

							)) ? 'active' : '' }}
							">
							<a href="{{ route('DetailKelasSiswa',$dt->id) }}" class="rb-text-1">Materi</a>
						</li>
						{{-- <li class="menu-kelas 
						{{ (request()->routeIs(

							'SiswaUjian'

							)) ? 'active' : '' }}
							">
							<a href="{{route('SiswaUjian',$dt->id)}}" class="rb-text-1">Ujian</a>
						</li> --}}
						{{-- <li class="menu-kelas 
						{{ (request()->routeIs(

							'SiswaDiskusi',
							'SiswaDiskusiDetail'

							)) ? 'active' : '' }}
							">
							<a href="{{route('SiswaDiskusi',$dt->id)}}" class="rb-text-1">Diskusi</a>
						</li> --}}
						<li class="menu-kelas 
						{{ (request()->routeIs(

							'SiswaTugas',
							'SiswaTugasDetail'

							)) ? 'active' : '' }}
							">
							<a href="{{route('SiswaTugas',$dt->id)}}" class="rb-text-1">Tugas</a>
						</li>
					</ul>
				</div>
				@endif
				{{-- END //////////////////////////////////////////////////////////////////////////// MENU NAVBAR --}}

				{{-- START //////////////////////////////////////////////////////////////////////////// MENU RIGHT NAVBAR --}}
				<ul class="right hide-on-med-and-down">
					@if(request()->routeIs('SiswaDashboard'))
					<li>
						<a class="waves-effect waves-light btn modal-trigger" href="#modal-add-kelas">
							<i class="material-icons right">add</i>Tambah Kelas
						</a>
					</li>
					@endif
					<li>
						<a href="#!" class="grey-text text-darken-1 dropdown-trigger" data-target='dropdown1'>
							<i class="material-icons right grey-text text-darken-1">account_circle</i>{{ Auth::guard('siswa')->user()->nama }}
						</a>
					</li>
				</ul>
				{{-- END //////////////////////////////////////////////////////////////////////////// MENU RIGHT NAVBAR --}}
			</div>

			@if(request()->routeIs('DetailKelasSiswa'))
			<div class="nav-content nav-mobile-kelas">
				<div style="padding:0 50px;">
					<ul class="center">
						<li class="active">
							<a href="#!" class="rb-text-1">Materi</a>
						</li>
						{{-- <li class="">
							<a href="#!" class="rb-text-1">Ujian</a>
						</li>
						<li class="">
							<a href="#!" class="rb-text-1">Diskusi</a>
						</li> --}}
						<li class="">
							<a href="#!" class="rb-text-1">Tugas</a>
						</li>
					</ul>
				</div>
			</div>
			@endif

		</div>
	</nav>
</div>
{{-- END /////////////////////////////////////////////////////////////////////////////////////// NAVBAR --}}

{{-- START /////////////////////////////////////////////////////////////////////////////////////// LEFTBAR --}}
<ul id="slide-out" class="sidenav">
	<div class="con-leftbar">
		<li class=" 
		{{ (request()->routeIs(

			'SiswaDashboard'

			)) ? 'active' : '' }}
			">
			<a href="{{route('SiswaDashboard')}}"><i class="material-icons">dashboard</i>Dashboard</a>
		</li>
		{{-- <li><a href="#!"><i class="material-icons">date_range</i>Kalender Akademik</a></li> --}}
		<br>
		<li class="pad-L-10"><div class="divider"></div></li>
		<li><a class="subheader">Kelas Anda</a></li>
		{{-- <li class="
		{{ (request()->routeIs(

			'SiswaTugasUjianSemua'

			)) ? 'active' : '' }}
			">
			<a href="{{route('SiswaTugasUjianSemua')}}"><i class="material-icons">event_note</i>Semua Tugas & Ujian</a>
		</li> --}}
		{{-- <li class="
		{{ (request()->routeIs(

			'SiswaRekapNilai'

			)) ? 'active' : '' }}
			">
			<a href="{{route('SiswaRekapNilai')}}"><i class="material-icons">insert_chart_outlined</i>Rekap Nilai</a>
		</li> --}}
		<br>
		@foreach($kelas as $ks)
		<li class="
		{{ (request()->routeIs(
	
			'SiswaUjian',
			'SiswaDiskusi',
			'SiswaDiskusiDetail',
			'SiswaTugas',
			'SiswaTugasDetail',
			'DetailKelasSiswa'

			)) ? 'active' : '' }}
			">
			<a href="siswa/kelas/{{ $ks->id }}"><i class="material-icons">menu_book</i>{{ $ks->pelajaran }}</a>
		</li>
		@endforeach
{{-- 		<li><a href="#!"><i class="material-icons">menu_book</i>Fisika</a></li>
		<li><a href="#!"><i class="material-icons">menu_book</i>Matematika</a></li> --}}
		<br>
		<li class="pad-L-10"><div class="divider"></div></li>
		<br>
		{{-- <li class="
		{{ (request()->routeIs(

			'SiswaSetting'

			)) ? 'active' : '' }}
			">
			<a href="{{route('SiswaSetting')}}"><i class="material-icons">settings</i>Setting</a>
		</li> --}}
		<li><a href="/logout"><i class="material-icons">power_settings_new</i>Logout</a></li>
		<br>
	</div>
</ul>
{{-- END /////////////////////////////////////////////////////////////////////////////////////// LEFTBAR --}}