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
            <h3 class="card-title">Form Edit Data</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
              </button>
             
            </div>
          </div>
          <!-- /.card-header -->
          <form action="{{ route('updatepenimbangan', $pen->id) }}" method="post">
          {{ csrf_field() }}
          <div class="card-body">
            <div class="row">
              <div class="col-md-6">

              <!-- <div class="form-group">
                    <label>Nama Anak</label>
                    <input type="text" class="form-control" id="namabalita_id" name="namabalita" placeholder="Masukkan Nama" value="{{$pen->namabalita}}">
                </div> -->

                <div class="form-group">
                  <label>Nama Balita</label>
                  <select name="namabalita_id"  id="namabalita_id" class="form-control select2bs4" style="width: 100%;">
                    <option value="" disabled="disabled">--Pilih Opsi--</option>
                    @foreach($regbal as $penimbangan)
                    
                    <option value="{{$penimbangan->id}}" @if($penimbangan->id === $pen->namabalita_id) selected @endif>{{$penimbangan->namabalita}}</option>
                    @endforeach
                  </select>
                </div>
                
                <div class="form-group">
                    <label>Tanggal</label>
                    <input type="date" class="form-control" id="tanggal" name="tanggal" placeholder="Masukkan Nama" value="{{$pen->tanggal}}">
                </div>
                <div class="form-group">
                    <label>Berat Badan</label>
                    <input type="text" class="form-control" id="beratbadan" name="beratbadan" placeholder="Masukkan BB (Kg)" value="{{$pen->beratbadan}}">
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-md-6 ">
                <!-- /.form-group -->
                <div class="form-group">
                  <label>IMP</label>
                  <select class="form-control select2" name="imp" style="width: 100%;">
                    @if($pen->imp)
                      <option value="{{$pen->imp}}" >{{$pen->imp}}</option>
                      <option value="" disabled="disabled">--Pilih Opsi--</option>
                      <option >Tidak</option>
                      <option >Ya</option>
                    @endif
                  </select>
                  <label class="mt-3">KIA</label>
                  <select class="form-control select2" name="kia" style="width: 100%;" >
                    @if($pen->imp)
                      <option value="{{$pen->kia}}" >{{$pen->kia}}</option>  
                      <option value="" disabled="disabled">--Pilih Opsi--</option>
                      <option>Tidak</option>
                      <option>Ya</option>
                    @endif
                  </select>
                  <label class="mt-3">Vitamin</label>
                  <select class="form-control select2" name="vitamin" style="width: 100%;" value="{{$pen->vitamin}}">
                  @if($pen->vitamin)
                    <option value="{{$pen->vitamin}}" >{{$pen->vitamin}}</option>
                    <option value="" disabled="disabled">--Pilih Opsi--</option>
                    <option>Vit A</option>
                    <option>Vit B</option>
                  @endif
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
              <button type="submit" class="btn btn-warning"><i class="fas fa-pen-alt"> Edit Data</i></button>
              <a href="{{ route ('penimbangan')}}" class="btn btn-info"><i class="fas fa-arrow-circle-left"> Kembali</i></a>
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