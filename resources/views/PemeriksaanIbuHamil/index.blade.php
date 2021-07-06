<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pemeriksaan Ibu Hamil</title>
    @include('Template.style')
</head>

<body>

    @include('Template.navbar')

    @include('Template.sidebar')
    <div class="content-wrapper">
        <div class="container-fluid">
            <div class="text-center">
                <h3>Data Pemeriksaan Ibu Hamil</h3>
            </div>

            <div class="container">
                <div class="mb-2">
                    <a href="{{route('pemeriksaanibuhamil.create')}}" class="btn btn-primary">Tambah Data <i
                            class="fas fa-plus-square"></i></a>
                </div>
                <table id="table-pemeriksaan-ibuhamil" class="table table-bordered table-striped">
                    <thead class="bg-dark">
                        <tr>
                            <th>No</th>
                            <th>Nama Ibu Hamil</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($pemeriksaan_ibu_hamil as $index => $pih)
                        <tr>
                            <td scope="row">{{ $index + 1}}</td>
                            <td>{{ $pih->ibuhamil->nama}}</td>
                            <td>
                                <form action="{{ 'pemeriksaanibuhamil.destroy', $pih->id }}" method="post">
                                    @csrf
                                    <input type="hidden" name="_method" value="DELETE">
                                    <a href="{{ route('pemeriksaanibuhamil.show', $pih->id) }}" class="btn btn-success">
                                        <i class="fas fa-info-circle"></i></a>
                                    <a href="{{ route('pemeriksaanibuhamil.edit', $pih->id) }}" class="btn btn-warning">
                                        <i class="fas fa-pen-alt"></i></a>
                                    <button type="submit"
                                        class="btn btn-danger"> <i class="fas fa-trash-alt"></i></button>
                                </form>
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
        $(document).ready(function () {
            $('#table-pemeriksaan-ibuhamil').DataTable({});
        });

    </script>
    @include('sweetalert::alert')


</body>

</html>
