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
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Data Registrasi Balita</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->  
    </div>
    <!-- /.content-header -->

    <div class="container table-responsive text-nowrap">
        <!--Table-->
        <table class="table table-striped">
          <!--Table head-->
          <thead>
            <tr>
                    <th>No</th>
                    <th>Nama Anak</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>
                    <th>Jenis Kelamin</th>
                    <th>BB Lahir</th>
                    <th>PB Lahir</th>
                    <th>KIA</th>
                    <th>IMD</th>
                    <th>Nama Ortu</th>
                    <th>No KK</th>
                    <th>No NIK Ortu</th>
                    <th>No NIK Anak</th>
                    <th>No Telp</th>
                    <th>No RT</th>
                    <th>No RW</th>
            </tr>
          </thead>
          <!--Table head-->

          <!--Table body-->
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>Kate</td>
              <td>Moss</td>
              <td>USA / The United Kingdom / China / Russia </td>
              <td>New York City / Warsaw / Lodz / Amsterdam / London / Chicago</td>
              <td>Web Designer /UX designer / Ul designer / JavaScript Developer</td>
              <td>23</td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>Anna</td>
              <td>Wintour</td>
              <td>USA / The United Kingdom / China / Russia </td>
              <td>New York City / Warsaw / Lodz / Amsterdam / London / Chicago</td>
              <td>Web Designer /UX designer / Ul designer / JavaScript Developer</td>
              <td>36</td>
            </tr>
            <tr>
              <th scope="row">3</th>
              <td>Tom</td>
              <td>Bond</td>
              <td>USA / The United Kingdom / China / Russia </td>
              <td>New York City / Warsaw / Lodz / Amsterdam / London / Chicago</td>
              <td>Web Designer /UX designer / Ul designer / JavaScript Developer</td>
              <td>25</td>
            </tr>
            <tr>
              <th scope="row">4</th>
              <td>Jerry</td>
              <td>Horwitz</td>
              <td>USA / The United Kingdom / China / Russia </td>
              <td>New York City / Warsaw / Lodz / Amsterdam / London / Chicago</td>
              <td>Web Designer /UX designer / Ul designer / JavaScript Developer</td>
              <td>41</td>
            </tr>
            <tr>
              <th scope="row">5</th>
              <td>Janis</td>
              <td>Joplin</td>
              <td>USA / The United Kingdom / China / Russia </td>
              <td>New York City / Warsaw / Lodz / Amsterdam / London / Chicago</td>
              <td>Web Designer /UX designer / Ul designer / JavaScript Developer</td>
              <td>39</td>
            </tr>
            <tr>
              <th scope="row">6</th>
              <td>Gary</td>
              <td>Winogrand</td>
              <td>USA / The United Kingdom / China / Russia </td>
              <td>New York City / Warsaw / Lodz / Amsterdam / London / Chicago</td>
              <td>Web Designer /UX designer / Ul designer / JavaScript Developer</td>
              <td>37</td>
            </tr>
            <tr>
              <th scope="row">7</th>
              <td>Angie</td>
              <td>Smith</td>
              <td>USA / The United Kingdom / China / Russia </td>
              <td>New York City / Warsaw / Lodz / Amsterdam / London / Chicago</td>
              <td>Web Designer /UX designer / Ul designer / JavaScript Developer</td>
              <td>52</td>
            </tr>
            <tr>
              <th scope="row">8</th>
              <td>John</td>
              <td>Mattis</td>
              <td>USA / The United Kingdom / China / Russia </td>
              <td>New York City / Warsaw / Lodz / Amsterdam / London / Chicago</td>
              <td>Web Designer /UX designer / Ul designer / JavaScript Developer</td>
              <td>28</td>
            </tr>
            <tr>
              <th scope="row">9</th>
              <td>Otto</td>
              <td>Morris</td>
              <td>USA / The United Kingdom / China / Russia </td>
              <td>New York City / Warsaw / Lodz / Amsterdam / London / Chicago</td>
              <td>Web Designer /UX designer / Ul designer / JavaScript Developer</td>
              <td>35</td>
            </tr>
          </tbody>
          <!--Table body-->


        </table>
        <!--Table-->
      </div>
</section>
<!--Section: Live preview-->
    </div>


@include('Template.footer')
@include('Template.script')
    
</body>
</html>