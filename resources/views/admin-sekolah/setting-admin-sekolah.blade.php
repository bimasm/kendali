@extends('aapp.app')

@section('title')
Setting - Admin Sekolah
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
				<h5>Setting</h5>
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
<section  class="animated fadeIn faster">
	<div class="container container-60" style="margin-bottom: 100px">
		<div class="row">
			<div class="col s12 m12 l12">
				
				<div class="ya">
					<div class="card cont-set white">

						<div class="cont-head">
							<span class="card-title">
								<h6>Profile Anda</h6>
							</span>
							<span class="icon-edit">
								<a id="clicker" class="btn-floating btn-flat waves-effect cont-det-back">
									<i class="cont-det-icon material-icons" style="display: block">edit</i>
								</a>
							</span>
						</div>

						<div class="card-content grey-text text-darken-2 con-card-cont">

							<form action="" method="">
								@csrf
								<div class="row">
									<div class="input-field col s12 m12 l12" style="margin-top: 2em">
										<input disabled value="{{ Auth::guard('adminsekolah')->user()->nama }}" id="Nama_Lengkap" type="text" class="set validate" name="nama_lengkap">
										<label for="Nama_Lengkap">Nama Lengkap</label>
									</div>
									<div class="input-field col s12 m12 l12" style="margin-top: 2em">
										<input disabled value="{{ Auth::guard('adminsekolah')->user()->password }}" id="Password" type="password" class="set validate" name="password">
										<label for="Password">Password</label>
									</div>
									<div id="save" class="input-field right-align" style="display: none">
										<a id="cancel" href="#!" class="waves-effect waves-light btn-flat">Cancel</a>
										<button type="submit" class="waves-effect waves-light btn rb-color-2">Simpan</button>
									</div>
								</div>	
							</form>

						</div>

					</div>
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