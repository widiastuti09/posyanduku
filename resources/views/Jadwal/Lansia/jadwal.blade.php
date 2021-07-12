<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @include('Template.style')
</head>
<body>
@include('Template.navbar')

@include('Template.sidebar')
<div class="content-wrapper">
  <div class="container-fluid">
    <div class="text-center">
      <h3>Jadwal Pemeriksaan Lansia</h3>
    </div>

    <div class="container">
      <div class="mb-2">
        <a href="{{route('addjadwallansia')}}" class="btn btn-primary">Tambah Data <i class="fas fa-plus-square"></i></a>
      </div>
      <table id="table-registrasi-jadwal" class="table table-bordered table-striped">
        <thead class="bg-dark">
          <tr>
            <th>No</th>
            <th>Tanggal </th>
            <th>waktu</th>
            <th>Keterangan</th>
            <th>Status</th>
            <th>Aksi</th>
            

          </tr>
        </thead>
        <tbody>
        @foreach ($jadlan as $index => $jadwal)
        <tr>
            <td scope="row">{{$index + 1}}</td>
            <td>{{date('d F Y', strtotime($jadwal->tanggal))}}</td>
            <td>{{$jadwal ->waktu}} WIB</td>
            <td>{{$jadwal->keterangan}}</td>
            <td>{{$jadwal->status}}</td>
            <td>
                <a href="{{route('detailjadwallansia', $jadwal->id)}}" class="btn btn-success"> <i class="fas fa-info-circle"></i></a>
                <a href="{{route('editjadwallansia',$jadwal->id)}}"class="btn btn-warning"> <i class="fas fa-pen-alt"></i></a>
                <a href="{{route('hapusjadwallansia', $jadwal->id)}}" class="btn btn-danger"> <i class="fas fa-trash-alt"></i></a>

            </td>
        </tr>
        @endforeach
        
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
    $('#table-registrasi-jadwal').DataTable({});
      });
</script>
@include('sweetalert::alert')
    
</body>
</html>