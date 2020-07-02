{{-- START ================================================================================ EDIT UJIAN --}}
<div id="modal-ujian-edit" class="modal">
	<div class="modal-content">
		<form action="" method="">
			@csrf
			<div class="content row">
				<div class="input-field col s12 pwh-bg">
					<input id="judul" type="text" class="validate" name="judul">
					<label for="judul">Judul Ujian</label>
				</div>

				<div class="input-field col s12 pwh-bg pwh-select">
					<select name="jenis">
						<option value="" disabled selected>Pilih Jenis Ujian</option>
						<option value="1">Ulangan Harian</option>
						<option value="2">UTS</option>
						<option value="3">UAS</option>
					</select>
					<label>Jenis Ujian</label>
				</div>

				<div class="input-field col s12 m12 l12 pwh-bg pwh-inicon">
					<i class="material-icons prefix">timer</i>
					<input id="durasi" type="text" class="datepicker" name="durasi">
					<label for="durasi">Durasi</label>
				</div>

				<div class="input-field col s12 m12 l6 pwh-bg pwh-inicon">
					<i class="material-icons prefix">date_range</i>
					<input type="text" class="datepicker" name="tgl">
					<label for="textarea1">Tanggal Jatuh Tempo</label>
				</div>
				<div class="input-field col s12 m12 l6  pwh-bg pwh-inicon end">
					<i class="material-icons prefix">access_time</i>
					<input type="text" class="timepicker" name="jam">
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
{{-- END ================================================================================ EDIT UJIAN --}}

{{-- START ================================================================================ HAPUS UJIAN --}}
<div id="modal-ujian-hapus" class="modal modal-small modal-center">
	<div class="modal-content">
		<form action="" method="">
			@csrf
			<div class="content row">
				<div class="col s12 center">
					<h5>Apakah anda yakin ?</h5>
					<p>Hapus Judul Ujian</p>
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
{{-- END ================================================================================ HAPUS UJIAN --}}