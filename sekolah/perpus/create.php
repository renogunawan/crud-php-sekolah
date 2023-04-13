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

        
        <title>siswa</title>
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
                                <label>Nama petugas</label>
                                <input type="text" name="nama" id="nama" class="form-control" required>
                            </div>
        
                            <label>Nama peminjam</label>
                                <input type="text" name="nama_peminjam" id="nama" class="form-control" required>
                                <div>

                                <label for="">Buku</label>
                                <select name="buku" id="buku" required class="form-control"> 
                                    <option value="b.indonesia">b.indonesia</option>
                                    <option value="b.jawa">b.jawa</option>
                                    <option value="b.inggris">b.inggris</option>
                                    <option value="kimia">kimia</option>
                                    <option value="fisika">fisika</option>
                            </select>
                            <div>

                            <label>Tanggal pinjam</label>
                                <input type="date" name="tgl_pinjam" id="nama" class="form-control" required>
                                <div>

                                <label>Tanggal kembali</label>
                                <input type="date" name="tgl_kembali" id="nama" class="form-control" required>
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