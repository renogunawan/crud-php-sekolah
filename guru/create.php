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