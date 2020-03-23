<div class="second-nav-menu">
	<div class="collection n-bor">
		<a href="{{route('AdminSekolahDetailKelasMateri')}}" class="collection-item n-bor 
		{{ (request()->routeIs(

			'AdminSekolahDetailKelasMateri'

			)) ? 'active' : '' }}
			">Materi
		</a>
		<a href="{{route('AdminSekolahDetailKelasTugas')}}" class="collection-item n-bor 
		{{ (request()->routeIs(

			'AdminSekolahDetailKelasTugas',
			'AdminSekolahDetailTugas'

			)) ? 'active' : '' }}
			">Tugas
		</a>
		<a href="{{route('AdminSekolahDetailKelasUjian')}}" class="collection-item n-bor 
		{{ (request()->routeIs(

			'AdminSekolahDetailKelasUjian',
			'AdminSekolahDetailUjian'

			)) ? 'active' : '' }}
			">Ujian
		</a>
		<a href="{{route('AdminSekolahDetailKelasDiskusi')}}" class="collection-item n-bor 
		{{ (request()->routeIs(

			'AdminSekolahDetailKelasDiskusi',
			'AdminSekolahDetailDiskusi'

			)) ? 'active' : '' }}
			">Diskusi
		</a>
		<a href="{{route('AdminSekolahDetailKelasSiswa')}}" class="collection-item n-bor 
		{{ (request()->routeIs(

			'AdminSekolahDetailKelasSiswa'

			)) ? 'active' : '' }}
			">Siswa
		</a>
		<a href="{{route('AdminSekolahDetailKelasInformasi')}}" class="collection-item n-bor 
		{{ (request()->routeIs(

			'AdminSekolahDetailKelasInformasi'

			)) ? 'active' : '' }}
			">Informasi
		</a>
	</div>
</div>

<div class="second-nav-menu-mobile">
	<div class="input-field col s12 menu-second-nav-mob">
		<select onchange="location = this.value;">
			<option value="" disabled>Menu</option>
			<option value="{{route('AdminSekolahDetailKelasMateri')}}" 
			{{ (request()->routeIs(

				'AdminSekolahDetailKelasMateri'

				)) ? 'selected' : '' }}
				>Materi
			</option>
			<option value="{{route('AdminSekolahDetailKelasTugas')}}"
			{{ (request()->routeIs(

				'AdminSekolahDetailKelasTugas',
				'AdminSekolahDetailTugas'

				)) ? 'selected' : '' }}
				>Tugas
			</option>
			<option value="{{route('AdminSekolahDetailKelasUjian')}}" 
			{{ (request()->routeIs(

				'AdminSekolahDetailKelasUjian',
				'AdminSekolahDetailUjian'

				)) ? 'selected' : '' }}
				>Ujian
			</option>
			<option value="{{route('AdminSekolahDetailKelasDiskusi')}}"
			{{ (request()->routeIs(

				'AdminSekolahDetailKelasDiskusi',
				'AdminSekolahDetailDiskusi'

				)) ? 'selected' : '' }}
				>Diskusi
			</option>
			<option value="{{route('AdminSekolahDetailKelasSiswa')}}"
			{{ (request()->routeIs(

				'AdminSekolahDetailKelasSiswa'

				)) ? 'selected' : '' }}
				>Siswa
			</option>
			<option value="{{route('AdminSekolahDetailKelasInformasi')}}"
			{{ (request()->routeIs(

				'AdminSekolahDetailKelasInformasi'

				)) ? 'selected' : '' }}
				>Informasi
			</option>
		</select>
	</div>
</div>