
{{-- START ================================================================================ EDIT MATERI --}}
@foreach($materi as $mt)
@foreach($mt->komponen as $k)
<div id="modal-edit-materi{{ $k->id }}" class="modal">
	<div class="modal-content white">
		<div class="row">
			<form action="" method="">
				@csrf
				<div class="col s12 m12 l12">
					<h5>kelas</h5>
				</div>
				<div class="col s12 m12 l12">
					<hr>
					<br>
				</div>
				<div class="col s12 m12 l12">
					<div class="input-field">
						<input id="last_name" type="text" class="validate" value="{{ $k->judul }}">
						<label for="last_name">Judul Materi</label>
					</div>
				</div>
				<div class="col s12 m12 l12">
					<br>
				</div>
				<div class="row" style="padding: 0 60px;">
					<div class="row">
						<div class="file-field input-field col s12">
							<div class="btn-up btn no-shads">
								<i class="material-icons">add_circle</i>
								<input type="file" multiple>
							</div>
							<div class="file-path-wrapper">
								<input class="file-path validate" type="text" placeholder="File Materi">
							</div>
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
@endforeach
@endforeach
{{-- END ================================================================================ EDIT MATERI --}}

{{-- START ================================================================================ ADD FILE MATERI --}}
@foreach($materi as $mt)
<div id="modal-add-file{{ $mt->id }}" class="modal">
	<div class="modal-content white">
		<div class="row">
			<form action="{{ route('addfilemateri') }}" method="post" enctype="multipart/form-data">
				@csrf
				<div class="col s12 m12 l12 fot-card-left">
					<div class="input-field">
						<input id="last_name" type="text" name="judul" class="validate">
						<label for="last_name">Judul Materi</label>
					</div>
				</div>

				<div class="row" style="padding: 0 60px;">
					<div class="row">
						<div class="file-field input-field col s12">
							<div class="btn-up btn no-shads">
								<i class="material-icons">add_circle</i>
								<input type="file" name="filemateri" multiple>
							</div>
							<div class="file-path-wrapper">
								@foreach($data as $dt)
								<input type="hidden" name="id_pelajaran" value="{{ $dt->id }}">
								@endforeach

								<input type="hidden" name="id_materi" value="{{ $mt->id }}">

								<input class="file-path validate" type="text" placeholder="File Materi pdf/jpg/png">
							</div>
						</div>
					</div>
				</div>
				<div class="input-field col s12 center">
					<button type="submit" class="waves-effect waves-light btn rb-color-2"><i class="material-icons right">send</i>Submit</button>
				</div>
			</form>
		</div>
	</div>
</div>
@endforeach
{{-- END ================================================================================ ADD FILE MATERI --}}

{{-- START ================================================================================ HAPUS MATERI --}}
@foreach($materi as $mt)
@foreach($mt->komponen as $k)
<div id="modal-hapus{{ $k->id }}" class="modal m-hapus">
	<div class="modal-content white">
		<div class="row">
			<form action="" method="">
				@csrf
				<div class="col s12 center">
					<h5>Apakah anda yakin ?</h5>
					<p>Hapus {{ $k->judul }}</p>
				</div>
				<div class="input-field col s12 center">
					<a class="waves-effect waves-light btn red darken-2"><i class="material-icons right">delete</i>Hapus</a>
				</div>
			</form>
		</div>
	</div>
</div>
@endforeach
@endforeach
{{-- END ================================================================================ HAPUS MATERI --}}

{{-- START ================================================================================ HAPUS LATSO MATERI --}}
<div id="modal-latso-hapus" class="modal m-hapus">
	<div class="modal-content">
		<div class="row">
			<form action="" method="">
				@csrf
				<div class="col s12 center">
					<h5>Apakah anda yakin ?</h5>
					<p>Hapus Judul Latihan Soal</p>
				</div>
				<div class="input-field col s12 center">
					<a class="waves-effect waves-light btn red darken-2"><i class="material-icons right">delete</i>Hapus</a>
				</div>
			</form>
		</div>
	</div>
</div>
{{-- END ================================================================================ HAPUS LATSO MATERI --}}

{{-- START ================================================================================ EDIT LATSO MATERI --}}
<div id="modal-latso-edit" class="modal">
	<div class="modal-content">
		<div class="row">
			<form action="" method="">
				@csrf
				<div class="col s12 m12 l8 fot-card-left">
					<div class="input-field">
						<input id="last_name" type="text" class="validate in-jud" value="Judul Latihan Soal">
						<label for="last_name">Judul Latihan Soal</label>
					</div>
				</div>
				<div class="col s12 m12 l4 fot-card-right">
					<h5>kelas</h5>
				</div>
				<div class="col s12 m12 l12">
					<hr>
					<br>
				</div>

				<div class="row" style="padding: 0 60px;">
					<div class="row">
						<div class="input-field col s12">
							<i class="material-icons prefix">timer</i>
							<input type="text" class="datepicker">
							<label for="textarea1">Durasi</label>
						</div>
						<div class="file-field input-field col s12">
							<div class="btn-up btn no-shads">
								<i class="material-icons">add_circle</i>
								<input type="file" multiple>
							</div>
							<div class="file-path-wrapper">
								<input class="file-path validate" type="text" placeholder="File Latihan Soal">
							</div>
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
{{-- END ================================================================================ HAPUS LATSO MATERI --}}