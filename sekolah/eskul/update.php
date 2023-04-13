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
$query = query("SELECT * FROM ekskul WHERE id = '$id'")[0];




if(isset($_POST['kirim'])){
    $N =$_POST['nama'];
    $kelas =$_POST['kelas'];
    $no_hp = $_POST['no_hp'];
    $ekstrakulikuler = $_POST['ekstrakulikuler'];
    
  
    $insert= mysqli_query($link, "UPDATE ekskul SET
                                   
                                    nama = '$N',
                                    kelas = '$kelas',
                                    no_hp = '$no_hp' ,
                                    ekstrakulikuler = '$ekstrakulikuler'
                                    
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
                            <label>Nama siswa</label>
                            <input type="text" name="nama" class="form-control" value="<?php echo $query['nama']; ?>">
                        </div>

                        <div class="form-group <?php echo (!empty($nama_err)) ? 'has-error' : ''; ?>">
                            <label>Kelas</label>
                            <input type="text" name="kelas" class="form-control" value="<?php echo $query['kelas']; ?>">
                        </div>

                        <div class="form-group <?php echo (!empty($nama_err)) ? 'has-error' : ''; ?>">
                            <label>No hp</label>
                            <input type="text" name="no_hp" class="form-control" value="<?php echo $query['no_hp']; ?>">
                        </div>

                        <div>
                            <label for="">Ekstrakulikuler</label>
                            <select name="ekstrakulikuler" id="" class="form-control"> 
                                <option value="voli" <?= ($query['ekstrakulikuler'] == 'voli')? 'selected="selected"': ''?>>voli</option>
                                <option value="basket"<?= ($query['ekstrakulikuler'] == 'basket')? 'selected="selected"': ''?>>basket</option>
                                <option value="futsal"<?= ($query['ekstrakulikuler'] == 'futsal')? 'selected="selected"': ''?>>futsal</option>
                                <option value="ping-pong"<?= ($query['ekstrakulikuler'] == 'ping-pong')? 'selected="selected"': ''?>>ping-pong</option>
                               
                            </select>
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