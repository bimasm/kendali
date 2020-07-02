{{-- START ================================================================================ EDIT DISKUSI --}}
<div id="modal-diskusi-edit" class="modal">
	<div class="modal-content">
		<h5>Edit Diskusi</h5>
		<form action="" method="">
			@csrf
			<div class="content row">
				<div class="input-field col s12 pwh-bg">
					<input id="judul" type="text" class="validate" name="judul" value="">
					<label for="judul">Judul Dikusi</label>
				</div>

				<div class="input-field col s12 pwh-bg pwh-textarea">
					<textarea id="deskripsi" class="materialize-textarea" name="deskripsi">
					</textarea>
					<label for="deskripsi">Textarea</label>
				</div>
			</div>
			<div class="modal-footer">
				<a class="modal-close btn waves-effect btn-flattext-prim">Batal</a>

				<button type="submit" class="waves-effect waves-light btn btn-solid-prim">
					<i class="material-icons right">send</i>Submit
				</button>
			</div>
		</form>
	</div>
</div>
{{-- END ================================================================================ EDIT DISKUSI --}}

{{-- START ================================================================================ HAPUS DISKUSI --}}
<div id="modal-diskusi-hapus" class="modal modal-small modal-center">
	<div class="modal-content">
		<form action="" method="">
			@csrf
			<div class="content row">
				<div class="col s12 center">
					<h5>Apakah anda yakin ?</h5>
					<p>Hapus Judul Diskusi</p>
				</div>
			</div>
			<div class="modal-footer">
				<a class="modal-close btn waves-effect btn-flattext-prim">Batal</a>

				<button type="submit" class="waves-effect waves-light btn btn-solid-prim">
					Hapus
				</button>
			</div>
		</form>
	</div>
</div>
{{-- END ================================================================================ HAPUS DISKUSI --}}