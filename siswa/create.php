<?php 
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

        
        <title>siswa</title>
    </head>
    <body style="background-image:url(../gambar/welcome.jpg); background-size:cover;">
        <form action="proses.php" method="post" enctype="multipart/form-data">
        
    
        <div class="wrapper"  style="background-color:white;">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="page-header">
                            <h2>Tambahkan Data Siswa</h2>
                        </div>
                    
                    
                    <ol class="breadcrumb">
                    
                        <li class="active">Isi form dengan data yang valid !!!</li>
                    </ol>
                    
                    
                        <form action="proses.php" method="post">
                            <div class="form-group">
                                <label>Nama siswa</label>
                                <input type="text" name="nama" id="nama" class="form-control" required>
                            </div>
        
                            <label>Nisn</label>
                                <input type="name" name="nisn" id="nama" class="form-control" required>
                            </div>
                            <label>Jenis kelamin</label><br>
                                <input type="radio" name="jenis_kelamin" id="nama"  value="laki-laki">laki-laki
                                <input type="radio" name="jenis_kelamin" id="nama"  value="perempuan">perempuan
                            </div>
                            <div>
                                <label for="">Agama</label>
                                <select name="agama" id="kelas" required class="form-control"> 
                                    <option value=""></option>
                                    <option value="islam">islam</option>
                                    <option value="kristen">kristen</option>
                                    <option value="katolik">katolik</option>
                                    <option value="hindu">hindu</option>
                                    <option value="budha">budha</option>
                                </select>
                            </div>
                            <div>
                            
                        
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