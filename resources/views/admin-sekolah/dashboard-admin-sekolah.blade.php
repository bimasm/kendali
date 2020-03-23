@extends('aapp.app')

@section('title')
Dashboard - Admin Sekolah
@endsection

@section('nav-admin-sekolah')
@include('admin-sekolah.app.nav-admin-sekolah')
@endsection

@section('app-admin-sekolah')
{{-- START ================================================================================ HEADER --}}
<section class="head-cont-tugas-siswa animated fadeIn faster">
	<div class="container container-75">
		<div class="row valign-wrapper-rb">
			<div class="col s12 m12 l6 head-title-tugas-siswa">
				<h5>Dashboard</h5>
			</div>
			<div class="col s12 m12 l6 head-at-tugas-siswa valign">
				<h6>SDN 1 Gendoh</h6>
			</div>
		</div>
		<br>
		<div class="divider"></div>
		<br>
	</div>
</section>
{{-- END ================================================================================ HEADER --}}

{{-- START ================================================================================ CONTENT --}}
<section class="animated fadeIn faster">
	<div class="container container-75" style="margin-bottom: 100px">
		<div class="row">

			{{-- START ================================================================================ SISWA --}}
			<div class="col s12 m12 l9">
				<div class="col s12 m12 l6">
					<div class="card cont-dash white">
						<div class="cont-head-2">
							<div class="collapsible-header materi-cont-siswa-he materi">
								<i class="material-icons materi-icon-siswa">people_alt</i>Siswa
							</div>
						</div>
						<div class="card-panel" style="box-shadow: none">
							<div class="row valign-wrapper no-mar">
								<div class="col s4">
									<h6><b>43</b> Siswa</h6>
								</div>
								<div class="col s8 right-align valign">
									<a href="">Detail Semua Siswa</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				{{-- END ================================================================================ SISWA --}}

				{{-- START ================================================================================ GURU --}}
				<div class="col s12 m12 l6">
					<div class="card cont-dash white">
						<div class="cont-head-2">
							<div class="collapsible-header materi-cont-siswa-he materi">
								<i class="material-icons materi-icon-siswa">people_alt</i>Guru
							</div>
						</div>
						<div class="card-panel" style="box-shadow: none">
							<div class="row valign-wrapper no-mar">
								<div class="col s4">
									<h6><b>43</b> Guru</h6>
								</div>
								<div class="col s8 right-align valign">
									<a href="">Detail Semua Guru</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				{{-- END ================================================================================ GURU --}}

				{{-- START ================================================================================ KELAS --}}
				<div class="col s12 m12 l12">
					<div class="card cont-dash white">
						<div class="cont-head-2">
							<div class="collapsible-header materi-cont-siswa-he materi">
								<i class="material-icons materi-icon-siswa">menu_book</i>Siswa
							</div>
						</div>
						<div class="card-panel card-dash-admin">
							<table class="highlight">
								<tbody>
									<tr>
										<td>Fisika</td>
										<td>Heri</td>
										<td>
											<div class="right-align">
												<a class="waves-effect btn-flat">Detail<i class="material-icons right">arrow_forward_ios</i></a>
											</div>
										</td>
									</tr>
									<tr>
										<td>Fisika</td>
										<td>Heri</td>
										<td>
											<div class="right-align">
												<a class="waves-effect btn-flat">Detail<i class="material-icons right">arrow_forward_ios</i></a>
											</div>
										</td>
									</tr>
									<tr>
										<td>Fisika</td>
										<td>Heri</td>
										<td>
											<div class="right-align">
												<a class="waves-effect btn-flat">Detail<i class="material-icons right">arrow_forward_ios</i></a>
											</div>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
						<a href="#!">
							<div class="cont-head-3">
								<div class="card-panel card-panel-2">
									Detail Semua Kelas
								</div>
							</div>
						</a>
					</div>
				</div>
				{{-- END ================================================================================ KELAS --}}
			</div>

			{{-- START ================================================================================ ENTITAS ONLINE --}}
			<div class="col s12 m12 l3">
				<div class="col s12 m12 l12">
					<div class="card cont-dash white">
						<div class="cont-head-2">
							<div class="collapsible-header materi-cont-siswa-he materi">
								<i class="material-icons materi-icon-siswa-nob light-green-text">fiber_manual_record</i>Entitas Online
							</div>
						</div>
						<div class="card-panel card-dash-admin">
							<table class="highlight">
								<tbody>
									<tr>
										<td>Heri</td>
										<td><div class="right-align">Online</div></td>
									</tr>
									<tr>
										<td>Heri</td>
										<td><div class="right-align">Online</div></td>
									</tr>
									<tr>
										<td>Heri</td>
										<td><div class="right-align">Online</div></td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
			{{-- END ================================================================================ ENTITAS ONLINE --}}

		</div>
	</div>
</section>
{{-- END ================================================================================ CONTENT --}}

@endsection