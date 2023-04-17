<?php 
?>

<?php
// Include config file
require_once "config.php";
$id = $_GET['id'];
function query($query){
    global $link;
    $result = mysqli_query($link, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;

    }
    return $rows;
}
$query = query("SELECT * FROM perpus WHERE id = '$id'")[0];




if(isset($_POST['kirim'])){
    $N =$_POST['nama'];
    $nama_peminjam =$_POST['nama_peminjam'];
    $buku = $_POST['buku'];
    $tgl_pinjam = $_POST['tgl_pinjam'];
    $tgl_kembali = $_POST['tgl_kembali'];
    if (!checkdate(date('m', strtotime($tgl_pinjam)), date('d', strtotime($tgl_pinjam)), date('Y', strtotime($tgl_pinjam)))) {
        echo "<script>alert('Format tanggal tidak valid!');
        document.location.href= 'create.php';</script>";
        exit;
    }
    $tgl_pinjam= date('d-m-Y', strtotime($tgl_pinjam));

    if (!checkdate(date('m', strtotime($tgl_kembali)), date('d', strtotime($tgl_kembali)), date('Y', strtotime($tgl_kembali)))) {
        echo "<script>alert('Format tanggal tidak valid!');
        document.location.href= 'create.php';</script>";
        exit;
    }

    $tgl_kembali= date('d-m-Y', strtotime($tgl_kembali));

    if (strtotime($tgl_kembali) < strtotime($tgl_pinjam)) {
        echo "<script>alert('Tanggal kembali tidak boleh sebelum tanggal pinjam!');
        document.location.href= 'create.php';</script>";
        exit;
    }
    
  
    $insert= mysqli_query($link, "UPDATE perpus SET
                                   
                                    nama = '$N',
                                    nama_peminjam = '$nama_peminjam',
                                    buku = '$buku' ,
                                    tgl_pinjam = '$tgl_pinjam',
                                    tgl_kembali = '$tgl_kembali' 
                                       WHERE id = '$id'");
    
    if($insert){
        echo"<script> alert('berhasil');
                        document.location.href= 'tampil.php'; </script>";
    }
}
 


?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Perbarui Data</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <link rel="shortcut icon" type="image/png" href="http://localhost/toko/myweb/logo.png">

    <style type="text/css">
        .wrapper{
            width: 500px;
            margin: 0 auto;
            margin-top: 10%;
            padding: 3%;
            /* color:white; */
        }
    </style>
</head>
<body style=" background-size:cover;">
    <div class="wrapper" style="background-color:white;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h2>Perbarui data</h2>
                    </div>
                    <ol class="breadcrumb">
                  
                    <li class="active">Silahkan isi data dengan data yang valid !!!</li>
                </ol>    <form action="<?php echo htmlspecialchars(basename($_SERVER['REQUEST_URI'])); ?>" method="post" enctype="multipart/form-data">
                        
                        <div class="form-group <?php echo (!empty($nama_err)) ? 'has-error' : ''; ?>">
                            <label>Nama petugas</label>
                            <input type="text" name="nama" class="form-control" value="<?php echo $query['nama']; ?>">
                        </div>

                        <div class="form-group <?php echo (!empty($nama_err)) ? 'has-error' : ''; ?>">
                            <label>Nama peminjam</label>
                            <input type="text" name="nama_peminjam" class="form-control" value="<?php echo $query['nama_peminjam']; ?>">
                        </div>

                        <div>
                            <label for="">Buku</label>
                            <select name="buku" id="" class="form-control"> 
                                <option value="b.indonesia" <?= ($query['buku'] == 'islam')? 'selected="selected"': ''?>>b.indonesia</option>
                                <option value="b.jawa"<?= ($query['buku'] == 'kristen')? 'selected="selected"': ''?>>b.jawa</option>
                                <option value="b.inggris"<?= ($query['buku'] == 'katolik')? 'selected="selected"': ''?>>b.inggris</option>
                                <option value="kimia"<?= ($query['buku'] == 'kimia')? 'selected="selected"': ''?>>kimia</option>
                                <option value="fisika"<?= ($query['buku'] == 'fisika')? 'selected="selected"': ''?>>fisika</option>
                            </select>
                          </div>
                        <div class="form-group <?php echo (!empty($nama_err)) ? 'has-error' : ''; ?>">
                            <label>Tgl pinjam</label>
                            <input type="date" name="tgl_pinjam" class="form-control" value="<?php echo date('Y-m-d', strtotime($query['tgl_pinjam'])); ?>">
                        </div>

                        <div class="form-group <?php echo (!empty($nama_err)) ? 'has-error' : ''; ?>">
                            <label>Tgl kembali</label>
                            <input type="date" name="tgl_kembali" class="form-control" value="<?php echo date('Y-m-d', strtotime($query['tgl_kembali'])); ?>">
                        </div>
                        <div>
                       
                        <br><br>
                       
                        <input type="hidden" name="id" value="<?php echo $id; ?>"/>
                        <input type="submit" class="btn btn-primary" value="perbarui" name="kirim">
                        <a href="tampil.php" class="btn btn-danger">Cancel</a>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>