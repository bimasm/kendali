@extends('aapp.app')

@section('title')
Diskusi - Siswa
@endsection

@section('nav-siswa')
@include('siswa.app.nav-siswa')
@endsection

@section('app-siswa')

{{-- START ================================================================================ HEADER --}}
@include('siswa.app.header-siswa')
{{-- END ================================================================================== HEADER --}}

{{-- START ================================================================================ CONTENT --}}
<section>
	<div class="container container-75" style="margin-bottom: 100px">
		<div class="row">

			{{-- START ================================================================================ CHAT --}}
			<div class="col s12 m12 l9">
				<ul class="collection" style="border: 0">
					<li class="collection-item avatar">
						<i class="material-icons circle">person</i>
						<span class="title">Nama Akun</span>
						<p><b>12 June, 15:00</b></p>
						<br>
						<p>
							tes tes tes tes tes tes tes tes tes tes tes tes tes tes tes tes tes tes tes tes tes tes tes tes tes tes tes tes tes tes tes tes tes tes tes tes tes tes tes tes tes tes tes tes tes tes tes tes tes tes tes tes tes tes tes tes tes tes tes tes tes tes tes tes tes tes tes tes tes tes tes tes tes tes tes tes tes tes tes tes tes tes
						</p>
						<br>
						<a href="#!" class="secondary-content"></a>
					</li>
				</ul>

				<div class="card cont-chat white">
					<div class="card-content grey-text text-darken-2">
						<form action="" method="POST">
							@csrf
							<div class="input-field">
								<textarea id="textarea1" class="chat materialize-textarea"></textarea>
								<label for="textarea1">Tulis Pesan di sini</label>
							</div>

							<div class="input-field right-align">
								<button type="submit" class="waves-effect waves-light btn rb-color-2">
									<i class="material-icons right">send</i>Kirim
								</button>
							</div>
						</form>
					</div>
				</div>
			</div>
			{{-- END ================================================================================ CHAT --}}

			{{-- START ================================================================================ BAR USER --}}
			<div class="col s12 m12 l3 bar-chat">
				<ul class="collection">
					<li class="collection-item avatar">
						<i class="material-icons circle">person</i>
						<span class="title">Nama Akun</span>
						<p>Guru</p>
						<a href="#!" class="secondary-content"></a>
					</li>
					<li class="collection-item avatar">
						<i class="material-icons circle">person</i>
						<span class="title">Nama Akun</span>
						<p>Siswa</p>
						<a href="#!" class="secondary-content"></a>
					</li>
				</ul>
			</div>
			{{-- END ================================================================================ BAR USER --}}

		</div>
	</div>
</section>
{{-- END ================================================================================ CONTENT --}}

@endsection