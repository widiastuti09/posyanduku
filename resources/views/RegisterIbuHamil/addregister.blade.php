<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include('Template.style');
    <title>Document</title>
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
                    <label>Tanggal Register</label>
                    <input type="date" class="form-control @" autofocus id="tglregister" name="tglregister" value="{{ old('tglregister') }}">
                    @error('tglregister')
                        <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Nama Ibu Hamil</label>
                    <input type="text" class="form-control @error('nama') is-invalid @enderror" autofocus id="nama" name="nama" placeholder="Masukkan Nama" value="{{ old('nama') }}" >
                    @error('nama')
                    <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Tanggal Lahir </label>
                    <input type="date" class="form-control @error('tgllahir') is-invalid @enderror" autofocus id="tglllahir" name="tgllahir" value="{{ old('tgllahir') }}">
                    @error('tgllahir')
                        <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Nama Suami</label>
                    <input type="text" class="form-control @error('namasuami') is-invalid @enderror" autofocus id="namasuami" name="namasuami" placeholder="Masukkan Nama" value="{{ old('namasuami') }}">
                    @error('namasuami')
                    <div class="invalid-feedback">{{$message}}</div>
                    @enderror

                </div>
                
               
                <div class="form-group">
                    <label>Gol Darah</label>
                    <select class="form-control select2 @error('goldarah') is-invalid @enderror" autofocus name="goldarah" style="width: 100%;" >
                        <option value="">Pilih Golongan Darah</option>
                        <option @if(old('goldarah') === 'A') selected @endif>A</option>
                        <option @if(old('goldarah') === 'B') selected @endif>B</option>
                        <option @if(old('goldarah') === 'AB') selected @endif>AB</option>
                        <option @if(old('goldarah') === 'O') selected @endif>O</option>
                    </select>
                    @error('goldarah')
                        <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>
                <!-- <div class="form-group">
                    <label>Gol Darah</label>
                    <input type="text" class="form-control @error('goldarah') is-invalid @enderror" autofocus id="goldarah" placeholder="Masukkan Golongan Darah" name="goldarah" >
                    @error('goldarah')
                        <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div> -->
                <div class="form-group">
                    <label>Tinggi Badan</label>
                    <input type="text" class="form-control @error('tinggibadan') is-invalid @enderror" autofocus id="tinggibadan" placeholder="Masukkan Tinggi Badan" name="tinggibadan" value="{{ old('tinggibadan') }}">
                    @error('tinggibadan')
                    <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Usia (Tahun)</label>
                    <input type="number" class="form-control @error('usia') is-invalid @enderror" autofocus id="usia" name="usia" placeholder="Masukkan Usia" value="{{ old('usia') }}">
                    @error('usia')
                    <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Hemoglobin (HB) g/dL</label>
                    <input type="number" class="form-control @error('hemoglobin') is-invalid @enderror" autofocus id="hemoglobin" name="hemoglobin" placeholder="Masukkan HB" value="{{ old('hemoglobin') }}">
                    @error('hemoglobin')
                    <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Hari Taksiran Persalinan (HTP)</label>
                    <input type="date" class="form-control @error('htp') is-invalid @enderror" autofocus id="htp" name="htp" placeholder="Masukkan HTP" value="{{ old('htp') }}">
                    @error('htp')
                    <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>
               
              

                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-md-6 ">
                <!-- /.form-group -->
                <div class="form-group">
                    <label>Hari Pertama Haid Terkahir (HPHT)</label>
                    <input type="date" class="form-control @error('hpht') is-invalid @enderror" autofocus id="hpht" name="hpht" placeholder="Masukkan HPHT" value="{{ old('hpht') }}">
                    @error('hpht')
                    <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>
                 
                <div class="form-group">
                    <label>Berat Badan (Kg)</label>
                    <input type="text" class="form-control @error('beratbadan') is-invalid @enderror" autofocus id="beratbadan" name="beratbadan" placeholder="Masukkan Berat Badan" value="{{ old('beratbadan') }}">
                    @error('beratbadan')
                    <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label>RT</label>
                    <input type="number" class="form-control @error('rt') is-invalid @enderror" autofocus id="rt" name="rt" placeholder="Masukkan RT" value="{{ old('rt') }}">
                    @error('rt')
                    <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label>RW</label>
                    <input type="number" class="form-control @error('rw') is-invalid @enderror" autofocus id="rw" name="rw" placeholder="Masukkan RW" value="{{ old('rw') }}">
                    @error('rw')
                    <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>
               
                <div class="form-group">
                    <label>Hamil Ke (G)</label>
                    <input type="text" class="form-control @error('hamilke') is-invalid @enderror" autofocus id="hamilke" name="hamilke" placeholder="Masukkan Hamil Ke" value="{{ old('hamilke') }}">
                    @error('hamilke')
                    <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Persalinan Ke (P)</label>
                    <input type="number" class="form-control @error('persalinanke') is-invalid @enderror" autofocus id="persalinanke" name="persalinanke" placeholder="Masukkan Persalinan Ke" value="{{ old('persalinanke') }}">
                    @error('persalinanke')
                    <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Jumlah Keguguran (P)</label>
                    <input type="number" class="form-control @error('keguguranke') is-invalid @enderror" autofocus id="keguguranke" name="keguguranke" placeholder="Masukkan Keguguran Ke" value="{{ old('keguguranke') }}">
                    @error('keguguranke')
                    <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label>No Telp</label>
                    <input type="number" class="form-control @error('telp') is-invalid @enderror" autofocus id="telp" name="telp" placeholder="Masukkan Nomor Telp" value="{{ old('telp') }}">
                    @error('telp')
                    <div class="invalid-feedback">{{$message}}</div>
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
              <button type="submit" class="btn btn-success"><i class="fas fa-plus-square"> Tambah Data</i></button>
               <a href="{{ route ('register')}}" class="btn btn-info"><i class="fas fa-arrow-circle-left"> Kembali</i></a>
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
    @include('Template.script');
</body>
</html>