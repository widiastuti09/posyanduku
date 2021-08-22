<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Registrasi Balita</title>
    @include('Template.style')
</head>

<body>
    @include('Template.navbar')

    @include('Template.sidebar')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="">
                        <h1>Data Registrasi Balita</h1>
                    </div>
                </div>
            </div>
        </section>

        <section class="content">
            <div class="container-fluid">
                <div class="card card-default">
                    <div class="card-header bg-primary">
                        <h3 class="card-title">Form Tambah Data</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                            </button>

                        </div>
                    </div>
                    <form action="{{ route('simpan-registerbalita') }}" method="post">
                        {{ csrf_field() }}
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Punya Akun</label>
                                        <div class="d-flex gap-5 align-items-center mb-2">
                                            <div class="form-check">
                                                <input
                                                    class="form-check-input  @error('punya_akun') is-invalid @enderror"
                                                    type="radio" name="punya_akun" id="punya" value="punya"
                                                    @if(old('punya_akun')==='punya' ) checked @endif>
                                                <label class="form-check-label" for="punya">
                                                    Ya
                                                </label>
                                            </div>
                                            <div class="form-check ml-3">
                                                <input
                                                    class="form-check-input  @error('punya_akun') is-invalid @enderror"
                                                    type="radio" name="punya_akun" id="tidak-punya" value="tidak_punya"
                                                    @if(old('punya_akun')==='tidak_punya' ) checked @endif>
                                                <label class="form-check-label" for="tidak-punya">
                                                    Tidak
                                                </label>
                                            </div>
                                        </div>
                                        @error('punya_akun')
                                        <div class="text-danger text-sm">{{ $message }}</div>
                                        @enderror

                                        <div id="akun-container"></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Nama Balita</label>
                                                <input type="text"
                                                    class="form-control @error('nama_balita') is-invalid @enderror"
                                                    autofocus id="nama_balita" name="nama_balita"
                                                    placeholder="Masukkan Nama" value="{{ old('nama_balita') }}">
                                                @error('nama_balita')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label>Tempat Lahir</label>
                                                <input type="text"
                                                    class="form-control @error('tempat_lahir') is-invalid @enderror"
                                                    autofocus id="tempat_lahir" name="tempat_lahir"
                                                    placeholder="Masukkan Nama" value="{{ old('tempat_lahir') }}">
                                                @error('tempat_lahir')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror

                                            </div>
                                            <div class="form-group">
                                                <label>Tanggal Lahir</label>
                                                <input type="date"
                                                    class="form-control @error('tanggal_lahir') is-invalid @enderror" autofocus id="tanggal_lahir" name="tanggal_lahir" placeholder="Masukkan Nama" value="{{ old('tanggal_lahir') }}" onchange="return hitungUmur(value)" >
                                                @error('tanggal_lahir')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label>Jenis Kelamin</label>
                                                <select
                                                    class="form-control select2 @error('jenis_kelamin') is-invalid @enderror"
                                                    autofocus name="jenis_kelamin" style="width: 100%;">
                                                    <option value="">Pilih Jenis Kelamin</option>
                                                    <option @if (old('jenis_kelamin')==='Laki-laki' ) selected @endif>
                                                        Laki-laki</option>
                                                    <option @if (old('jenis_kelamin')==='Perempuan' ) selected @endif>
                                                        Perempuan</option>
                                                </select>
                                                @error('jenis_kelamin')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label>Nama Ayah</label>
                                                <input type="text"
                                                    class="form-control @error('nama_ayah') is-invalid @enderror"
                                                    autofocus id="nama_ayah" name="nama_ayah"
                                                    placeholder="Masukkan Nama ayah" value="{{ old('nama_ayah') }}">
                                                @error('nama_ayah')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label>Nama Ibu</label>
                                                <div class="d-flex gap-5 align-items-center mb-2">
                                                    <div class="">
                                                        <input class=" @error('pilih_ibu') is-invalid @enderror"
                                                            type="radio" name="pilih_ibu" id="terdaftar"
                                                            value="terdaftar" @if(old('pilih_ibu')==='terdaftar' )
                                                            checked @endif>
                                                        <label class="form-check-label" for="terdaftar">
                                                            Terdaftar
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class=" @error('pilih_ibu') is-invalid @enderror"
                                                            type="radio" name="pilih_ibu" id="tidak-terdaftar"
                                                            value="tidak_terdaftar"
                                                            @if(old('pilih_ibu')==='tidak_terdaftar' ) checked @endif>
                                                        <label class="form-check-label" for="tidak-terdaftar">
                                                            Tidak Terdaftar
                                                        </label>
                                                    </div>
                                                </div>
                                                @error('pilih_ibu')
                                                <div class="text-danger text-sm">{{ $message }}</div>
                                                @enderror

                                                <div id="ibu-container"></div>

                                            </div>
                                            <div class="form-group">
                                                <label>RT</label>
                                                <input type="number"
                                                    class="form-control @error('rt') is-invalid @enderror" autofocus
                                                    id="rt" name="rt" placeholder="Masukkan RT" value="{{ old('rt') }}">
                                                @error('rt')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 ">
                                            <div class="form-group">
                                                <label>RW</label>
                                                <input type="number"
                                                    class="form-control @error('rw') is-invalid @enderror" autofocus
                                                    id="rw" name="rw" placeholder="Masukkan RW" value="{{ old('rw') }}">
                                                @error('rw')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label>Usia (Tahun)</label>
                                                <input type="number"
                                                    class="form-control @error('usia') is-invalid @enderror" autofocus
                                                    id="usia" name="usia" placeholder="Masukkan Usia Anak"
                                                    value="{{ old('usia') }}">
                                                @error('usia')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label>Berat Badan Lahir (Kg)</label>
                                                <input type="number"
                                                    class="form-control @error('berat_badan_lahir') is-invalid @enderror"
                                                    autofocus id="berat_badan_lahir" name="berat_badan_lahir"
                                                    placeholder="Masukkan Berat Badan Anak"
                                                    value="{{ old('berat_badan_lahir') }}">
                                                @error('berat_badan_lahir')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label>Panjang Badan Lahir (Cm)</label>
                                                <input type="number"
                                                    class="form-control @error('panjang_panjang_lahir') is-invalid @enderror"
                                                    autofocus id="panjang_panjang_lahir" name="panjang_panjang_lahir"
                                                    placeholder="Masukkan Panjamg Badan Anak"
                                                    value="{{ old('panjang_panjang_lahir') }}">
                                                @error('panjang_panjang_lahir')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label>No KK Balita</label>
                                                <input type="number"
                                                    class="form-control @error('no_kk') is-invalid @enderror" autofocus
                                                    id="no_kk" name="no_kk" placeholder="Masukkan Nomor KK"
                                                    value="{{ old('no_kk') }}">
                                                @error('no_kk')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label>No NIK Balita</label>
                                                <input type="number"
                                                    class="form-control @error('nik_balita') is-invalid @enderror"
                                                    autofocus id="nik_balita" name="nik_balita"
                                                    placeholder="Masukkan Nomor NIK" value="{{ old('nik_balita') }}">
                                                @error('nik_balita')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label>No Telp</label>
                                                <input type="number"
                                                    class="form-control @error('telp') is-invalid @enderror" autofocus
                                                    id="telp" name="telp" placeholder="Masukkan Nomor Telp"
                                                    value="{{ old('telp') }}">
                                                @error('telp')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 col-sm-6">
                                            <button type="submit" class="btn btn-success">
                                                <i class="fas fa-plus-square">TambahData</i>
                                            </button>
                                            <a href="{{ route('register') }}" class="btn btn-info"><i
                                                    class="fas fa-arrow-circle-left"> Kembali</i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>

                </div>
                <br><br><br><br><br><br><br><br>

                @include('Template.footer')
            </div>
        </section>
        <script>
            const radioButton = document.querySelectorAll("input[name='punya_akun']");
            const radioButtonIbu = document.querySelectorAll("input[name='pilih_ibu']");
            let terpilih = '{!! old("punya_akun") !!}';
            let terdaftar = '{!! old("pilih_ibu") !!}';

            if (terpilih != '') {
                if (terpilih == 'punya') {
                    document.querySelector('#akun-container').innerHTML = `
                    <input type="hidden" value="punya" name="punya"/>
                    <select class="form-control select2"
                      autofocus name="user_id" style="width: 100%;">
                      <option value="">Pilih Akun</option>
                      @forelse($users as $user)
                        <option @if (old('user_id') == $user->id) selected @endif value="{!! $user->i!!}">{!! $user->name !!}</option>
                      @empty
                        <option disabled>Tidak ada data</option>
                      @endforelse
                    </select>
                    `
                } else {
                    document.querySelector('#akun-container').innerHTML = ``;
                }
            }

            if (terdaftar != '') {
                if (terdaftar == 'terdaftar') {
                    document.querySelector('#ibu-container').innerHTML = `
                        <input type="hidden" value="terdaftar" name="terdaftar"/>
                        <select class="form-control select2 @error('id_ibu') is-invalid @enderror"
                            autofocus name="id_ibu" style="width: 100%;" onchange="return parseRTRW({{ json_encode($ibuHamil) }}, value)">
                            <option value="">Pilih Ibu</option>
                            @forelse($ibuHamil as $bumil)
                                <option @if (old('id_ibu') == $bumil->id) selected @endif value="{!$bumil->id !!}">{!! $bumil->nama !!}</option>
                            @empty
                                <option disabled>Tidak ada data</option>
                            @endforelse
                        </select>
                    `;
                } else {
                    document.querySelector('#ibu-container').innerHTML = `
                        <input type="text" class="form-control @error('namaibu') is-invalid @enderror"
                            autofocus id="namaibu" name="namaibu" placeholder="Masukkan Nama Ibu"
                            value="{{ old('namaibu') }}">
                    `;
                }
            }

            var tanggalHariIni = new Date();

            function formatTanggal(tanggal) {
                let tanggalBaru = new Date(tanggal),
                    bulan = '' + (tanggalBaru.getMonth() + 1),
                    hari = '' + tanggalBaru.getDate(),
                    tahun = tanggalBaru.getFullYear();

                if (bulan.length < 2) {
                    bulan = '0' + bulan;
                }

                if (hari.length < 2) {
                    hari = '0' + hari;
                }

                return [tahun, bulan, hari].join('-');
            }

            document.querySelector('#tanggal_lahir').setAttribute("max", formatTanggal(tanggalHariIni));

            function hitungUmur(tanggal){
                let tanggalLahir = new Date(tanggal);
                let perbedaanBulan = Date.now() - tanggalLahir.getTime();
                let umurKonversi = new Date(perbedaanBulan);
                let tahun = umurKonversi.getUTCFullYear();
                let umur = Math.abs(tahun - 1970);

                document.querySelector('#usia').value = parseInt(umur);
            }

            function parseRTRW(ibuHamil, id){
                let inputRt = document.querySelector('#rt');
                let inputRw = document.querySelector('#rw')
                let objectIbuHamil = ibuHamil.find((hamil) => {return hamil.id == id});
                inputRt.value = objectIbuHamil.rt
                inputRw.value = objectIbuHamil.rw
                inputRt.readOnly = true
                inputRw.readOnly = true
            }
        </script>
        @include('Template.script')
        <script>
            $(document).ready(function () {
                $("input[name*='pilih_ibu']").click(function () {
                    let html = ''
                    if ($(this).val() === 'terdaftar') {
                        $('#ibu-container').html(`
                          <input type="hidden" value="terdaftar" name="terdaftar"/>
                          <select class="form-control select2 @error('id_ibu') is-invalid @enderror"
                            autofocus name="id_ibu" style="width: 100%;" onchange="return parseRTRW({{ json_encode($ibuHamil) }}, value)">
                            <option value="">Pilih Ibu</option>
                            @forelse($ibuHamil as $bumil)
                              <option @if (old('id_ibu') == $bumil->id) selected @endif value="{!! $bumil->id !!}">{!! $bumil->nama !!}</option>
                            @empty
                              <option disabled>Tidak ada data</option>
                            @endforelse
                          </select>
                        `)
                    } else {
                        $('#ibu-container').html(`
                          <input type="text" class="form-control @error('namaibu') is-invalid @enderror"
                            autofocus id="namaibu" name="namaibu" placeholder="Masukkan Nama Ibu"
                            value="{{ old('namaibu') }}">
                        `)
                    }
                })

                $("input[name*='punya_akun']").click(function () {
                    let html = ''
                    if ($(this).val() === 'punya') {
                        $('#akun-container').html(`
                          <input type="hidden" value="punya" name="punya"/>
                          <select class="form-control select2"
                            autofocus name="user_id" style="width: 100%;">
                            <option value="">Pilih Akun</option>
                            @forelse($users as $user)
                              <option @if (old('user_id') == $user->id) selected @endif value="{!! $user->id !!}">{!! $user->name !!}</option>
                            @empty
                              <option disabled>Tidak ada data</option>
                            @endforelse
                          </select>
                        `)
                    } else {
                        $('#akun-container').html('')
                    }
                })
            })

        </script>
</body>

</html>
