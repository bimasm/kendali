@extends('aapp.app')

@section('title')
Dashboard - Guru
@endsection

@section('nav-guru')
@include('guru.app.nav-guru')
@endsection

@section('app-guru')
<section>
	<div class="container" style="width: 75%">
		<br>
		<div class="row">
			<div class="col s12 m12 l12">
				<div class="row">

					<div class="col s12 m12 l4">
						<div class="card cont-dash white">
							<div class="cont-head">
								<a href="{{route('GuruKelas')}}">
									<span class="card-title">
										<i class="cont-title-icon material-icons center">menu_book</i> Fisika
									</span>
								</a>
								<span style="float: right;">
									<a class="dropdown-trigger btn-floating btn-flat waves-effect cont-det-back" href='#' data-target='dropdown2'><i class="cont-det-icon material-icons">more_vert</i></a>
								</span>
							</div>

							<div class="card-content grey-text text-darken-2 con-card-cont-guru">
								<p>Dibuat pada Jan 26 2020</p>
							</div>
						</div>

						<ul id='dropdown2' class='dropdown-content'>
							<li><a class="menu-kelas-guru-dash" href="#!"><i class="material-icons">edit</i>Edit</a></li>
							<li><a class="menu-kelas-guru-dash" href="#!"><i class="material-icons">delete</i>Hapus</a></li>
						</ul>
					</div>

					<div class="col s12 m12 l4">
						<div class="card cont-dash white">
							<div class="cont-head">
								<span class="card-title">
									<i class="cont-title-icon material-icons center">menu_book</i> Fisika
								</span>
								<span style="float: right;">
									<a class="btn-floating btn-flat waves-effect cont-det-back"><i class="cont-det-icon material-icons">more_vert</i></a>
								</span>
							</div>

							<div class="card-content grey-text text-darken-2 con-card-cont-guru">
								<p>Dibuat pada Jan 26 2020</p>
							</div>
						</div>
					</div>

					<div class="col s12 m12 l4">
						<div class="card cont-dash white">
							<div class="cont-head">
								<span class="card-title">
									<i class="cont-title-icon material-icons center">menu_book</i> Fisika
								</span>
								<span style="float: right;">
									<a class="btn-floating btn-flat waves-effect cont-det-back"><i class="cont-det-icon material-icons">more_vert</i></a>
								</span>
							</div>

							<div class="card-content grey-text text-darken-2 con-card-cont-guru">
								<p>Dibuat pada Jan 26 2020</p>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>
</section>
@endsection