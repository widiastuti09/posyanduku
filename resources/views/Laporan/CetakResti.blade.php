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

    /* #cetak tr:nth-child(even) {
      background-color: #f2f2f2;
    }

    #cetak tr:hover {
      background-color: #ddd;
    } */

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
  <h1 style="font-size: 20;" align="center"> DATA LAPORAN IBU HAMIL RESIKO TINGGI</h1>
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
        <th>Nama</th>
        <th>Umur Hamil (MG)</th>
        <th>G/P/A</th>
        <th>Asuransi</th>
        <th>Resiko Tinggi</th>
        <th>HPL</th>
        <th>Wali Bumil</th>


      </tr>
    </thead>
    @php
    $nomor=1;
    @endphp

    @foreach ($bumilresti as $resti)
    <tr>
      <td scope="row">{{$nomor ++}}</td>
      <td>{{$resti->ibuhamil->nama}}</td>
      <td>{{$resti->umur_hamil}}</td>
      <td>{{$resti->gpa}}</td>
      <td>{{$resti->asuransi}}</td>
      <td>{{$resti->resiko_tinggi}}</td>
      <td>{{$resti->hpl}}</td>
      <td>{{$resti->wali_bumil}}</td>

    </tr>



    @endforeach
  </table>

</body>

</html>