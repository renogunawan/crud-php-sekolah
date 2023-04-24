<!doctype html>
<html lang="en">


<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Guru</title>

    <link rel="canonical" href="index.html">



    <!-- Bootstrap core CSS -->
<link href="dist/css/bootstrap.min.css" rel="stylesheet" >

    <!-- Favicons -->
<link rel="apple-touch-icon" href="assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="assets/img/favicons/manifest.json">
<link rel="mask-icon" href="assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
<link rel="icon" href="assets/img/favicons/favicon.ico">
<meta name="theme-color" content="#7952b3">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>


    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">
  </head>
  <body>

<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="http://localhost/sekolah/dashboard.php">DASHBOARD</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <input class="form-control form-control-dark w-100" type="text" placeholder="" aria-label="Search">
  <div class="navbar-nav">
    <div class="nav-item text-nowrap">
      <a class="nav-link px-3" href="logout.php"></a>
    </div>
  </div>
</header>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
          <!-- <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">
              <span data-feather="home"></span>
              Dashboard
            </a>
          </li> -->
          <li class="nav-item">
            <a class="nav-link" href="http://localhost/sekolah/eskul/tampil.php">
              <span data-feather="file"></span>
              Estra kulikuler
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="http://localhost/sekolah/guru/tampil.php">
              <span data-feather="shopping-cart"></span>
              Tabel Guru
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="http://localhost/sekolah/matpel/tampil.php">
              <span data-feather="users"></span>
              Tabel Matpel
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="http://localhost/sekolah/perpus/tampil.php">
              <span data-feather="bar-chart-2"></span>
              Tabel Perpustakaan
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="http://localhost/sekolah/siswa/tampil.php">
              <span data-feather="layers"></span>
              Tabel Siswa
            </a>
          </li>
        </ul>
          </li>
        </ul>
      </div>
    </nav>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Selamat datang to sekolah</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
            <button type="button" class="btn btn-sm btn-outline-secondary"></button>
            <button type="button" class="btn btn-sm btn-outline-secondary"></button>
          </div>
          
          </button>
        </div>
      </div>


<?php 
 include_once("config.php");
    $query_mapel = mysqli_query($link, "SELECT * FROM matpel");
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tambah data</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <link rel="shortcut icon" type="image/png" href="http://localhost/toko/myweb/logo.png">
  <style type="text/css">
        .wrapper{
            width: 500px;
            margin: 0 auto;
            margin-top: 10%;
            padding: 3%;
        }
    </style>
</head>
<body>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-image:url(../gambar/welcome.jpg); background-size:cover;">  
<form action="proses.php" method="post" enctype="multipart/form-data">
       
  
      <div class="wrapper"  style="background-color:white;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h2>Tambahkan Data guru</h2>
                    </div>
                    <ol class="breadcrumb">
                  
                  <li class="active">Isi form dengan data yang valid !!!</li>
              </ol>  <form action="proses.php" method="post">
                        <div class="form-group">
                       
                            <label>Nama guru</label>
                            <input type="text" name="nama" id="nama" class="form-control" placeholder="nama guru"  required>
                        </div>
                        <div>
                        <label>jenis kelamin</label><br>
                            <input type="radio" name="jenis_kelamin" id="nama"  value="laki-laki"  required>laki-laki
                            <input type="radio" name="jenis_kelamin" id="nama"  value="perempuan"  required>perempuan
                        </div><br>
                        <div>
                            <label for="image">Select Image:</label><br>
                            <input type="file" name="image" id="image" required>
                        </div><br>
                        <div>
                        <label>mapel</label> <br>
                            <select name="mapel" id="">
                                <?php
                                if (mysqli_num_rows($query_mapel) > 0) {
                                    while($data = mysqli_fetch_assoc($query_mapel)) {
                                        ?>
                                        <option value="<?= $data['mapel'] ?>"><?= $data['mapel'] ?></option>
                                        <?php
                                    }
                                }
                                else {
                                    ?>
                                    <option value="tidak ada">Tidak ada mapel</option>
                                    <?php
                                }
                                ?>
                            </select>

                        </div>
                
                     
                        <div>
                        <br><br>
                        <input type="submit" class="btn btn-primary" value="Tambah data" name="kirim">
                        <a href="tampil.php" class="btn btn-danger">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
</body>
</html>

<script src="dist/js/bootstrap.bundle.min.js" ></script>

      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha"></script><script src="dashboard.js"></script>
  </body>


</html>