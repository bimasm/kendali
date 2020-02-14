@extends('aapp.app')

@section('title')
Siswa - Guru
@endsection

@section('nav-guru')
@foreach($data as $dt)
@include('guru.app.nav-guru')
@endforeach
@endsection

@section('app-guru')
<section>
	<div class="container" style="margin-top: 1em">
		<div class="row">
			<div class="col s12 m12 l6">
				@foreach($data as $dt)
				<h4>Kelas {{ $dt->pelajaran }} ( {{ $dt->kode }} )</h4>
				@endforeach
			</div>
			<div class="col s12 m12 l6">
				
			</div>
		</div>
		<div class="divider"></div>
	</div>
</section>
<br>
<section>
	<div class="container" style="width: 60%">
		<div class="row">
			<div class="col s12 m12 l12">
				<table>
					<thead>
						<tr>
							<th>Nama</th>
							<th>Jenjang</th>
							<th>Kelas</th>
							<th>Status</th>
							<th class="center">Action</th>
						</tr>
					</thead>

					<tbody>
						<tr>
							<td>Ivan Priyambudi</td>
							<td>SMP</td>
							<td>7C</td>
							<td>Aktif</td>
							<td class="center">
								<a class="waves-effect waves-light blue btn">Terima</a>
								<a class="waves-effect waves-light red btn">Tolak</a>
								<a class="waves-effect waves-light red btn">Keluarkan</a>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</section>

<div id="modal-tugas-edit" class="modal">
	<div class="modal-content">
		<div class="row">
			<form action="" method="">
				@csrf
				<div class="col s12 m12 l8 fot-card-left">
					<div class="input-field">
						<input id="last_name" type="text" class="validate in-jud" value="Judul Diskusi">
						<label for="last_name">Judul Diskusi</label>
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
					<div class="input-field col s12">
						<textarea id="textarea1" class="materialize-textarea">Buatlah program android sederhana yang terdiri dari 2 activity (bebas nama activity) yang activity 1 dapat berpindah ke activity 2. Kirim file Java dan XML serta video capture hasil aplikasi (bisa dari emulator/HP). Dan tambahkan file TXT dengan format NIM_NAMA</textarea>
						<label for="textarea1">Deskripsi Diskusi</label>
					</div>
					
				</div>
				<div class="input-field col s12 center">
					<a class="waves-effect waves-light btn rb-color-2"><i class="material-icons right">send</i>Simpan Perubahan</a>
				</div>
			</form>
		</div>
	</div>
</div>

<div id="modal-tugas-hapus" class="modal m-hapus">
	<div class="modal-content">
		<div class="row">
			<form action="" method="">
				@csrf
				<div class="col s12 center">
					<h5>Apakah anda yakin ?</h5>
					<p>Hapus Judul Diskusi</p>
				</div>
				<div class="input-field col s12 center">
					<a class="waves-effect waves-light btn red darken-2"><i class="material-icons right">delete</i>Hapus</a>
				</div>
			</form>
		</div>
	</div>
</div>
@endsection