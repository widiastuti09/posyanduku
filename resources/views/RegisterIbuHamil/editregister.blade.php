<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include('Template.style')
    <title>Edit Register Ibu Hamil</title>
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
            <h3 class="card-title">Form Edit Data</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
              </button>
             
            </div>
          </div>
          <!-- /.card-header -->
          <form action="{{ route('updateregisterbumil', $regmil->id) }}" method="post">
          {{ csrf_field() }}
          <div class="card-body">
            <div class="row">
              <div class="col-md-6">
              <div class="form-group">
                    <label>Tanggal Register</label>
                    <input type="date" class="form-control"  id="tglregister" name="tglregister" value="{{$regmil->tglregister}}">
                </div>
                <div class="form-group">
                    <label>Nama Ibu Hamil</label>
                    <input type="text" class="form-control" id="nama" name="nama" value="{{$regmil->nama}}">
                </div>
                <div class="form-group">
                    <label>Tanggal Lahir </label>
                    <input type="date" class="form-control" autofocus id="tglllahir" name="tgllahir" value="{{$regmil->tgllahir}}">
                   
                </div>
                <div class="form-group">
                    <label>Nama Suami</label>
                    <input type="text" class="form-control" id="namasuami" name="namasuami" value="{{$regmil->namasuami}}">
                </div>
                <!-- <div class="form-group">
                    <label>Gol Darah</label>
                    <input type="text" class="form-control @error('goldarah') is-invalid @enderror" autofocus id="goldarah" placeholder="Masukkan Golongan Darah" name="goldarah" >
                    @error('goldarah')
                        <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div> -->
                <div class="form-group">
                    <label>Usia (Tahun)</label>
                    <input type="number" class="form-control" autofocus id="usia" name="usia" placeholder="Masukkan Usia" value="{{$regmil->usia}}">
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-md-6 ">
                <!-- /.form-group -->
                <div class="form-group">
                  <label>Gol Darah</label>
                  <select class="form-control select2 @error('goldarah') is-invalid @enderror" autofocus name="goldarah" style="width: 100%;" >
                      <option value="{{$regmil->goldarah}}">{{$regmil->goldarah}}</option>
                      <option disabled="disabled">Pilih Golongan Darah</option>
                      <option>A</option>
                      <option>B</option>
                      <option>AB</option>
                      <option>O</option>
                  </select>
                </div>
                <div class="form-group">
                    <label>RT</label>
                    <input type="number" class="form-control " autofocus id="rt" name="rt" placeholder="Masukkan RT" value="{{$regmil->rt}}">
                </div>
                <div class="form-group">
                    <label>RW</label>
                    <input type="number" class="form-control" autofocus id="rw" name="rw" placeholder="Masukkan RW" value="{{$regmil->rw}}">
                </div>
               <div class="form-group">
                    <label>No Telp</label>
                    <input type="number" class="form-control" autofocus id="telp" name="telp" placeholder="Masukkan Nomor Telp" value="{{$regmil->telp}}">
                 
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->

           
            <div class="row">
          
              <!-- /.col -->
              <div class="col-12 col-sm-6">
              <button type="submit" class="btn btn-success"><i class="fas fa-plus-square"> Simpan Data</i></button>
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