
{{-- START /////////////////////////////////////////////////////////////////////////////////////// DROPDOWN AKUN --}}
<div id="dropdown1" class="dropdown-content dropdown-menu-nav">
	<div class="drop-akun">
		<i class="material-icons">account_circle</i>
		<div class="drop-name">
			{{ Auth::guard('guru')->user()->nama }}
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
					<li style="width: 220px">
						<a href="/siswa" class="brand-logo prim-1-text">Guru</a>
					</li>
				</ul>
				{{-- END //////////////////////////////////////////////////////////////////////////// HEAD NAVBAR --}}




				{{-- START //////////////////////////////////////////////////////////////////////////// MENU SECOND NAVBAR DEKSTOP --}}
				@if(request()->routeIs('DetailKelas','TugasKelas','UjianKelas','DiskusiKelas','SiswaKelas','GuruTugasDetail','GuruDiskusiDetail'))

				@foreach($data as $dt)
				<div class="second-navbar-rb hide-on-med-and-down">
					<ul class="center">
						<li class="
						{{ (request()->routeIs(

							'DetailKelas'

							)) ? 'active' : '' }}
							">
							<a href="{{route('DetailKelas',$dt->id)}}">Materi</a>
						</li>
						<li class="
						{{ (request()->routeIs(

							'TugasKelas',
							'GuruTugasDetail'

							)) ? 'active' : '' }}
							">
							<a href="{{route('TugasKelas',$dt->id)}}">Tugas</a>
						</li>
						<li class="
						{{ (request()->routeIs(

							'UjianKelas'

							)) ? 'active' : '' }}
							">
							<a href="{{route('UjianKelas',$dt->id)}}">Ujian</a>
						</li>
						<li class="
						{{ (request()->routeIs(

							'DiskusiKelas',
							'GuruDiskusiDetail'

							)) ? 'active' : '' }}
							">
							<a href="{{route('DiskusiKelas',$dt->id)}}">Diskusi</a>
						</li>
						<li class="
						{{ (request()->routeIs(

							'SiswaKelas'

							)) ? 'active' : '' }}
							">
							<a href="{{route('SiswaKelas',$dt->id)}}">Siswa</a>
						</li>
					</ul>
				</div>
				@endforeach
				@endif
				{{-- END //////////////////////////////////////////////////////////////////////////// MENU SECOND NAVBAR DEKSTOP --}}






				{{-- START //////////////////////////////////////////////////////////////////////////// MENU RIGHT NAVBAR --}}
				<ul class="right hide-on-med-and-down">
					<li>
						<a href="#!" class="dark-text dropdown-trigger" data-target='dropdown1'>
							<i class="material-icons right">account_circle</i>{{ Auth::guard('guru')->user()->nama }}
						</a>
					</li>
				</ul>
				{{-- END //////////////////////////////////////////////////////////////////////////// MENU RIGHT NAVBAR --}}


				{{-- START //////////////////////////////////////////////////////////////////////////// MENU SECOND NAVBAR MOBILE --}}
				@if(request()->routeIs('DetailKelas','TugasKelas','UjianKelas','DiskusiKelas','SiswaKelas','GuruTugasDetail','GuruDiskusiDetail'))
				<div class="second-navbar-rb-mob hide-on-large-only">
					<ul>
						<li class="
						{{ (request()->routeIs(

							'DetailKelas'

							)) ? 'active' : '' }}
							">
							<a href="{{route('DetailKelas',$dt->id)}}">Materi</a>
						</li>
						<li class="
						{{ (request()->routeIs(

							'TugasKelas',
							'GuruTugasDetail'

							)) ? 'active' : '' }}
							">
							<a href="{{route('TugasKelas',$dt->id)}}">Tugas</a>
						</li>
						<li class="
						{{ (request()->routeIs(

							'UjianKelas'

							)) ? 'active' : '' }}
							">
							<a href="{{route('UjianKelas',$dt->id)}}">Ujian</a>
						</li>
						<li class="
						{{ (request()->routeIs(

							'DiskusiKelas',
							'GuruDiskusiDetail'

							)) ? 'active' : '' }}
							">
							<a href="{{route('DiskusiKelas',$dt->id)}}">Diskusi</a>
						</li>
						{{-- <li class="
						{{ (request()->routeIs(

							'SiswaKelas'

							)) ? 'active' : '' }}
							">
							<a href="{{route('SiswaKelas',$dt->id)}}">Siswa</a>
						</li> --}}
					</ul>
				</div>
				@endif
				{{-- END //////////////////////////////////////////////////////////////////////////// MENU SECOND NAVBAR MOBILE --}}


			</div>

		</div>
	</nav>
</div>
{{-- END /////////////////////////////////////////////////////////////////////////////////////// NAVBAR --}}














{{-- START /////////////////////////////////////////////////////////////////////////////////////// LEFTBAR --}}
<ul id="slide-out" class="sidenav">
	<div class="rb-leftbar">
		<li class=" 
		{{ (request()->routeIs(

			'DetailKelas',
			'TugasKelas',
			'UjianKelas',
			'DiskusiKelas',
			'SiswaKelas',
			'GuruTugasDetail',
			'GuruDiskusiDetail',
			'GuruDashboard'

			)) ? 'active' : '' }}
			">
			<a href="{{route('GuruDashboard')}}">
				<i class="material-icons">menu_book</i>Dashboard
			</a>
		</li>
		{{-- <li><a href="#!"><i class="material-icons">date_range</i>Kalender Akademik</a></li> --}}
		{{-- <br>
		<li class="pad-L-10"><div class="divider"></div></li>
		<li><a class="subheader">Monitoring</a></li>
		<li class="
		{{ (request()->routeIs(

			'GuruSemuaTugas'

			)) ? 'active' : '' }}">
			<a href="{{route('GuruSemuaTugas')}}">
				<i class="material-icons">event_note</i>Tugas
			</a>
		</li>
		<li class="
		{{ (request()->routeIs(

			'GuruSemuaUjian'

			)) ? 'active' : '' }}
			">
			<a href="{{route('GuruSemuaUjian')}}">
				<i class="material-icons">event_note</i>Ujian
			</a>
		</li>
		<li class="
		{{ (request()->routeIs(

			'GuruRekapNilai',
			'GuruRekapNilaiDetail'

			)) ? 'active' : '' }}
			">
			<a href="{{route('GuruRekapNilai')}}">
				<i class="material-icons">insert_chart_outlined</i>Rekap Nilai
			</a>
		</li> --}}
		<br>
		<li class="pad-L-10"><div class="divider">
		</div></li>
		<br>
		<li class="
		{{ (request()->routeIs(

			'GuruSetting'

			)) ? 'active' : '' }}
			">
			<a href="{{route('GuruSetting')}}">
				<i class="material-icons">settings</i>Setting
			</a>
		</li>
		<li><a href="/logout"><i class="material-icons">power_settings_new</i>Logout</a></li>
		<br>
	</div>
</ul>
{{-- END /////////////////////////////////////////////////////////////////////////////////////// LEFTBAR --}}




@if(request()->routeIs('DetailKelas','TugasKelas','UjianKelas','DiskusiKelas','SiswaKelas','GuruTugasDetail','GuruDiskusiDetail'))
@foreach($data as $dt)
<div class="fixed-action-btn second-navbar-rb-mb-2">
	<a href="{{route('SiswaKelas',$dt->id)}}" class="btn-floating btn-large red">
		<i class="large material-icons">supervised_user_circle</i>
	</a>
</div>
@endforeach
@endif
