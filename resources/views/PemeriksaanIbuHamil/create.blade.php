<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pemeriksaan Ibu Hamil</title>
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
                        <h1>Data Pemeriksaan Ibu Hamil</h1>
                    </div>

                </div>
            </div><!-- /.container-fluid -->
        </section>
        <section class="content">
            <div class="container-fluid">
                <!-- SELECT2 EXAMPLE -->
                <div class="card card-default">
                    <div class="card-header bg-primary">
                        <h3 class="card-title">Form Tambah Data Pemeriksaan Ibu Hamil</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                            </button>

                        </div>
                    </div>
                    <!-- /.card-header -->
                    <form action="{{route('pemeriksaanibuhamil.store')}}" method="post">
                        {{ csrf_field() }}
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>NIK/Nama Ibu</label>
                                        <select class="form-control select-ibu-hamil @error('id_ibu') is-invalid @enderror" name="id_ibu" style="width: 100%;" required>
                                            <option value="">Cari Nik/Nama Ibu</option>
                                            @foreach ($ibuHamil as $hamil)
                                            <option @if(old('id_ibu')==$hamil->id) selected @endif value="{{ $hamil->id }}">{{$hamil->user->nik}} - {{ $hamil->nama }}</option>
                                            @endforeach
                                        </select>
                                        @error('id_ibu')
                                        <div class="invalid-feedback">{{$message}}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">

                                    <div class="form-group">
                                        <label>Tinggi Badan</label>
                                        <input type="number" class="form-control @error('tinggibadan') is-invalid @enderror" autofocus id="tinggibadan" placeholder="Masukkan Tinggi Badan" name="tinggibadan" value="{{ old('tinggibadan') }}">
                                        @error('tinggibadan')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Hemoglobin Atas(HB) g/dL</label>
                                        <input type="number" class="form-control @error('hemoglobin_atas') is-invalid @enderror" autofocus id="hemoglobin_atas" name="hemoglobin_atas" placeholder="Masukkan HB" value="{{ old('hemoglobin_atas') }}">
                                        @error('hemoglobin_atas')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Hemoglobin Bawah (HB) g/dL</label>
                                        <input type="number" class="form-control @error('hemoglobin_bawah') is-invalid @enderror" autofocus id="hemoglobin_bawah" name="hemoglobin_bawah" placeholder="Masukkan HB" value="{{ old('hemoglobin_bawah') }}">
                                        @error('hemoglobin_bawah')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Hari Taksiran Persalinan (HTP)</label>
                                        <input type="date" class="form-control @error('htp') is-invalid @enderror" autofocus id="htp" name="htp" placeholder="Masukkan HTP" value="{{ old('htp') }}">
                                        @error('htp')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Hari Pertama Haid Terkahir (HPHT)</label>
                                        <input type="date" class="form-control @error('hpht') is-invalid @enderror" autofocus id="hpht" name="hpht" placeholder="Masukkan HPHT" value="{{ old('hpht') }}">
                                        @error('hpht')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>



                                </div>
                                <!-- /.col -->
                                <div class="col-md-6 ">

                                    <div class="form-group">
                                        <label>Berat Badan (Kg)</label>
                                        <input type="number" class="form-control @error('beratbadan') is-invalid @enderror" autofocus id="beratbadan" name="beratbadan" placeholder="Masukkan Berat Badan" value="{{ old('beratbadan') }}">
                                        @error('beratbadan')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Hamil Ke (G)</label>
                                        <input type="number" class="form-control @error('hamilke') is-invalid @enderror" autofocus id="hamilke" name="hamilke" placeholder="Masukkan Hamil Ke" value="{{ old('hamilke') }}">
                                        @error('hamilke')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Persalinan Ke (P)</label>
                                        <input type="number" class="form-control @error('persalinanke') is-invalid @enderror" autofocus id="persalinanke" name="persalinanke" placeholder="Masukkan Persalinan Ke" value="{{ old('persalinanke') }}">
                                        @error('persalinanke')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Jumlah Keguguran (A)</label>
                                        <input type="number" class="form-control @error('keguguranke') is-invalid @enderror" autofocus id="keguguranke" name="keguguranke" placeholder="Masukkan Keguguran Ke" value="{{ old('keguguranke') }}">
                                        @error('keguguranke')
                                        <div class="invalid-feedback">{{ $message }}</div>
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
                                    <a href="{{ route ('pemeriksaanibuhamil.index')}}" class="btn btn-info"><i class="fas fa-arrow-circle-left"> Kembali</i></a>
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
            </div>
        </section>
    </div>

    @include('Template.script')

    <script>
        $(document).ready(function() {
            $('.select-ibu-hamil').select2({
                theme: 'bootstrap4'
            });
        })
    </script>

</body>

</html>