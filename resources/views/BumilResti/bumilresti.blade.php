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
      <h3>Data Ibu Hamil Resiko Tinggi</h3>
    </div>

    <div class="container">
      <div class="mb-2">
      @if (auth()->user()->level === 'admin') 
        <a href="{{route('addbumilresti')}}" class="btn btn-primary">Tambah Data <i class="fas fa-plus-square"></i></a>
        @endif
      </div>

      <table id="table-bumil-resti" class="table table-bordered table-striped">
        <thead class="bg-dark">
          <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Umur Hamil (MG)</th>
            <th>G/P/A</th>
            <th>Asuransi</th>
            <th>Resiko Tinggi</th>
            <th>Aksi</th>
            

          </tr>
        </thead>
        <tbody>
        @php
        $nomor=1;
        @endphp
        @foreach($bumilresti as $index => $resti)
        <tr>
            <td scope="row">{{$index + 1}}</td>
            <td>{{$resti->ibuhamil->nama}}</td>
            <td>{{$resti->umur_hamil}}</td>
            <td>{{$resti->gpa}}</td>
            <td>{{$resti->asuransi}}</td>
            <td>{{$resti->resiko_tinggi}}</td>
            <td>
                <a href="{{route('detailbumilresti',$resti->id)}}" class="btn btn-success"> <i class="fas fa-info-circle"></i></a>
                @if (auth()->user()->level === 'admin') 
                <a href="{{route('editbumilresti', $resti->id)}}" class="btn btn-warning"> <i class="fas fa-pen-alt"></i></a>
                <a href="{{route('hapusbumilresti',$resti->id)}}" class="btn btn-danger"> <i class="fas fa-trash-alt"></i></a>
                @endif
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
    $('#table-bumil-resti').DataTable({});
      });
</script>
@include('sweetalert::alert')
    
</body>
</html>