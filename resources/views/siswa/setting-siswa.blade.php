@extends('aapp.app')

@section('title')
Setting - Siswa
@endsection

@section('nav-siswa')
@include('siswa.app.nav-siswa')
@endsection

@section('app-siswa')

{{-- START ================================================================================ HEADER --}}
@include('siswa.app.header-siswa')
{{-- END ================================================================================ HEADER --}}

{{-- START ================================================================================ CONTENT --}}
<section class="mt-1">
	<div class="container container-60" style="margin-bottom: 100px">

		<div class="trigger-card-hover-border">
			<div class="card card-hover-border">

				<div class="card-header">
					<h6>Profile Anda</h6>
					<span>
						<a id="clicker" class="waves-effect btn-icon-flat">
							<i class="material-icons" style="display: block">edit</i>
						</a>
					</span>
				</div>

				<div class="card-content grey-text text-darken-2 con-card-cont row">
					<form action="" method="POST" class="col s12">
						@csrf
						<div class="row">
							<div class="input-field col s6 pwh-bg">
								<input disabled id="Nama_Lengkap" type="text" class="validate">
								<label for="Nama_Lengkap">Nama Lengkap</label>
							</div>
							<div class="input-field col s6 pwh-bg end">
								<input disabled id="Email" type="email" class="validate">
								<label for="Email">Email</label>
							</div>
						</div>
						<div class="row">
							<div class="input-field col s12 pwh-bg">
								<input disabled id="Password" type="password" class="validate">
								<label for="Password">Password</label>
							</div>
						</div>
						<div class="row">
							<div class="input-field col s12 pwh-bg">
								<input disabled id="sekolah" type="text" class="validate">
								<label for="sekolah">Sekolah</label>
							</div>
						</div>

						<div id="save" class="input-field right-align" style="display: none">
							<a id="cancel" href="#!" class="waves-effect btn-flat btn-border-prim">
								Cancel
							</a>
							<button type="submit" class="waves-effect waves-light btn btn-solid-prim">Simpan</button>
						</div>	
					</form>
				</div>

			</div>
		</div>

	</div>
</section>
{{-- END ================================================================================ CONTENT --}}

@endsection

@section('js-plus')
<script type="text/javascript">
	$().ready(function() {

		var x = document.getElementById("save");
		var y = document.getElementById("clicker");

		$('#clicker').click(function() {
			$('input').each(function() {
				if ($(this).attr('disabled')) {
					$(this).removeAttr('disabled');
				}
				else {
					$(this).attr({
						'disabled': 'disabled'
					});
				}
			});

			if (x.style.display === "none") {
				x.style.display = "block";
				y.style.display = "none";
			}

		});

		$('#cancel').click(function() {
			$('input').each(function() {
				if ($(this).attr('disabled')) {
					$(this).removeAttr('disabled');
				}
				else {
					$(this).attr({
						'disabled': 'disabled'
					});
				}
			});

			if (x.style.display === "block") {
				x.style.display = "none";
				y.style.display = "block";
			}
		});
	});
</script>
@endsection