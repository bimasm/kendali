{{-- START ================================================================================ EDIT UJIAN --}}
<div id="modal-tugas-edit" class="modal">
	<div class="modal-content">
		<div class="row">
			<form action="" method="">
				@csrf
				<div class="col s12 m12 l8 fot-card-left">
					<div class="input-field">
						<input id="last_name" type="text" class="validate in-jud" value="Judul Ujian">
						<label for="last_name">Judul Ujian</label>
					</div>
				</div>
				<div class="col s12 m12 l4 fot-card-right">
					<h5>kelas</h5>
				</div>
				<div class="col s12 m12 l12">
					<hr>
					<br>
				</div>

				<div class="row con-form-60">
					<div class="input-field col s12">
						<select>
							<option value="" disabled selected>Pilih Jenis Ujian</option>
							<option value="1">Ulangan Harian</option>
							<option value="2">UTS</option>
							<option value="3">UAS</option>
						</select>
						<label>Jenis Ujian</label>
					</div>
					<div class="input-field col s12">
						<i class="material-icons prefix">timer</i>
						<input type="text" class="datepicker">
						<label for="textarea1">Durasi</label>
					</div>
					<div class="input-field col s12 m12 l6">
						<i class="material-icons prefix">date_range</i>
						<input type="text" class="datepicker">
						<label for="textarea1">Tanggal Jatuh Tempo</label>
					</div>
					<div class="input-field col s12 m12 l6">
						<i class="material-icons prefix">access_time</i>
						<input type="text" class="timepicker">
						<label for="textarea1">Waktu Jatuh Tempo</label>
					</div>
					<div class="file-field input-field col s12">
						<div class="btn-up btn no-shads">
							<i class="material-icons">add_circle</i>
							<input type="file" multiple>
						</div>
						<div class="file-path-wrapper">
							<input class="file-path validate" type="text" placeholder="Unggah File Tugas di sini">
						</div>
					</div>
				</div>

				<div class="input-field col s12 center">
					<button type="submit" class="waves-effect waves-light btn rb-color-2"><i class="material-icons right">send</i>Simpan Perubahan</button>
				</div>
			</form>
		</div>
	</div>
</div>
{{-- END ================================================================================ EDIT UJIAN --}}

{{-- START ================================================================================ HAPUS UJIAN --}}
<div id="modal-tugas-hapus" class="modal m-hapus">
	<div class="modal-content">
		<div class="row">
			<form action="" method="">
				@csrf
				<div class="col s12 center">
					<h5>Apakah anda yakin ?</h5>
					<p>Hapus Judul Ujian</p>
				</div>
				<div class="input-field col s12 m12 l12 center">
					<a class="waves-effect waves-light btn red darken-2"><i class="material-icons right">delete</i>Hapus</a>
				</div>
			</form>
		</div>
	</div>
</div>
{{-- END ================================================================================ HAPUS UJIAN --}}