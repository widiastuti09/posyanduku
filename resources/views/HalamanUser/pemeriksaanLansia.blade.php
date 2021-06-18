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
        <div class="container-fluid ">
            <!-- Content Header (Page header) -->
            <div class="text-xl-center">
            <h3 >Data Pemeriksaan Lansia</h3>
               
            </div>
            

            
            <div class="container">
                <div class="mb-2">
                <a href="{{route('addpemeriksaanlansia')}}" class="btn btn-success "> Tambah Data <i
                            class="fas fa-plus-square"></i></a>
                </div>
                <table id="table-pemeriksaan" class="table table-bordered table-striped">
                    <thead class="bg-dark">
                        <tr>
                            <th>No</th>
                            <th>Nama Lansia</th>
                            <th>Tanggal Periksa</th>
                            <th>Berat Badan(Kg)</th>
                            <th>Tinggi Badan</th>
                            <th>Tekanan Darah</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                    @php 
                    $nomor=1;
                    @endphp
                    @foreach ($pemeriksaanlansias as $index =>$pemeriksaanlansia)

                      
                        <tr>
                            
                            <th scope="row">{{ $index + 1}}</th>
                            <td>{{$pemeriksaanlansia->lansias['nama']}}</td>
                            <td>{{date('d F Y', strtotime($pemeriksaanlansia->tanggal_periksa))}}</td>
                            <td>{{$pemeriksaanlansia->berat_badan}}</td>
                            <td>{{$pemeriksaanlansia->tinggi_badan}}</td>
                            <td>{{$pemeriksaanlansia->tekanan_darah}}</td>
                            
                            <td>
                           
                                <a href="{{route ('detailpemeriksaanlansia', $pemeriksaanlansia->id)}}" class="btn btn-success"><i
                                        class="fas fa-info-circle"></i></a>
                                <a href="{{route('editpemeriksaanlansia', $pemeriksaanlansia->id)}}" class="btn btn-warning"><i
                                        class="fas fa-pen-alt"></i></a>
                                <a href="{{route ('deletepemeriksaanlansia', $pemeriksaanlansia->id)}}" class="btn btn-danger"><i
                                        class="fas fa-trash-alt"></i></a>
                            </td>
                            
                        </tr>
                    @endforeach 

                    </tbody>
                </table>
                <br><br><br><br><br>

            </div>


        </div>
    </div>



    @include('Template.footer')
    @include('Template.script')
    <script>
      $(document).ready(function(){
        $('#table-pemeriksaan').DataTable({});
      })
    </script>
    @include('sweetalert::alert')



</body>

</html>
