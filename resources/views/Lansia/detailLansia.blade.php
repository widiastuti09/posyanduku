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
                <h1>Detail Data Lansia</h1>
            </div>
            
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- SELECT2 EXAMPLE -->
        <div class="card card-default">
          <div class="card-header bg-primary ">
            <div class="card-title text-center">Form Detail Data</div>

            <div class="card-tools">
              
             
            </div>
          </div>
          <!-- /.card-header -->
          <form action="#" method="get">
          {{ csrf_field() }}
          
          <table class="table table-bordered">
          <thead>
    <tr class="bg-secondary">
      <th  class="text-center">Data</th>
      <th  class="text-center">Keterangan</th>
 
    </tr>
  </thead>
  
  <tbody>
    <tr>
        <th class="font-weight-bold">Tanggal Register</th>
        <td scope="row"  class="font-weight-normal">{{$lansias->tanggal_register}}</td>
      
    
    </tr>
    <tr>
    <th class="font-weight-bold">Nama Lansia</th>
      <td scope="row" class="font-weight-normal">{{$lansias->nama}}</td>
    
    </tr>
    <tr>
    <th class="font-weight-bold">Tanggal Lahir</th>
      <td scope="row" class="font-weight-normal">{{$lansias->tanggal_lahir}}</td>
      
    
    </tr>
    <th class="font-weight-bold">jenis kelamin</th>
      <td scope="row" class="font-weight-normal">{{$lansias->jenis_kelamin}}</td>
      
    
    </tr>
    <th class="font-weight-bold">RT</th>
      <td scope="row" class="font-weight-normal">{{$lansias->rt}}</td>
      
    
    </tr>
    <tr>
    <th class="font-weight-bold">RW</th>
      <td scope="row" class="font-weight-normal">{{$lansias->rw}}</td>
      

    </tr>
    <tr>
    <th class="font-weight-bold">Berat Badan</th>
      <td scope="row" class="font-weight-normal">{{$lansias->berat_badan}}</td>
    
     
    </tr>
    <th class="font-weight-bold">Tinggi Badan</th>
      <td scope="row" class="font-weight-normal">{{$lansias->tinggi_badan}}</td>
    
     
    </tr>
    <tr>
    <th class="font-weight-bold">Lingkar Pinggang</th>
      <td scope="row" class="font-weight-normal">{{$lansias->lingkar_pinggang}}</td>
     
   
    </tr>
    <tr>
    <th class="font-weight-bold">Tekanan Darah</th>
      <td scope="row" class="font-weight-normal">{{$lansias->tekanan_darah}}</td>
     
   
    </tr>
    <tr>
    <th class="font-weight-bold">Glukosa Darah</th>
      <td scope="row" class="font-weight-normal">{{$lansias->glukosa_darah}}</td>
      

    </tr>
    <tr>
    <th class="font-weight-bold">Lemak Tubuh</th>
      <td scope="row" class="font-weight-normal">{{$lansias->lemak_tubuh}}</td>
      
    
    </tr>
    <tr>
    <th class="font-weight-bold">Lemak Perut</th>
      <td scope="row" class="font-weight-normal">{{$lansias->lemak_perut}}</td>
      
      
    </tr>
    <tr>
    <th class="font-weight-bold">IMT</th>
      <td scope="row" class="font-weight-normal">{{$lansias->imt}}</td>
      
     
    </tr>
    <tr>
    <th class="font-weight-bold">Kolestrol</th>
      <td scope="row" class="font-weight-normal">{{$lansias->kolestrol}}</td>
      
    
    </tr>
    <tr>
    <th class="font-weight-bold">Glukosa Darah</th>
      <td scope="row" class="font-weight-normal">{{$lansias->glukosa_darah}}</td>
      
 
    </tr>
    <tr>
    <th class="font-weight-bold">Kolestrol</th>
      <td  class="font-weight-normal">{{$lansias->kolestrol}}</td>
      
    
    </tr>
    <tr>
    <th class="font-weight-bold">Asam Urat</th>
      <td  class="font-weight-normal">{{$lansias->asam_urat}}</td>
      
    
    </tr>
    <th class="font-weight-bold">Makan Berlemak</th>
      <td scope="row" class="font-weight-normal">{{$lansias->makan_berlemak}}</td>
      
    
    </tr>
    <th class="font-weight-bold">Makan Manis</th>
      <td scope="row" class="font-weight-normal">{{$lansias->makan_manis}}</td>
      
    
    </tr>
    <th class="font-weight-bold">Makan/Minum Zat Adiktif</th>
      <td scope="row" class="font-weight-normal">{{$lansias->zat_adiktif}}</td>
      
    
    </tr>
    <th class="font-weight-bold">Penggunaan Jelantah</th>
      <td scope="row" class="font-weight-normal">{{$lansias->jelantah}}</td>
      
    
    </tr>
    <th class="font-weight-bold">Merokok</th>
      <td scope="row" class="font-weight-normal">{{$lansias->merokok}}</td>
      
    
    </tr>
    <th class="font-weight-bold">Olahraga</th>
      <td scope="row" class="font-weight-normal">{{$lansias->olahraga}}</td>
      
    
    </tr>
    <th class="font-weight-bold">Keterangan</th>
      <td scope="row" class="font-weight-normal">{{$lansias->keterangan}}</td>
      
    
    </tr>
  </tbody>
</table>

           
            <div class="row">
          
              <!-- /.col -->
              <div class="col-12 col-sm-6 mb-3 ml-2">
              <a href="{{route ('edit-lansia', $lansias->id)}}" class="btn btn-warning"><i class="fas fa-pen-alt"> Edit Data</i></a>
              <a href="{{route ('registerlansia')}}" class="btn btn-info"><i class="fas fa-arrow-circle-left"> Kembali</i></a>
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
    
</body>
</html>