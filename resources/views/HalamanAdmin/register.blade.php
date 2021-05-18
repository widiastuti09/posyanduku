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
      <h3>Data Registrasi Balita</h3>
    </div>

    <div class="container">
      <div class="mb-2">
        <a href="#" class="btn btn-primary">Tambah Data <i class="fas fa-plus-square"></i></a>
      </div>
      <table id="table-registrasi-balita" class="table table-bordered table-striped">
        <thead class="bg-dark">
          <tr>
            <th>No</th>
            <th>Nama Anak</th>
            <th>Tempat Lahir</th>
            <th>Tanggal Lahir</th>
            <th>Jenis Kelamin</th>
            <th>Nama Ayah</th>
            <th>Nama Ibu</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th></th>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td>
              <a href="#" class="btn btn-success"> <i class="fas fa-info-circle"></i></a>
              <a href="#" class="btn btn-warning"> <i class="fas fa-pen-alt"></i></a>
              <a href="#" class="btn btn-danger"> <i class="fas fa-trash-alt"></i></a>
              

            </td>
          </tr>
        </tbody>


      </table>

    </div>
  </div>
</div>
  

        
@include('Template.footer')
@include('Template.script')
<script>
   $(document).ready(function(){
        $('#table-registrasi-balita').DataTable({});
      })
</script>
    
</body>
</html>