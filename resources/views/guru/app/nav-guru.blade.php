
<div id="dropdown1" class="dropdown-content" style="width: 250px;">

	<div class="drop-akun">

		<div class="drop-akun-icon">
			<i class="material-icons rb-text-1 center" style="font-size: 50px;">account_circle</i>
		</div>

		<div class="center drop-name">
			<b><p>{{ Auth::guard('guru')->user()->nama }}</p></b>
		</div>

		<div class="center drop-dat">
			<a href="#!"><p>Edit Profile</p></a>
		</div>

	</div>

	<div class="divider" tabindex="-1"></div>

	<div class="center">
		<a href="/logout" class="border-but rb-text-1 waves-effect waves-teal btn-flat">Logout</a>
	</div>

</div>

<div class="navbar-fixed">
	<nav class="asu nav-extended">
		<div class="container con-nav">

			<div class="nav-wrapper">
				<ul class="left">
					<li>
						<a href="#" data-target="slide-out" class="sidenav-trigger show-on-medium-and-up rb-text-1"><i class="material-icons">menu</i></a>
					</li>
					<li>
						<a href="#!" class="brand-logo rb-text-1" style="position: relative; padding-right: 100px;">Guru</a>
					</li>
				</ul>

				@if(request()->routeIs('DetailKelas','TugasKelas','UjianKelas','DiskusiKelas','SiswaKelas','GuruTugasDetail','GuruDiskusiDetail'))

				<div class="second-navbar-rb">
					<ul class="center">
						<li class="menu-kelas
						{{ (request()->routeIs(

							'DetailKelas'

							)) ? 'active' : '' }}
							">
							<a href="{{route('DetailKelas',$dt->id)}}" class="rb-text-1">Materi</a>
						</li>
						<li class="menu-kelas
						{{ (request()->routeIs(

							'TugasKelas'

							)) ? 'active' : '' }}
							">
							<a href="{{route('TugasKelas',$dt->id)}}" class="rb-text-1">Tugas</a>
						</li>
						<li class="menu-kelas
						{{ (request()->routeIs(

							'UjianKelas'

							)) ? 'active' : '' }}
							">
							<a href="{{route('UjianKelas',$dt->id)}}" class="rb-text-1">Ujian</a>
						</li>
						<li class="menu-kelas
						{{ (request()->routeIs(

							'DiskusiKelas',
							'GuruDiskusiDetail'

							)) ? 'active' : '' }}
							">
							<a href="{{route('DiskusiKelas',$dt->id)}}" class="rb-text-1">Diskusi</a>
						</li>
						<li class="menu-kelas second-navbar-rb-mb
						{{ (request()->routeIs(

							'SiswaKelas'

							)) ? 'active' : '' }}
							">
							<a href="{{route('SiswaKelas',$dt->id)}}" class="rb-text-1">Siswa</a>
						</li>
					</ul>
				</div>

				@endif

				<ul class="right hide-on-med-and-down">
					<li><a href="#!" class="grey-text text-darken-1 dropdown-trigger" data-target='dropdown1'>
						<i class="material-icons right grey-text text-darken-1">account_circle</i>{{ Auth::guard('guru')->user()->nama }}</a>
					</li>
				</ul>

			</div>

		</div>
	</nav>
</div>

<ul id="slide-out" class="sidenav">
	<div class="con-leftbar">
		<li class=" 
		{{ (request()->routeIs(

			'DetailKelas',
			'TugasKelas',
			'UjianKelas',
			'DiskusiKelas',
			'SiswaKelas',
			'GuruTugasDetail',
			'GuruDiskusiDetail'

			)) ? 'active' : '' }}
			">
			<a href="{{route('GuruDashboard')}}"><i class="material-icons">menu_book</i>Kelas</a>
		</li>
		<li><a href="#!"><i class="material-icons">date_range</i>Kalender Akademik</a></li>
		<br>
		<li class="pad-L-10"><div class="divider"></div></li>
		<li><a class="subheader">Monitoring</a></li>
		<li class="
		{{ (request()->routeIs(

			'GuruSemuaTugas'

			)) ? 'active' : '' }}">
			<a href="{{route('GuruSemuaTugas')}}"><i class="material-icons">event_note</i>Tugas</a>
		</li>
		<li class="
		{{ (request()->routeIs(

			'GuruSemuaUjian'

			)) ? 'active' : '' }}
			">
			<a href="{{route('GuruSemuaUjian')}}"><i class="material-icons">event_note</i>Ujian</a>
		</li>
		<li class="
		{{ (request()->routeIs(

			'GuruRekapNilai',
			'GuruRekapNilaiDetail'

			)) ? 'active' : '' }}
			">
			<a href="{{route('GuruRekapNilai')}}"><i class="material-icons">insert_chart_outlined</i>Rekap Nilai</a>
		</li>
		<br>
		<li class="pad-L-10"><div class="divider"></div></li>
		<br>
		<li class="
		{{ (request()->routeIs(

			'GuruSetting'

			)) ? 'active' : '' }}
			">
			<a href="{{route('GuruSetting')}}"><i class="material-icons">settings</i>Setting</a>
		</li>
		<li><a href="/logout"><i class="material-icons">power_settings_new</i>Logout</a></li>
		<br>
	</div>
</ul>

@if(request()->routeIs('DetailKelas','TugasKelas','UjianKelas','DiskusiKelas','SiswaKelas','GuruTugasDetail','GuruDiskusiDetail'))
<div class="fixed-action-btn second-navbar-rb-mb-2">
	<a href="{{route('SiswaKelas',$dt->id)}}" class="btn-floating btn-large red">
		<i class="large material-icons">supervised_user_circle</i>
	</a>
</div>
@endif