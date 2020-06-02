@extends('aapp.app')

@section('title')
Tugas - Siswa
@endsection

@section('nav-siswa')
@include('siswa.app.nav-siswa')
@endsection

@section('app-siswa')

{{-- START ================================================================================ HEADER --}}
<section class="head-cont-tugas-siswa-plus">
	<div class="container">
		<div class="row valign-wrapper-rb">
			<div class="col s12 m12 l6 head-title-tugas-siswa">
				<h5>Judul Tugas</h5>
				<h6>Pelajaran Biologi</h6>
			</div>
			<div class="col s12 m12 l6 head-at-tugas-siswa valign">
				<h6>Anda Belum mengerjakan tugas ini</h6>
				<div class="divider"></div>
				<h6>Batas pengumpulan : 24 June 2020 | 23:59</h6>
			</div>
		</div>
		<br>
		<div class="divider"></div>
		<br>
	</div>
</section>
{{-- END ================================================================================ HEADER --}}

{{-- START ================================================================================ CONTENT --}}
<section>
	<div class="container container-75" style="margin-bottom: 100px">
		<div class="row">

			<div class="col s12 m12 l12">
				<blockquote>
					<h6><b>Heri, 23 June 2020 | 15:30</b></h6>
					<div class="tugas-text">
						<p>
							Buatlah program android sederhana yang terdiri dari 2 activity (bebas nama activity) yang activity 1 dapat berpindah ke activity 2. Kirim file Java dan XML serta video capture hasil aplikasi (bisa dari emulator/HP). Dan tambahkan file TXT dengan format NIM_NAMA
						</p>
					</div>
				</blockquote>
			</div>
			<div class="col s12 m12 l12">
				<div class="card cont-dash white" style="margin-top: 3rem">
					<div class="cont-head">
						<span class="card-title">
							<h6>Tulis Jawaban di sini</h6>
						</span>
					</div>
					<div class="card-content grey-text text-darken-2 con-card-cont" style="padding: 0 !important">
						<form action="" method="POST">
							@csrf
							<div class="input-field" style="margin-top: 0">
								<textarea id="full-featured-non-premium" name="konten"></textarea>
							</div>

							<div class="input-field center">
								<a class="waves-effect btn-flat grey-text text-darken-1"><i class="material-icons right">send</i>Submit</a>
							</div>
						</form>
					</div>
				</div>
			</div>

		</div>
	</div>
</section>
@endsection

@section('js-plus')
<script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/5.2.1/tinymce.min.js"></script>

<script>

	$('.chips-placeholder').chips({
		placeholder: 'Tambahkan tag',
		secondaryPlaceholder: '+Tag',
	});

	$('.chips-autocomplete').chips({
		autocompleteOptions: {
			data: {
				'Apple': null,
				'Microsoft': null,
				'Google': null
			},
			limit: Infinity,
			minLength: 1
		}
	});

	tinymce.init({
		selector: 'textarea#full-featured-non-premium',
		height: 500,
		menubar: false,

		plugins: 'preview paste importcss searchreplace autolink autosave save directionality code visualblocks visualchars fullscreen link template codesample charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists textpattern charmap emoticons',

		toolbar: 'undo redo | bold italic underline strikethrough | fontselect fontsizeselect formatselect | alignleft aligncenter alignright alignjustify | outdent indent |  numlist bullist | forecolor backcolor removeformat | | charmap emoticons | preview | link',

		content_css: '{{asset('asset/css/tyni.css')}}',
	});

</script>
@endsection