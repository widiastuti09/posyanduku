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
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="">Data Penimbangan Balita</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->  
    </div>
    <div class="ml-2 mb-2">
        <a href="{{route('addpenimbangan')}}" class="btn btn-success"><i class="fas fa-plus-square"></i></a>
    </div>
    <div class="container">
        <table class="table table-hover">
        <thead class="bg-dark">
            <tr>
            <th>No</th>
            <th>Nama Anak</th>
            <th>Tanggal</th>
            <th>BB(Kg)</th>
            <th>IMP</th>
            <th>KIA</th>
            <th>Vitamin</th>
            <th>Action</th>
            </tr>
        </thead>
        <tbody>
          @php
            $nomor=1;
          @endphp
          @foreach ($penimbangans as $penimbangan)
            <tr>
            <th scope="row">{{$nomor++}}</th>
            <td>{{$penimbangan -> nama}}</td>
            <td>{{date('d-m-y', strtotime($penimbangan->tanggal)) }}</td>
            <td>{{ $penimbangan->beratbadan}}</td>
            <td>{{ $penimbangan->imp }}</td>
            <td>{{ $penimbangan->kia }}</td>
            <td>{{ $penimbangan->vitamin }}</td>
            <td> 
            <a href="{{route('editpenimbangan',$penimbangan->id) }}" class="btn btn-warning"><i class="fas fa-pen-alt"></i></a>

            <a href="{{route('deletepenimbangan', $penimbangan->id) }}" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a> 
            </td>
            </tr>
          @endforeach
        
        </tbody>
        </table>
        
    </div>
    <div class="container">
      <div class="card-footer">
          {{ $penimbangans->Links()}}
        </div>
    </div>
    

</div>



@include('Template.footer')
@include('Template.script')
@include('sweetalert::alert')

    
</body>
</html>