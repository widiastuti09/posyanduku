<!DOCTYPE html>
<html>

<head>
  <style>
    * {
      font-size: 15px
    }

    @page {
      size: Letter landscape
    }

    #cetak {
      font-family: Arial, Helvetica, sans-serif;
      border-collapse: collapse;
      width: 100%;
    }

    #cetak td,
    #cetak th {
      border: 1px solid black;
      padding: 8px;
    }

    #cetak th {
      padding-top: 12px;
      padding-bottom: 12px;
      text-align: left;
      /* background-color: #303030; */
      /* color: white; */
    }
  </style>
</head>

<body>
  <h1 style="font-size: 20;" align="center"> DATA LAPORAN IBU HAMIL</h1>
  <h1 style="font-size: 16;" align="center">POSYANDU TEMBOK KIDUL</h1>
  <div align="center">Alamat: Desa Tembok Kidul, Kecamatan Adiwerna Kab. Tegal Jawa Tengah</div>
  <br>
  <hr>
  <br>
  <br>
  <table id="cetak">
    <thead>
      <tr>
        <th>No</th>
        <th>Nama Bumil</th>
        <th>TB</th>
        <th>HB</th>
        <th>HTP</th>
        <th>HPHT</th>
        <th>BB(Kg)</th>
        <th>Hamil Ke</th>
        <th>Persalinan</th>
        <th>Keguguran</th>
      </tr>
    </thead>
    @php
    $nomor=1;
    @endphp

    @foreach ($pemeriksaan_ibu_hamil as $bumil)
    <tr>
      <td scope="row">{{$nomor++}} </td>
      <td>{{$bumil->ibuhamil->nama}}</td>
      <td>{{$bumil->tinggibadan}}</td>
      <td>{{$bumil->hemoglobin_atas}} / {{$bumil->hemoglobin_bawah}}</td>
      <td>{{$bumil->htp}}</td>
      <td>{{$bumil->hpht}}</td>
      <td>{{$bumil->beratbadan}}</td>
      <td>{{$bumil->hamilke}}</td>
      <td>{{$bumil->persalinanke}}</td>
      <td>{{$bumil->keguguranke}}</td>
    </tr>



    @endforeach
  </table>

</body>

</html>