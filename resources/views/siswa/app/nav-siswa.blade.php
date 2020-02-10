
<div id="dropdown1" class="dropdown-content" style="width: 250px;">

	<div class="drop-akun">

		<div class="drop-akun-icon">
			<i class="material-icons rb-text-1 center" style="font-size: 50px;">account_circle</i>
		</div>

		<div class="center drop-name">
			<b><p>{{ Auth::guard('siswa')->user()->nama }}</p></b>
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
	<nav class="asu">
		<div class="container con-nav">

			<div class="nav-wrapper">
				<ul class="left">
					<li>
						<a href="#" data-target="slide-out" class="sidenav-trigger show-on-medium-and-up rb-text-1"><i class="material-icons">menu</i></a>
					</li>
					<li>
						<a href="#!" class="brand-logo rb-text-1">Kendali Belajar</a>
					</li>
				</ul>

				<ul class="right hide-on-med-and-down">
					<li><a href="#!" class="rb-text-1 dropdown-trigger" data-target='dropdown1'>
						<i class="material-icons right rb-text-1">account_circle</i>{{ Auth::guard('siswa')->user()->nama }}</a>
					</li>
				</ul>

			</div>

		</div>
	</nav>
</div>

<ul id="slide-out" class="sidenav">
	<div class="con-leftbar">
		<li class="active"><a href="#!"><i class="material-icons">dashboard</i>Dashboard</a></li>
		<li><a href="#!"><i class="material-icons">date_range</i>Kalender Akademik</a></li>
		<br>
		<li class="pad-L-10"><div class="divider"></div></li>
		<li><a class="subheader">Kelas Anda</a></li>
		<li><a href="#!"><i class="material-icons">assignment</i>Semua Tugas & Ujian</a></li>
		<li><a href="#!"><i class="material-icons">insert_chart_outlined</i>Rekap Nilai</a></li>
		<br>
		<li><a href="#!"><i class="material-icons">menu_book</i>Biologi</a></li>
		<li><a href="#!"><i class="material-icons">menu_book</i>Fisika</a></li>
		<li><a href="#!"><i class="material-icons">menu_book</i>Matematika</a></li>
		<br>
		<li class="pad-L-10"><div class="divider"></div></li>
		<li><a href="#!"><i class="material-icons">settings</i>Setting</a></li>
		<li><a href="/logout"><i class="material-icons">power_settings_new</i>Logout</a></li>
		<br>
	</div>
</ul>