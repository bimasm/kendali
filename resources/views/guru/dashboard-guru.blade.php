@extends('aapp.app')

@section('title')
Dashboard - Guru
@endsection

@section('nav-guru')
@include('guru.app.nav-guru')
@endsection

@section('app-guru')
<section>
	<div class="container" style="margin-top: 1em">
		<div class="row">
			<div class="col s12 m12 l6 fot-card-left">
				<h4>Kelas</h4>
			</div>
			<div class="col s12 m12 l6 fot-card-right">
				<div class="con-head-guru">
					<div id="tab2">
						<a href="#modal-add-kelas" class="modal-trigger waves-effect waves-light btn rb-color-2"><i class="material-icons right">add</i>Kelas Baru</a>
					</div>
				</div>
			</div>
		</div>
		<div class="divider"></div>
	</div>
</section>
<section>
	<div class="container" style="width: 75%">
		<br>
		<div class="row">
			<div class="col s12 m12 l12">
				<div class="row">


					@foreach($data as $dt)
					<div class="col s12 m12 l4">
						<div class="card cont-dash white">
							<div class="cont-head">
								<a href="{{route('GuruKelas')}}/detail/{{ $dt->id }}">
									<span class="card-title">
										<i class="cont-title-icon material-icons center">menu_book</i> {{$dt->pelajaran}}
									</span>
								</a>
								<span style="float: right;">
									<a class="dropdown-trigger btn-floating btn-flat waves-effect cont-det-back" href='#' data-target='dropdown2'><i class="cont-det-icon material-icons">more_vert</i></a>
								</span>
							</div>

							<div class="card-content grey-text text-darken-2 con-card-cont-guru">
								<p>Dibuat pada {{$dt->created_at}}</p>
							</div>
						</div>

						<ul id='dropdown2' class='dropdown-content'>
							<li><a class="menu-kelas-guru-dash" href="#!"><i class="material-icons">edit</i>Edit</a></li>
							<li><a class="menu-kelas-guru-dash" href="#!"><i class="material-icons">delete</i>Hapus</a></li>
						</ul>
					</div>
					@endforeach

				</div>
			</div>
		</div>
	</div>
</section>

<div id="modal-add-kelas" class="modal">
	<div class="modal-content">
		<div class="row">
			<form action="{{ route('addpelajaran') }}" method="post">
				@csrf
				<div class="col s12 m12 l12">
					<div class="input-field">
						<input id="last_name" type="text" name="pelajaran" class="validate">
						<label for="last_name">Nama Kelas</label>
					</div>
				</div>

				<div class="input-field col s12 center">
					<button type="submit" class="waves-effect waves-light btn rb-color-2"><i class="material-icons right">send</i>Submit</button>
				</div>
			</form>
		</div>
	</div>
</div>
@endsection