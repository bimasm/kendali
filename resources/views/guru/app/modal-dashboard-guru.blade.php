{{-- START ================================================================================ MODAL ADD KELAS BARU --}}
<div id="modal-add-kelas" class="modal modal-small modal-center">
	<div class="modal-content">
		<h5>Tambah Kelas</h5>
		<form action="{{ route('addpelajaran') }}" method="post">
			@csrf
			<div class="content row">
				<div class="input-field col s12 pwh-bg">
					<input id="pelajaran" type="text" class="validate" name="pelajaran">
					<label for="pelajaran">Nama Kelas</label>
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
{{-- END ================================================================================ MODAL ADD KELAS BARU --}}