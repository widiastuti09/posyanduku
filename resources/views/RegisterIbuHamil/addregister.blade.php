<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include('Template.style');
    <title>Data Registrasi Ibu Hamil</title>
</head>

<body>
    @include('Template.navbar');
    @include('Template.sidebar');
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="">
                        <h1>Data Registrasi Ibu Hamil</h1>
                    </div>

                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- SELECT2 EXAMPLE -->
                <div class="card card-default">
                    <div class="card-header bg-primary">
                        <h3 class="card-title">Form Tambah Data</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                            </button>

                        </div>
                    </div>
                    <!-- /.card-header -->
                    <form action="{{ route('simpan-registeribuhamil') }}" method="post">
                        {{ csrf_field() }}
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Masukkan NIK Akun</label>
                                        <select class="form-control select2" name="user_id" required id="user_id">
                                            <option value="">-- Cari NIK --</option>
                                            @forelse($users as $user)
                                            <option @if (old('user_id')==$user->id) selected @endif value="{!! $user->id !!}">{!! $user->nik !!}</option>
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
                                                <input class="form-check-input" type="radio" name="punya_akun"
                                                    id="terdaftar" value="punya" @if(old('punya_akun') === 'punya') checked @endif>
                                                <label class="form-check-label" for="terdaftar">
                                                    Ya
                                                </label>
                                            </div>
                                            <div class="form-check ml-3">
                                                <input class="form-check-input" type="radio" name="punya_akun"
                                                    id="tidak-terdaftar" value="tidak_punya" @if(old('punya_akun') === 'tidak_punya') checked @endif>
                                                <label class="form-check-label" for="tidak-terdaftar">
                                                    Tidak
                                                </label>
                                            </div>
                                        </div>
                                        @error('punya_akun')
                                            <div class="text-danger font-sm">{{ $message }}</div>
                                        @enderror
                                        <div id="akun-container"></div> -->
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Tanggal Register</label>
                                        <input type="date" class="form-control @error('tanggal_pendaftaran') is-invalid @enderror" autofocus id="tanggal_pendaftaran" name="tanggal_pendaftaran" value="{{ old('tanggal_pendaftaran') }}">
                                        @error('tanggal_pendaftaran')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Nama Ibu Hamil</label>
                                        <input readonly type="text" class="form-control @error('nama') is-invalid @enderror" autofocus id="nama" name="nama" placeholder="Masukkan Nama" value="{{ old('nama') }}">
                                        @error('nama')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Tanggal Lahir </label>
                                        <input type="date" class="form-control @error('tanggal_lahir') is-invalid @enderror" autofocus id="tanggal_lahir" name="tanggal_lahir" value="{{ old('tanggal_lahir') }}" onchange="return hitungUmur(value)" max="return Date.now()">
                                        @error('tanggal_lahir')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Nama Suami</label>
                                        <input type="text" class="form-control @error('nama_suami') is-invalid @enderror" autofocus id="nama_suami" name="nama_suami" placeholder="Masukkan Nama" value="{{ old('nama_suami') }}">
                                        @error('nama_suami')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror

                                    </div>
                                    <div class="form-group">
                                        <label>Usia (Tahun)</label>
                                        <input type="number" class="form-control @error('usia') is-invalid @enderror" autofocus id="usia" name="usia" placeholder="Masukkan Usia" value="{{ old('usia') }}" readonly>
                                        @error('usia')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <!-- /.col -->
                                <div class="col-md-6 ">

                                    <div class="form-group">
                                        <label>Gol Darah</label>
                                        <select class="form-control @error('goldarah') is-invalid @enderror" autofocus name="goldarah" style="width: 100%;">
                                            <option value="">Pilih Golongan Darah</option>
                                            <option @if (old('goldarah')==='A' ) selected @endif>A</option>
                                            <option @if (old('goldarah')==='B' ) selected @endif>B</option>
                                            <option @if (old('goldarah')==='AB' ) selected @endif>AB</option>
                                            <option @if (old('goldarah')==='O' ) selected @endif>O</option>
                                        </select>
                                        @error('goldarah')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label>RT</label>
                                        <input type="number" class="form-control @error('rt') is-invalid @enderror" autofocus id="rt" name="rt" placeholder="Masukkan RT" value="{{ old('rt') }}">
                                        @error('rt')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>RW</label>
                                        <input type="number" class="form-control @error('rw') is-invalid @enderror" autofocus id="rw" name="rw" placeholder="Masukkan RW" value="{{ old('rw') }}">
                                        @error('rw')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>


                                    <div class="form-group">
                                        <label>No Telp</label>
                                        <input type="number" class="form-control @error('telp') is-invalid @enderror" autofocus id="telp" name="telp" placeholder="Masukkan Nomor Telp" value="{{ old('telp') }}">
                                        @error('telp')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <!-- /.form-group -->
                                </div>
                                <!-- /.col -->
                            </div>
                            <!-- /.row -->


                            <div class="row">

                                <!-- /.col -->
                                <div class="col-12 col-sm-6">
                                    <button type="submit" class="btn btn-success"><i class="fas fa-plus-square"> Tambah
                                            Data</i></button>
                                    <a href="{{ route('register') }}" class="btn btn-info"><i class="fas fa-arrow-circle-left"> Kembali</i></a>
                                    <!-- /.form-group -->
                                </div>
                                <!-- /.col -->
                            </div>
                            <!-- /.row -->
                        </div>
                    </form>

                </div>
                <!-- /.card -->
                <br><br><br><br><br><br><br><br>



                @include('Template.footer');
            </div>
        </section>
    </div>
    <script>
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
        document.querySelector("#tanggal_pendaftaran").value = formatTanggal(tanggalHariIni);

        const radioButton = document.querySelectorAll("input[name='punya_akun']");
        let terpilih = '{!! old("punya_akun") !!}';

        if (terpilih != '') {
            if (terpilih == 'punya') {
                document.querySelector('#akun-container').innerHTML = `
                <select class="form-control select2"
                  autofocus name="user_id" style="width: 100%;">
                  <option value="">Pilih Akun</option>
                  @forelse($users as $user)
                    <option @if (old('user_id') == $user->id) selected @endif value="{!! $user->id !!}">{!! $user->name !!}</option>
                  @empty
                    <option disabled>Tidak ada data</option>
                  @endforelse
                </select>
                `
            } else {
                document.querySelector('#akun-container').innerHTML = ``;
            }
        }

        function hitungUmur(tanggal) {
            let tanggalLahir = new Date(tanggal);
            let perbedaanBulan = Date.now() - tanggalLahir.getTime();
            let umurKonversi = new Date(perbedaanBulan);
            let tahun = umurKonversi.getUTCFullYear();
            let umur = Math.abs(tahun - 1970);

            document.querySelector('#usia').value = umur;
        }
    </script>
    @include('Template.script');
    <script>
        $(document).ready(function() {
            $('.select2').select2({
                theme: 'bootstrap4'
            });

            $("#user_id").change(function(e) {
                let user_id = $(this).val()
                $.ajax({
                    url: "{{url('/user-detail/')}}/" + user_id,
                    success: function(data) {
                        $('#nama').val(data.nama)
                    },
                    error: function(err) {
                        Swal.close()
                    },
                    beforeSend: function(bf) {
                        Swal.showLoading()
                    },
                    complete: function() {
                        Swal.close()
                    },
                })
            })

            // $('#user_id').change(function(e) {
            //     let text = $(this).find("option:selected").text()
            //     let name = text.split('-')[1];
            //     if (name == undefined || name == "") {
            //         name = "Null"
            //     }
            //     $('#nama').val(name.trim())
            // })

            // $("input[name*='punya_akun']").click(function() {
            //     let html = ''
            //     if ($(this).val() === 'punya') {
            //         $('#akun-container').html(`
            //         <input type="hidden" value="punya" name="punya"/>
            //         <select class="form-control select2"
            //           autofocus name="user_id" style="width: 100%;">
            //           <option value="">Pilih Akun</option>
            //           @forelse($users as $user)
            //             <option @if (old('user_id') === $user->name) selected @endif value="{!! $user->id !!}">{!! $user->name !!}</option>
            //           @empty
            //             <option disabled>Tidak ada data</option>
            //           @endforelse
            //         </select>
            //       `)
            //     } else {
            //         $('#akun-container').html(``)
            //     }
            // });
        })
    </script>


</body>

</html>