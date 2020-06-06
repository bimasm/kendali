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
@foreach($tugas as $tg)
<section class="head-cont-tugas-siswa-plus">
	<div class="container">
		<div class="row valign-wrapper-rb">
			<div class="col s12 m12 l6 head-title-tugas-siswa">
				<h5>{{ $tg->judul }}</h5>
				<h6>Pelajaran {{ \App\Pelajaran::where(['id' => \App\Tugaskelas::where('id', $tg->id)->value('id_pelajaran')])->value('pelajaran') }}</h6>
			</div>
			<div class="col s12 m12 l6 head-at-tugas-siswa valign">
				<h6>
					@if(\App\Jawabantugas::where('id_tugas', $tg->id)->where('id_siswa',Auth::guard('siswa')->user()->id)->count()>0)
					Anda sudah mengerjakan, 
					{{ date('j F Y', strtotime(\App\Jawabantugas::where(['id' => $tg->id])->value('created_at'))) }}, 
					{{ date('H:i', strtotime(\App\Jawabantugas::where(['id' => $tg->id])->value('created_at'))) }}
					@else
					Anda belum mengerjakan
					@endif
				</h6>
				<div class="divider"></div>
				<h6>Batas pengumpulan : {{ date('j F Y', strtotime($tg->deadline)) }}, {{ date('H:i', strtotime($tg->deadline)) }}</h6>
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
					<h6><b>{{ \App\Guru::where(['id' => \App\Pelajaran::where(['id' => $tg->id])->value('id_guru')])->value('nama') }}, {{ date('j F Y', strtotime($tg->created_at)) }}, {{ date('H:i', strtotime($tg->created_at)) }}</b></h6>
					<div class="tugas-text">
						<p>
							{{ $tg->tugas }}
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
							<input type="hidden" name="tugas" value="{{ $tg->id }}">
							@endforeach
							<div class="input-field" style="margin-top: 0">
								<textarea id="full-featured-non-premium" name="jawaban">
									{!! \App\Jawabantugas::where(['id' => $tg->id])->value('jawaban') !!}
								</textarea>
							</div>

							<div class="input-field center">
								<button type="submit" class="waves-effect btn-flat btn-flat-2-rb"><i class="material-icons right">send</i>Submit</button>
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

		plugins: 'preview paste importcss searchreplace autolink autosave save directionality code visualblocks visualchars fullscreen link template codesample charmap hr pagebreak nonbreaking anchor toc insertgatetime advlist lists textpattern charmap emoticons',

		toolbar: 'undo redo | bold italic underline strikethrough | fontselect fontsizeselect formatselect | alignleft aligncenter alignright alignjustify | outgent indent |  numlist bullist | forecolor backcolor removeformat | | charmap emoticons | preview | link',

		content_css: '{{asset('asset/css/tyni.css')}}',
	});

</script>
@endsection