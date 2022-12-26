<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Registrasi Lansia</title>
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
                        <h1>Data Lansia</h1>
                    </div>

                </div>
            </div><!-- /.container-fluid -->
        </section>
        <section class="content">
            <div class="container-fluid">
                <!-- SELECT2 EXAMPLE -->
                <div class="card card-default">
                    <div class="card-header bg-primary">
                        <h3 class="card-title">Form Tambah Data Lansia</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                            </button>

                        </div>
                    </div>
                    <!-- /.card-header -->
                    <form action="{{route('simpan-lansia')}}" method="post">
                        {{ csrf_field() }}
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="">Masukkan NIK Akun</label>
                                        <select class="form-control select2-akun" name="user_id" required>
                                            <option value="">-- Cari NIK --</option>
                                            @forelse($users as $user)
                                            <option @if (old('user_id')==$user->id) selected @endif value="{!! $user->id !!}">{!! $user->nik !!} - {!! $user->name !!}</option>
                                            @empty
                                            <option disabled>Tidak ada data</option>
                                            @endforelse
                                        </select>
                                        @error('user_id')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                        <!-- <label>Punya Akun</label>
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
                                        @error('user_id')
                                        <div class="text-danger text-sm">{{$message}}</div>
                                        @enderror -->
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Tanggal Registrasi</label>
                                        <input type="date" class="form-control select2 @error('tanggal_register') is-invalid @enderror" name="tanggal_register" id="tanggal_register">
                                        @error('tanggal_register')
                                        <div class="invalid-feedback">{{$message}}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="">Nama Lansia</label>
                                        <input type="text" class="form-control select2 @error('nama') is-invalid @enderror" placeholder="Masukkan Nama" name="nama" id="nama">
                                        @error('nama')
                                        <div class="invalid-feedback">{{$message}}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="">Tanggal Lahir</label>
                                        <input type="date" class="form-control select2 @error('tanggal_lahir') is-invalid @enderror" name="tanggal_lahir" id="tanggal_lahir">
                                        @error('tanggal_lahir')
                                        <div class="invalid-feedback">{{$message}}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="">Jenis Kelamin</label>
                                        <select class="form-control select2 @error('jenis_kelamin') is-invalid @enderror" name="jenis_kelamin" id="jenis_kelamin">
                                            <option value="">Pilih Jenis Kelamin</option>
                                            <option>Laki-laki</option>
                                            <option>Perempuan</option>
                                        </select>
                                        @error('jenis_kelamin')
                                        <div class="invalid-feedback">{{$message}}</div>
                                        @enderror
                                    </div>


                                </div>
                                <!-- /.col -->
                                <div class="col-md-6 ">

                                    <div class="form-group">
                                        <label for="">RT</label>
                                        <input type="number" class="form-control select2 @error('rt') is-invalid @enderror" placeholder="Masukkan RT" name="rt" id="rt">
                                        @error('rt')
                                        <div class="invalid-feedback">{{$message}}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="">RW</label>
                                        <input type="number" class="form-control select2 @error('rw') is-invalid @enderror" placeholder="Masukkan RW" name="rw" id="rw">
                                        @error('rw')
                                        <div class="invalid-feedback">{{$message}}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="">Alamat</label>
                                        <input type="text" class="form-control select2 @error('alamat') is-invalid @enderror" placeholder="Masukkan Nama Jalan" name="alamat" id="alamat">
                                        @error('alamat')
                                        <div class="invalid-feedback">{{$message}}</div>
                                        @enderror
                                    </div>

                                </div>
                                <!-- /.col -->
                            </div>
                            <!-- /.row -->


                            <div class="row">

                                <!-- /.col -->
                                <div class="col-12 col-sm-6">
                                    <button type="submit" class="btn btn-success"><i class="fas fa-plus-square"> Tambah
                                            Data</i></button>
                                    <a href="{{ route ('registerlansia')}}" class="btn btn-info"><i class="fas fa-arrow-circle-left"> Kembali</i></a>
                                    <!-- /.form-group -->
                                </div>
                                <!-- /.col -->
                            </div>
                            <!-- /.row -->
                        </div>
                    </form>



                </div>
                <br><br><br><br><br>

                @include('Template.footer')

                @include('Template.script')

                <script>
                    let terpilih = '{!! old("punya_akun") !!}';
                    if (terpilih != '') {
                        if (terpilih == 'punya') {
                            document.querySelector('#akun-container').innerHTML = `
                            <input type="hidden" value="punya" name="punya"/>
                            <select class="form-control select2"
                              autofocus name="user_id" style="width: 100%;">
                              <option value="">Pilih Akun</option>
                              @forelse($users as $user)
                                <option @if (old('user_id') == $user->id) selected @endif value="{!! $user->id!!}">{!! $user->name !!}</option>
                              @empty
                                <option disabled>Tidak ada data</option>
                              @endforelse
                            </select>
                    `
                        } else {
                            document.querySelector('#akun-container').innerHTML = ``;
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
                    $(document).ready(function() {
                        $('.select2-akun').select2({
                            theme: 'bootstrap4'
                        })
                        $("input[name*='punya_akun']").click(function() {
                            let html = ''
                            if ($(this).val() === 'punya') {
                                $('#akun-container').html(`
                    <input type="hidden" value="punya" name="punya"/>
                    <select class="form-control select2"
                      autofocus name="user_id" style="width: 100%;">
                      <option value="">Pilih Akun</option>
                      @forelse($users as $user)
                        <option @if (old('user_id') === $user->name) selected @endif value="{!! $user->id !!}">{!! $user->name !!}</option>
                      @empty
                        <option disabled>Tidak ada data</option>
                      @endforelse
                    </select>
                  `)
                            } else {
                                $('#akun-container').html(``)
                            }
                        })
                    })
                </script>




</body>

</html>