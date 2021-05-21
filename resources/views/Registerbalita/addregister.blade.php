<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penimbangan</title>
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
          <form action="{{ route('simpan-registerbalita') }}" method="post">
          {{ csrf_field() }}
          <div class="card-body">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                    <label>Nama Balita</label>
                    <input type="text" class="form-control @error('namabalita') is-invalid @enderror" autofocus id="namabalita" name="namabalita" placeholder="Masukkan Nama">
                    @error('namabalita')
                    <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Tempat Lahir</label>
                    <input type="text" class="form-control @error('tempatlahir') is-invalid @enderror" autofocus id="tempatlahir" name="tempatlahir" placeholder="Masukkan Nama">
                    @error('tempatlahir')
                    <div class="invalid-feedback">{{$message}}</div>
                    @enderror

                </div>
                <div class="form-group">
                    <label>Tanggal Lahir</label>
                    <input type="date" class="form-control @error('tanggallahir') is-invalid @enderror" autofocus id="tanggallahir" name="tanggallahir" placeholder="Masukkan Nama">
                    @error('tanggallahir')
                    <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Jenis Kelamin</label>
                    <select class="form-control select2 @error('jeniskelamin') is-invalid @enderror" autofocus name="jeniskelamin" style="width: 100%;" >
                        <option selected="selected" disabled="disabled">Pilih Jenis Kelamin</option>
                        <option>Laki-laki</option>
                        <option>Perempuan</option>
                  </select>
                  @error('jeniskelamin')
                    <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Nama Ayah</label>
                    <input type="text" class="form-control @error('namaayah') is-invalid @enderror" autofocus id="namaayah" name="namaayah" placeholder="Masukkan Nama ayah">
                    @error('namaayah')
                    <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Nama Ibu</label>
                    <input type="text" class="form-control @error('namaibu') is-invalid @enderror" autofocus id="namaibu" name="namaibu" placeholder="Masukkan Nama Ibu">
                    @error('namaibu')
                    <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label>RT</label>
                    <input type="number" class="form-control @error('rt') is-invalid @enderror" autofocus id="rt" name="rt" placeholder="Masukkan RT">
                    @error('rt')
                    <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>

                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-md-6 ">
                <!-- /.form-group -->
                <div class="form-group">
                    <label>RW</label>
                    <input type="number" class="form-control @error('rw') is-invalid @enderror" autofocus id="rw" name="rw" placeholder="Masukkan RW">
                    @error('rw')
                    <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Usia (Tahun)</label>
                    <input type="number" class="form-control @error('usia') is-invalid @enderror" autofocus id="usia" name="usia" placeholder="Masukkan Usia Anak">
                    @error('usia')
                    <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Berat Badan Lahir (Kg)</label>
                    <input type="number" class="form-control @error('bblahir') is-invalid @enderror" autofocus id="bblahir" name="bblahir" placeholder="Masukkan Berat Badan Anak">
                    @error('bblahir')
                    <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Panjang Badan Lahir (Cm)</label>
                    <input type="number" class="form-control @error('pblahir') is-invalid @enderror" autofocus id="pblahir" name="pblahir" placeholder="Masukkan Panjamg Badan Anak">
                    @error('pblahir')
                    <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label>No KK Balita</label>
                    <input type="number" class="form-control @error('nokk') is-invalid @enderror" autofocus id="nokk" name="nokk" placeholder="Masukkan Nomor KK">
                    @error('nokk')
                    <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label>No NIK Balita</label>
                    <input type="number" class="form-control @error('nikbalita') is-invalid @enderror" autofocus id="nikbalita" name="nikbalita" placeholder="Masukkan Nomor NIK">
                    @error('nikbalita')
                    <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label>No Telp</label>
                    <input type="number" class="form-control @error('telp') is-invalid @enderror" autofocus id="telp" name="telp" placeholder="Masukkan Nomor Telp">
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




@include('Template.footer')
@include('Template.script')
    
</body>
</html>