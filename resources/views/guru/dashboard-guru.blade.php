@extends('aapp.app')

@section('title')
Dashboard - Guru
@endsection

@section('nav-guru')
@include('guru.app.nav-guru')
@endsection

@section('app-guru')
{{-- START ================================================================================ HEADER --}}
@include('guru.app.header-guru')
{{-- END ================================================================================== HEADER --}}

{{-- START ================================================================================ CONTENT --}}
<section class="mt-1">
	<div class="container container-75" style="margin-bottom: 100px">
		<div class="row">

			@foreach($data as $dt)
			<div class="col s12 m12 l4">
				<div class="card card-icon-menu">
					<div class="card-header">
						<a class="title" href="{{route('DetailKelas',$dt->id) }}">
							<i class="material-icons">menu_book</i> 
							<span>{{$dt->pelajaran}}</span>
						</a>
						<span>
							<a class="dropdown-trigger waves-effect btn-icon-flat" data-target='menu-card1-{{$dt->id}}'>
								<i class="material-icons">more_vert</i>
							</a>
						</span>
					</div>

					<div class="card-content">
						Dibuat pada {{ date('j F Y', strtotime($dt->created_at)) }}, {{ date('H:i', strtotime($dt->created_at)) }}
					</div>
				</div>

				<ul id="menu-card1-{{$dt->id}}" class="dropdown-content dropdown-menu-card">
					<li>
						<a href="#!">
							<i class="material-icons">created</i>Edit
						</a>
					</li>
					<li>
						<a href="#!">
							<i class="material-icons">delete</i>Hapus
						</a>
					</li>
				</ul>
			</div>
			@endforeach

		</div>
	</div>
</section>
{{-- END ================================================================================ CONTENT --}}
@include('guru.app.modal-dashboard-guru')
@endsection