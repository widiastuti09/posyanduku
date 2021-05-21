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
            <h3 class="card-title">Add Data</h3>

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
                  <label>Nama Balita</label>
                  <select name="namabalita_id"  id="namabalita_id" class="form-control select2bs4 @error('namabalita_id') is-invalid @enderror" style="width: 100%;">
                    <option value="">Pilih Nama</option>
                    @foreach($regbal as $penimbangan)
                      <option @if(old("namabalita_id") == $penimbangan->id) selected @endif value="{{$penimbangan->id}}">{{$penimbangan->namabalita}}</option>
                    @endforeach
                  </select>
                  @error('namabalita_id')
                    <span class="invalid-feedback">{{$message}}</span>
                  @enderror
                </div>
                <div class="form-group ">
                    <label>Tanggal</label>
                    <input type="date" class="form-control @error('tanggal') is-invalid @enderror "  id="tanggal" name="tanggal" value="{{old('tanggal')}}">
                      @error('tanggal')
                      <div class="invalid-feedback">{{$message}}</div>
                      @enderror    
                </div>
                <div class="form-group">
                    <label>Berat Badan</label>
                    <input type="text" class="form-control @error('beratbadan') is-invalid @enderror" id="beratbadan" name="beratbadan" placeholder="Masukkan BB (Kg)" value="{{ old ('beratbadan')}}">
                    @error('beratbadan')
                    <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                  </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-md-6 ">
                <!-- /.form-group -->
                <div class="form-group">
                  <label>IMP</label>
                  <select class="form-control select2bs4 @error('imp') is-invalid @enderror" name="imp" style="width: 100%;" >
                    <option value="">Pilih IMP</option>
                    <option @if(old('imp') === 'Tidak') selected @endif>Tidak</option>
                    <option @if(old('imp') === 'Ya') selected @endif>Ya</option>
                  </select>
                  @error('imp')
                    <div class="invalid-feedback">{{$message}}</div>
                  @enderror
                </div>
                
                <div class="form-group">
                  <label class="mt-3">KIA</label>
                  <select class="form-control select2bs4 @error('kia') is-invalid @enderror" name="kia" style="width: 100%;"  >
                  <option selected="selected" disabled="disabled">Pilih KIA</option>
                    <option @if(old('kia') === 'Tidak') selected @endif>Tidak</option>
                    <option @if(old('kia') === 'Ya') selected @endif>Ya</option>
                  </select>
                  @error('kia')
                    <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                    </div>
                <div class="form-group">
                  <label class="mt-3">Vitamin</label>
                  <select class="form-control select2bs4 @error('vitamin') is-invalid @enderror" name="vitamin" style="width: 100%;" value="{{old('vitamin')}}">
                    <option selected="selected" disabled="disabled">Pilih Vitamin</option>
                    <option @if(old('vitamin') === 'Vit A') selected @endif>Vit A</option>
                    <option @if(old('vitamin') === 'Vit B') selected @endif>Vit B</option>
                  </select>
                  @error('vitamin')
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

<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })
  })


</script>
    
</body>
</html>