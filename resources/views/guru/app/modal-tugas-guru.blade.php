
{{-- START ================================================================================ EDIT TUGAS --}}
<div id="modal-edit-tugas{{ $tg->id }}" class="modal">
	<div class="modal-content">
		<h5>Edit Tugas</h5>
		<form action="" method="">
			@csrf
			<div class="content row">
				<div class="input-field col s12 pwh-bg">
					<input id="judul" type="text" class="validate" name="judul" value="{{ $tg->judul }}">
					<label for="judul">Judul Tugas</label>
				</div>

				<div class="input-field col s12 pwh-bg pwh-textarea">
					<textarea id="textarea1" class="materialize-textarea" name="tugas">{{ $tg->tugas }}</textarea>
					<label for="textarea1">Textarea</label>
				</div>
				<div class="input-field col s12 m12 l6 pwh-bg pwh-inicon">
					<i class="material-icons prefix">date_range</i>
					<input type="text" class="datepicker" value="{{ date('Y-m-j', strtotime($tg->deadline)) }}" name="tgl">
					<label for="textarea1">Tanggal Jatuh Tempo</label>
				</div>
				<div class="input-field col s12 m12 l6  pwh-bg pwh-inicon end">
					<i class="material-icons prefix">access_time</i>
					<input type="text" class="timepicker" value="{{ date('H:i', strtotime($tg->deadline)) }}" name="jam">
					<label for="textarea1">Waktu Jatuh Tempo</label>
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
{{-- END ================================================================================ EDIT TUGAS --}}

{{-- START ================================================================================ HAPUS TUGAS --}}
<div id="modal-hapus-tugas{{ $tg->id }}" class="modal modal-small modal-center">
	<div class="modal-content">
		<form action="" method="">
			@csrf
			<div class="content row">
				<div class="col s12 center">
					<h5>Apakah anda yakin ?</h5>
					<h6>Hapus {{ $tg->judul }}</h6>
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
{{-- END ================================================================================ HAPUS TUGAS --}}
