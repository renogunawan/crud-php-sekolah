<!doctype html>
<html lang="en">


<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Dashboard</title>

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
  <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
  <div class="navbar-nav">
    <div class="nav-item text-nowrap">
      <a class="nav-link px-3" href="logout.php">Logout</a>
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
          <!-- <li class="nav-item">
            <a class="nav-link" href="logout.php">
              <span data-feather="layers"></span>
            Logout
            </a>
          </li> -->
        </ul>

          </li>
        </ul>
      </div>
    </nav>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h6>Selamat datang to sekolah</h6>
        <!-- <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
             <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
            <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
          </div>
          <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
            <span data-feather="calendar"></span>
            This week
          </button>
        </div> -->
      </div>



      <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>

      


        </table>
      </div>
    </main>
  </div>
</div>


    <script src="dist/js/bootstrap.bundle.min.js" ></script>

      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha"></script><script src="dashboard.js"></script>
  </body>


</html>
