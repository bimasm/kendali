
{{-- START /////////////////////////////////////////////////////////////////////////////////////// DROPDOWN AKUN --}}
<div id="dropdown1" class="dropdown-content dropdown-menu-nav">
	<div class="drop-akun">
		<i class="material-icons">account_circle</i>
		<div class="drop-name">
			{{ Auth::guard('siswa')->user()->nama }}
		</div>
	</div>
	<div class="divider" tabindex="-1"></div>
	<a href="/logout" class="waves-effect btn-flat btn-border-prim">Logout</a>
</div>
{{-- END /////////////////////////////////////////////////////////////////////////////////////// DROPDOWN AKUN --}}












{{-- START /////////////////////////////////////////////////////////////////////////////////////// NAVBAR --}}
<div class="navbar-fixed">
	<nav class="nav-rb nav-extended">
		<div class="container">

			<div class="nav-wrapper">
				{{-- START //////////////////////////////////////////////////////////////////////////// HEAD NAVBAR --}}
				<ul class="left">
					<li>
						<a href="#" data-target="slide-out" class="sidenav-trigger show-on-medium-and-up prim-1-text">
							<i class="material-icons">menu</i>
						</a>
					</li>
					<li>
						<a href="/siswa" class="brand-logo prim-1-text">Kendali Belajar</a>
					</li>
				</ul>
				{{-- END //////////////////////////////////////////////////////////////////////////// HEAD NAVBAR --}}




				{{-- START //////////////////////////////////////////////////////////////////////////// MENU SECOND NAVBAR DEKSTOP --}}
				@if(request()->routeIs('DetailKelasSiswa','SiswaUjian','SiswaDiskusi','SiswaDiskusiDetail','SiswaTugas','SiswaTugasDetail'))
				<div class="second-navbar-rb hide-on-med-and-down">
					<ul class="center">
						<li class="
						{{ (request()->routeIs(

							'DetailKelasSiswa'

							)) ? 'active' : '' }}
							">
							<a href="{{ route('DetailKelasSiswa',$dt->id) }}">Materi</a>
						</li>
						<li class="
						{{ (request()->routeIs(

							'SiswaUjian'

							)) ? 'active' : '' }}
							">
							<a href="{{route('SiswaUjian',$dt->id)}}">Ujian</a>
						</li>
						<li class="
						{{ (request()->routeIs(

							'SiswaDiskusi',
							'SiswaDiskusiDetail'

							)) ? 'active' : '' }}
							">
							<a href="{{route('SiswaDiskusi',$dt->id)}}">Diskusi</a>
						</li>
						<li class="
						{{ (request()->routeIs(

							'SiswaTugas',
							'SiswaTugasDetail'

							)) ? 'active' : '' }}
							">
							<a href="{{route('SiswaTugas',$dt->id)}}">Tugas</a>
						</li>
					</ul>
				</div>
				@endif
				{{-- END //////////////////////////////////////////////////////////////////////////// MENU SECOND NAVBAR DEKSTOP --}}





				{{-- START //////////////////////////////////////////////////////////////////////////// MENU RIGHT NAVBAR --}}
				<ul class="right hide-on-med-and-down">
					@if(request()->routeIs('SiswaDashboard'))
					<li>
						<a class="waves-effect waves-light btn modal-trigger btn-solid-prim" href="#modal-add-kelas">
							<i class="material-icons left">add</i>Tambah Kelas
						</a>
					</li>
					@endif
					<li>
						<a href="#!" class="dark-text dropdown-trigger" data-target='dropdown1'>
							<i class="material-icons right">account_circle</i>{{ Auth::guard('siswa')->user()->nama }}
						</a>
					</li>
				</ul>
				{{-- END //////////////////////////////////////////////////////////////////////////// MENU RIGHT NAVBAR --}}
			</div>


			{{-- START //////////////////////////////////////////////////////////////////////////// MENU SECOND NAVBAR MOBILE --}}
			@if(request()->routeIs('DetailKelasSiswa','SiswaUjian','SiswaDiskusi','SiswaDiskusiDetail','SiswaTugas','SiswaTugasDetail'))
			<div class="second-navbar-rb-mob hide-on-large-only">
				<ul>
					<li class="
					{{ (request()->routeIs(

						'DetailKelasSiswa'

						)) ? 'active' : '' }}
						">
						<a href="{{ route('DetailKelasSiswa',$dt->id) }}">Materi</a>
					</li>
					<li class="
					{{ (request()->routeIs(

						'SiswaUjian'

						)) ? 'active' : '' }}
						">
						<a href="{{route('SiswaUjian', $dt->id)}}" >Ujian</a>
					</li>
					<li class="
					{{ (request()->routeIs(

						'SiswaDiskusi',
						'SiswaDiskusiDetail'

						)) ? 'active' : '' }}
						">
						<a href="{{route('SiswaDiskusi', $dt->id)}}" >Diskusi</a>
					</li>
					<li class="
					{{ (request()->routeIs(

						'SiswaTugas',
						'SiswaTugasDetail'

						)) ? 'active' : '' }}
						">
						<a href="{{route('SiswaTugas',$dt->id)}}">Tugas</a>
					</li>
				</ul>
			</div>
			@endif
			{{-- END //////////////////////////////////////////////////////////////////////////// MENU SECOND NAVBAR MOBILE --}}
		</div>
	</nav>
</div>
{{-- END /////////////////////////////////////////////////////////////////////////////////////// NAVBAR --}}















{{-- START /////////////////////////////////////////////////////////////////////////////////////// LEFTBAR --}}
<ul id="slide-out" class="sidenav">
	<div class="rb-leftbar">
		<li class=" 
		{{ (request()->routeIs(

			'SiswaDashboard'

			)) ? 'active' : '' }}
			">
			<a href="{{route('SiswaDashboard')}}">
				<i class="material-icons">dashboard</i>Dashboard
			</a>
		</li>
		{{-- <li><a href="#!"><i class="material-icons">date_range</i>Kalender Akademik</a></li> --}}
		<li class="pad-L-10"><div class="divider"></div></li>
		{{-- <li class="
		{{ (request()->routeIs(

			'SiswaTugasUjianSemua'

			)) ? 'active' : '' }}
			">
			<a href="{{route('SiswaTugasUjianSemua')}}"><i class="material-icons">event_note</i>Semua Tugas & Ujian</a>
		</li>
		<li class="
		{{ (request()->routeIs(

			'SiswaRekapNilai'

			)) ? 'active' : '' }}
			">
			<a href="{{route('SiswaRekapNilai')}}"><i class="material-icons">insert_chart_outlined</i>Rekap Nilai</a>
		</li> --}}
		<li><a class="subheader">Kelas Anda</a></li>
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
			<a href="siswa/kelas/{{ $ks->id }}">
				<i class="material-icons">menu_book</i>{{ $ks->pelajaran }}
			</a>
		</li>
		@endforeach
		<br>
		<li class="pad-L-10"><div class="divider"></div></li>
		<li class="
		{{ (request()->routeIs(

			'SiswaSetting'

			)) ? 'active' : '' }}
			">
			<a href="{{route('SiswaSetting')}}">
				<i class="material-icons">settings</i>Setting
			</a>
		</li>
		<li><a href="/logout"><i class="material-icons">power_settings_new</i>Logout</a></li>
		<br>
	</div>
</ul>
{{-- END /////////////////////////////////////////////////////////////////////////////////////// LEFTBAR --}}