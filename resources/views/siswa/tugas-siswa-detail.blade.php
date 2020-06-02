@extends('aapp.app')

@section('title')
Tugas - Siswa
@endsection

@section('nav-siswa')
@foreach($data as $dt)
@include('siswa.app.nav-siswa')
@endforeach
@endsection

@section('app-siswa')

{{-- START ================================================================================ HEADER --}}
@foreach($data as $dt)
<section class="head-cont-tugas-siswa-plus">
	<div class="container">
		<div class="row valign-wrapper-rb">
			<div class="col s12 m12 l6 head-title-tugas-siswa">
				<h5>{{ $dt->judul }}</h5>
				<h6>Pelajaran {{ \App\Pelajaran::where(['id' => \App\Tugaskelas::where('id', $dt->id)->value('id_pelajaran')])->value('pelajaran') }}</h6>
			</div>
			<div class="col s12 m12 l6 head-at-tugas-siswa valign">
				<h6>
					@if(\App\Jawabantugas::where('id_tugas', $dt->id)->where('id_siswa',Auth::guard('siswa')->user()->id)->count()>0)
					Anda sudah mengerjakan
					@else
					Anda belum mengerjakan
					@endif
				</h6>
				<div class="divider"></div>
				<h6>Batas pengumpulan : {{ $dt->deadline }}</h6>
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
					<h6><b>{{ \App\Guru::where(['id' => \App\Pelajaran::where(['id' => $dt->id])->value('id_guru')])->value('nama') }}, {{ $dt->created_at }}</b></h6>
					<div class="tugas-text">
						<p>
							{{ $dt->tugas }}
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
						<form action="{{ route('jawabtugas') }}" method="POST">
							@csrf
							<input type="hidden" name="tugas" value="{{ $dt->id }}">
							@endforeach
							<div class="input-field" style="margin-top: 0">
								<textarea id="full-featured-non-premium" name="jawaban"></textarea>
							</div>

							<div class="input-field center">
								<button type="submit" class="waves-effect btn-flat grey-text text-darken-1"><i class="material-icons right">send</i>Submit</button>
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