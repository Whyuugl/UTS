
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>UKK Poliwangi</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- IonIcons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <a href="/pasien" class="nav-link">Home</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
    </ul>
  </nav>
  <!-- /.navbar -->
  
  <div class="container">
    <div class="row">
        <div class="card">
            <div class="card-body">
                <form action="/updatepasien/{{ $data->id }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Nama</label>
                      <input type="text" name="nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $data->nama }}">
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">NIM/NIP/NIK</label>
                      <input type="text" name="nim" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $data->nim }}">
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">No RM</label>
                      <input type="text" name="norm" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $data->norm }}">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Keluhan</label>
                        <input type="text" name="keluhan" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $data->keluhan }}">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Diagnosa</label>
                        <input type="text" name="diagnosa" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $data->diagnosa }}">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Tindakan</label>
                        <input type="text" name="tindakan" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $data->tindakan }}">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Terapi</label>
                        <input type="text" name="terapi" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $data->terapi }}">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Status</label>
                        <select class="form-select" name="status" aria-label="Default select example">
                            <option selected>{{ $data->status }}</option>
                            <option value="selesai">Selesai</option>
                            <option value="belum selesai">Belum Selesai</option>
                          </select>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">HB - GD</label>
                        <div class="input-group">
                            <span class="input-group-text">HB - GD</span>
                            <input type="text" name="hb" aria-label="HB" class="form-control" value="{{ $data->hb }}">
                            <input type="text" name="gd" aria-label="GD" class="form-control" value="{{ $data->gd }}">
                          </div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">AU - CO</label>
                        <div class="input-group">
                            <span class="input-group-text">AU - CO</span>
                            <input type="text" name="au" aria-label="AU" class="form-control" value="{{ $data->au }}">
                            <input type="text" name="co" aria-label="CO" class="form-control" value="{{ $data->co }}">
                          </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
            </div>
        </div>
    </div>
  </div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE -->
<script src="dist/js/adminlte.js"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard3.js"></script>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
