{{-- START ================================================================================ MODAL ADD KELAS BARU --}}
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
					<button type="submit" class="waves-effect waves-light btn rb-color-2">
						<i class="material-icons right">send</i>Submit
					</button>
				</div>
			</form>
		</div>
	</div>
</div>
{{-- END ================================================================================ MODAL ADD KELAS BARU --}}