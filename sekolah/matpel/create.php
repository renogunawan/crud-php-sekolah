<?php 
?>


    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Tambah data</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
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

        
        <title>mapel</title>
    </head>
    <body style="background-image:url(../gambar/welcome.jpg); background-size:cover;">
        <form action="proses.php" method="post" enctype="multipart/form-data">
        
    
        <div class="wrapper"  style="background-color:white;">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="page-header">
                            <h2>Tambahkan Data </h2>
                        </div>
                    
                    
                    <ol class="breadcrumb">
                    
                        <li class="active">Isi form dengan data yang valid !!!</li>
                    </ol>
                    
                    
                        <form action="proses.php" method="post">
                            <div class="form-group">
                                <label>Kode buku</label>
                                <input type="text" name="kode_buku" id="nama" class="form-control" required>
                            </div>
        
                            <label>Mapel</label>
                                <input type="text" name="mapel" id="nama" class="form-control" required>
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