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
            <h1>Data Penimbangan</h1>
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
          <form action="{{ route('simpan-penimbangan') }}" method="post">
          {{ csrf_field() }}
          <div class="card-body">
            <div class="row">
              <div class="col-md-6">
              <div class="form-group">
                    <label>Nama Anak</label>
                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama">
                </div>
                <div class="form-group">
                    <label>Tanggal</label>
                    <input type="date" class="form-control" id="tanggal" name="tanggal" placeholder="Masukkan Nama">
                </div>
                <div class="form-group">
                    <label>Berat Badan</label>
                    <input type="text" class="form-control" id="beratbadan" name="beratbadan" placeholder="Masukkan BB (Kg)">
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-md-6 ">
                <!-- /.form-group -->
                <div class="form-group">
                  <label>IMP</label>
                  <select class="form-control select2" name="imp" style="width: 100%;" >
                    <option selected="selected">Tidak</option>
                    <option>Ya</option>
                  </select>
                  <label class="mt-3">KIA</label>
                  <select class="form-control select2" name="kia" style="width: 100%;" >
                    <option selected="selected">Tidak</option>
                    <option>Ya</option>
                  </select>
                  <label class="mt-3">Vitamin</label>
                  <select class="form-control select2" name="vitamin" style="width: 100%;" >
                    <option selected="selected">Vit A</option>
                    <option>Vit B</option>
                  </select>
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
              <a href="#" class="btn btn-danger"><i class="fas fa-plus-square"> Cancel</i></a>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
          </div>
          </form>
         
        </div>
        <!-- /.card -->




@include('Template.footer')
@include('Template.script')
    
</body>
</html>