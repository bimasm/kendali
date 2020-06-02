
{{-- ==== -START- ============================================================== Modal Hapus --}}
<div id="modalhapus" class="modal">
	<div class="modal-content center-align">
		<h4>Hapus Guru</h4>
		<h6>Anda akan menghapus Guru: </h6>
		<br>
		<div class="container">
			<div class="row">

				<div class="col s12 m12 l12">
					<div class="divider"></div>

					<div class="center-align">
						<h6><span id="datas2"></span></h6>
					</div>
					
					<div class="divider"></div>
				</div>

				<div class="input-field col s12 m12 l12">
					<br>
					<button type="submit" class="waves-effect waves-light btn but-fullw red">Hapus</button>
				</div>
				<div class="input-field col s12">
					<a href="#!" class="modal-close waves-effect btn-flat">Batal</a>
				</div>

			</div>
		</div>
	</div>
</div>
{{-- ==== -END- =============================================================== Modal Hapus --}}

{{-- ==== -START- ============================================================== Modal Edit --}}
<div id="modaledit" class="modal">
	<div class="modal-content center-align">
		<h4>Edit Guru</h4>
		<div class="divider"></div>
		<br>
		<br>
		<div class="container">
			<div class="row">

				<form action="" method="" class="col s12">
					@csrf
					<div class="row">
						<div class="input-field col s12">
							<input id="nama" type="text" class="validate" value=" ">
							<label for="nama">Nama Lengkap</label>
						</div>
					</div>

					<div class="row">
						<div class="input-field col s12">
							<input id="nip" type="text" class="validate" value=" ">
							<label for="nip">NIP</label>
						</div>
					</div>

					<div class="row">
						<div class="input-field col s12">
							<select id="jk">
								<option value="" disabled selected>Pilih Jenis Kelamin</option>
								<option value="1">Laki-laki</option>
								<option value="2">Perempuan</option>
							</select>
							<label>Jenis Kelamin</label>
						</div>
					</div>

					<div class="row no-mar">
						<div class="input-field col s12">
							<button type="submit" class="waves-effect btn rb-color-2 but-fullw">Simpan</button>
						</div>
						<div class="input-field col s12 no-mar">
							<a href="#!" class="modal-close waves-effect btn-flat">Batal</a>
						</div>
					</div>
				</form>

			</div>
		</div>

	</div>
</div>
{{-- ==== -END- ================================================================ Modal Edit --}}