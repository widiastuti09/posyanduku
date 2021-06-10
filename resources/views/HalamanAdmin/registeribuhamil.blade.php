<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Register Balita</title>
    @include('Template.style')
</head>
<body>

@include('Template.navbar')

@include('Template.sidebar')
<div class="content-wrapper">
  <div class="container-fluid">
    <div class="text-center">
      <h3>Data Registrasi Ibu Hamil</h3>
    </div>

    <div class="container">
      <div class="mb-2">
        <a href="{{route('addregisterhamil')}}" class="btn btn-primary">Tambah Data <i class="fas fa-plus-square"></i></a>
      </div>
      <table id="table-registrasi-ibuhamil" class="table table-bordered table-striped">
        <thead class="bg-dark">
          <tr>
            <th>No</th>
            <th>Nama Ibu Hamil</th>
            <th>Tanggal Lahir</th>
            <th>Nama Suami</th>
            <th>RT</th>
            <th>RW</th>
            <th>Aksi</th>
            

          </tr>
        </thead>
        <tbody>
        @foreach($ibuhamils as $index => $register)
          <tr>
            <td scope="row">{{ $index + 1}}</td>
            <td>{{ $register->nama}}</td>
            <td>{{date('d F Y', strtotime($register->tgllahir))}}</td>
            <td>{{$register->namasuami}}</td>
            <td>{{$register->rt}}</td>
            <td>{{$register->rw}}</td>
            <td>
                <a href="{{route('detailibuhamil', $register->id)}}" class="btn btn-success"> <i class="fas fa-info-circle"></i></a>
                <a href="{{route ('editregisterbumil', $register->id)}}"class="btn btn-warning"> <i class="fas fa-pen-alt"></i></a>
                <a href="{{route('deleteregisteribuhamil', $register->id)}}" class="btn btn-danger"> <i class="fas fa-trash-alt"></i></a>
            </td>
             
        @endforeach
            
          </tr>
        
        </tbody>


      </table>

    </div>
  </div>
  <br><br><br><br>
</div>

  

        
@include('Template.footer')
@include('Template.script')
<script>
   $(document).ready(function(){
    $('#table-registrasi-ibuhamil').DataTable({});
      });
</script>
@include('sweetalert::alert')

    
</body>
</html>