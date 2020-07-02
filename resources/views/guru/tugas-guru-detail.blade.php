@extends('aapp.app')

@section('title')
@foreach($tugas as $tg)
{{ $tg->judul }} - Guru
@endforeach
@endsection

@section('nav-guru')
@include('guru.app.nav-guru')
@endsection

@section('app-guru')
@foreach($tugas as $tg)

{{-- START ================================================================================ HEADER --}}
@include('guru.app.header-guru')
{{-- END ================================================================================== HEADER --}}

<section class="mt-1">
	<div class="container">
		<div class="row">
			<div class="col s12 m12 l7">
				<blockquote>
					<h6><b>Dibuat : {{ date('j F Y', strtotime($tg->created_at)) }} | {{ date('H:i', strtotime($tg->created_at)) }}</b></h6>
					<div class="tugas-text">
						<p>
							{{ $tg->tugas }}
						</p>
					</div>
				</blockquote>
			</div>
			<div class="col s12 m12 l5">
				<div class="card cont-dash white">
					<div class="cont-head">
						<span class="card-title">
							<h6>Siswa Upload</h6>
						</span>
					</div>
					<div class="card-content grey-text text-darken-2 con-card-cont">
						<table class="highlight">
							<tbody>
								@foreach($jawaban as $jw)
								<tr>
									<td>{{ \App\Siswa::where(['id' => $jw->id_siswa])->value('nama')}}</td>
									<td>
										<a href="#modal-tugas-det-{{$jw->id}}" class="modal-trigger btn-floating btn-flat waves-effect cont-det-back"><i class="cont-det-icon material-icons">arrow_forward</i></a>
									</td>
								</tr>
								@endforeach
							</tbody>
						</table>
					</div>
				</div>

			</div>
		</div>
	</div>
</section>
@endforeach
 
@foreach($jawaban as $jw)
<div id="modal-tugas-det-{{$jw->id}}" class="modal">
	<div class="modal-content" style="max-height: calc(115vh - 210px);overflow-y: auto !important; background-color: #fff">
		<div class="row">
			<div class="col s12 m12 l8 fot-card-left">
				<h5>{{ \App\Tugaskelas::where(['id' => $jw->id_tugas])->value('judul') }}</h5>
				<h6>{{ \App\Pelajaran::where(['id' => \App\Tugaskelas::where(['id' => $jw->id_tugas])->value('id_pelajaran')])->value('pelajaran')}}</h6>
			</div>
			<div class="col s12 m12 l4 fot-card-right">
				<h5>{{ \App\Siswa::where(['id' => $jw->id_siswa])->value('nama') }}</h5>
				<h6>{{ date('j F Y', strtotime($jw->created_at)) }} | {{ date('H:i', strtotime($jw->created_at)) }}</h6>
			</div>
			<div class="col s12 m12 l12">
				<br>
				<div class="divider"></div>
				<br>
			</div>
			<div class="col s12 m12 l12">
				<h6><b>Jawaban</b></h6>
				<blockquote>
					{!! $jw->jawaban !!}
				</blockquote>
				<br>
				@if($jw->nilai==null)
				<form action="{{ route('GuruTugasNilai') }}" method="post">
					@csrf
					<div class="col s12 m12 l3">
				<div class="input-field">
						<input id="last_name" type="text" name="nilai" class="validate">
						<label for="last_name">Nilai</label>
					</div>
						<input type="hidden" name="id" value="{{ $jw->id }}">
					<button type="submit" class="waves-effect waves-light btn rb-color-2">
						<i class="material-icons right">send</i>Input
					</button>
					</div>
				</form>
				@else
				@endif
{{-- 				<h6><b>Deskripsi Tugas</b></h6>
				<blockquote>
					<p>Tidak ada deskripsi</p>
				</blockquote> --}}
			</div>
{{-- 			<div class="col s12 m12 l12">
				<br>
				<div class="divider"></div>
				<br>
			</div> --}}
{{-- 			<div class="col s12 m12 l12">
				<form>
					@csrf
					<div class="input-field col s12">
						<input id="last_name" type="number" class="validate" min="0" max="100">
						<label for="last_name">Nilai</label>
					</div>
					<div class="input-field col s12 center">
						<a class="waves-effect waves-light btn"><i class="material-icons right">send</i>Submit</a>
					</div>
				</form>
			</div> --}}
		</div>
	</div>
</div>
@endforeach

@endsection