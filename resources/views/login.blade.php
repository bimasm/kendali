@extends('aapp.app')

@section('title')
Login
@endsection

@section('app-login')
<section>
  <div class="row" style="margin-bottom: 0; background-color: #ffdda7">

    {{-- Start --------------------------------------------------------------------------------------- slide --}}
    <div class="col col s12 m6 l6" style="padding: 0">
      <div class="carousel carousel-slider" style="min-height: 537px;">

        <div class="carousel-item rb-color-1 rb-text-1" href="#one!">
          <div class="container container-slide">
            <div class="row" style="padding-bottom: 50px;">
              <div class="col s12 m12 l12">
                <div class="animated is-visible">
                  <h2 style="margin-bottom: 0;">Rumah Belajar</h2>
                  <h5 style="margin-top: 0;">Banyuwangi</h5>
                  <p class="rb-text-1">
                    Belajar asyik dan menyenangkan bersama Rumah Belajar, portal pembelajaran yang menyediakan bahan belajar serta fasilitas komunikasi yang mendukung interaksi antar komunitas.
                  </p>
                </div>
              </div>
            </div>
          </div>  
        </div>

        <div class="carousel-item rb-color-1 rb-text-1" href="#two!">
          <div class="container container-slide">
            <div class="row" style="padding-bottom: 50px;">
              <div class="col s12 m12 l12">
                <div class="animated is-visible">
                  <h2 style="margin-bottom: 0;">Rumah Belajar</h2>
                  <h5 style="margin-top: 0;">Banyuwangi</h5>
                  <p class="rb-text-1">
                    Belajar asyik dan menyenangkan bersama Rumah Belajar, portal pembelajaran yang menyediakan bahan belajar serta fasilitas komunikasi yang mendukung interaksi antar komunitas.
                  </p>
                </div>
              </div>
            </div>
          </div>  
        </div>

      </div>
    </div>

    {{-- End --------------------------------------------------------------------------------------- slide --}}

    {{-- Start --------------------------------------------------------------------------------------- Form --}}
    <div class="col s12 m6" style="background-color: #ffdda7">
      <center>
        <div class="container" style="margin: 20px 0 0 0">

          {{-- START ------------------------------------------------------------ Login --}}
          <form action="/login" method="POST">
            @csrf
            <div class="row">
              <div class="input-field col s5">
                <input id="email" type="text" class="validate log" name="email">
                <label for="email" class="log">Email</label>
              </div>
              <div class="input-field col s5">
                <input id="password" type="password" class="validate log" name="password">
                <label for="password" class="log">Password</label>
              </div>
              <div class="col s2" style="margin: 20px 0">
                <button type="submit" class="waves-effect waves-light btn rb-color-2 no-shad">Login</button>
              </div>
            </div>
          </form>
          {{-- END ------------------------------------------------------------ Login --}}

          <div class="row">
            <div class="col s12 m12">
              <div class="card rb-color-2 darken-1">

                <div class="row">

                  <div class="col s12">
                    <ul class="tabs tab-reg">
                      <li class="tab col s4"><a class="active" href="#sd">SD</a></li>
                      <li class="tab col s4"><a href="#smp">SMP</a></li>
                      <li class="tab col s4"><a href="#sma">SMA</a></li>
                    </ul>
                  </div>

                  {{-- START ------------------------------------------------------------ Reg SD --}}
                  <div id="sd" class="col s12">
                    <div class="card-content white-text">

                      <form action="{{ route('regis') }}" method="post">
                        @csrf
                        <div class="row">
                          <div class="col s12">

                            <div class="row">
                              <div class="input-field col s6">
                                <input id="nama_lengkap" type="text" class="validate reg" name="nama">
                                <label class="reg" for="nama_lengkap">Nama Lengkap</label>
                              </div>
                              <div class="input-field col s6">
                                <input id="email" type="text" class="validate reg" name="email">
                                <label class="reg" for="email">Email</label>
                              </div>
                            </div>

                            <div class="row">
                              <div class="input-field col s12">
                                <input id="password" type="password" class="validate reg" name="password">
                                <label class="reg" for="password">Password</label>
                              </div>
                            </div>

                            <div class="row">
                              <div class="input-field col s12 reg">
                                <select name="sekolah">
                                  <option value="" disabled selected>Pilih Sekolah</option>
                                  @foreach($sd as $ds)
                                  <option value="{{ $ds->id }}">{{ $ds->nama }}</option>
                                  @endforeach
                                </select>
                                <label>Sekolah</label>
                              </div>
                            </div>

                          </div>
                        </div>

                        <div class="card-action">
                          <button type="submit" class="waves-effect waves-light btn rb-color-2 no-shad but-reg" style="width: 100%">rgistrasi</button>
                        </div>
                      </form>

                    </div>
                  </div>
                  {{-- End ------------------------------------------------------------ Reg SD --}}

                  {{-- START ------------------------------------------------------------ Reg SMP --}}
                  <div id="smp" class="col s12">
                    <div class="card-content white-text">

                      <form action="{{ route('regis') }}" method="post">
                        @csrf
                        <div class="row">
                          <div class="col s12">

                            <div class="row">
                              <div class="input-field col s6">
                                <input id="nama_lengkap" type="text" class="validate reg" name="nama">
                                <label class="reg" for="nama_lengkap">Nama Lengkap</label>
                              </div>
                              <div class="input-field col s6">
                                <input id="email" type="text" class="validate reg" name="email">
                                <label class="reg" for="email">Email</label>
                              </div>
                            </div>

                            <div class="row">
                              <div class="input-field col s12">
                                <input id="password" type="password" class="validate reg" name="password">
                                <label class="reg" for="password">Password</label>
                              </div>
                            </div>

                            <div class="row">
                              <div class="input-field col s12 reg">
                                <select name="sekolah">
                                  <option value="" disabled selected>Pilih Sekolah</option>
                                  @foreach($smp as $pms)
                                  <option value="{{ $pms->id }}">{{ $pms->nama }}</option>
                                  @endforeach
                                </select>
                                <label>Sekolah</label>
                              </div>
                            </div>

                          </div>
                        </div>

                        <div class="card-action">
                          <button type="submit" class="waves-effect waves-light btn rb-color-2 no-shad but-reg" style="width: 100%">rgistrasi</button>
                        </div>
                      </form>

                    </div>
                  </div>
                  {{-- End ------------------------------------------------------------ Reg SMP --}}

                  {{-- START ------------------------------------------------------------ Reg SMA --}}
                  <div id="sma" class="col s12">
                    <div class="card-content white-text">

                      <form action="{{ route('regis') }}" method="post">
                        @csrf
                        <div class="row">
                          <div class="col s12">

                            <div class="row">
                              <div class="input-field col s6">
                                <input id="nama_lengkap" type="text" class="validate reg" name="nama">
                                <label class="reg" for="nama_lengkap">Nama Lengkap</label>
                              </div>
                              <div class="input-field col s6">
                                <input id="email" type="text" class="validate reg" name="email">
                                <label class="reg" for="email">Email</label>
                              </div>
                            </div>

                            <div class="row">
                              <div class="input-field col s12">
                                <input id="password" type="password" class="validate reg" name="password">
                                <label class="reg" for="password">Password</label>
                              </div>
                            </div>

                            <div class="row">
                              <div class="input-field col s12 reg">
                                <select name="sekolah">
                                  <option value="" disabled selected>Pilih Sekolah</option>
                                  @foreach($sma as $ams)
                                  <option value="{{ $ams->id }}">{{ $ams->nama }}</option>
                                  @endforeach
                                </select>
                                <label>Sekolah</label>
                              </div>
                            </div>

                          </div>
                        </div>

                        <div class="card-action">
                          <button type="submit" class="waves-effect waves-light btn rb-color-2 no-shad but-reg" style="width: 100%">rgistrasi</button>
                        </div>
                      </form>

                    </div>
                  </div>
                  {{-- End ------------------------------------------------------------ Reg SMA --}}

                </div>

              </div>
            </div>
          </div>

        </div>
      </center>
    </div>
    {{-- END --------------------------------------------------------------------------------------- Form --}}

  </div>
  <div class="rb-color-1 after-slide"></div>
</section>

@endsection