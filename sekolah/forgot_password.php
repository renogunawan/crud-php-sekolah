<?php
session_start();
include('config.php');

if($_SERVER["REQUEST_METHOD"] == "POST") {
  $nama = $_POST["nama"];
  $query = "SELECT * FROM register WHERE nama='$nama'";
  $result = mysqli_query($link, $query);

        if(mysqli_num_rows($result) == 1) {
                $new_password = $_POST['new_password'];
                $confirm_password = $_POST['confirm_password'];
                        if($new_password == $confirm_password) {
                        $hashed_password = password_hash($new_password, PASSWORD_DEFAULT);
                    $query = "UPDATE register SET password='$hashed_password' WHERE nama='$nama'";
                    mysqli_query($link, $query);
                    $_SESSION['success'] = 'Password berhasil direset!';
                    header('Location: index.php');
            exit();
    } else {
      $_SESSION['error'] = '<script>alert("Password baru tidak cocok dengan konfirmasi password")</script>';
    }
  } else {
    $_SESSION['error'] = '<script>alert("username tidak di temukan")</script>';
  }
}
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<style>
body{ background-image: url("bg-01.jpg");
  background-size: cover;
}
.input-container {
 display: -ms-flexbox; /* IE10 */
  display: flex;
  width: 100%;
  margin-bottom: 15px;
}

.icon {
  padding: 10px;
  background: dodgerblue;
  color: white;
  min-width: 50px;
  text-align: center;
}

.input-field {
  width: 100%;
  padding: 10px;
  outline: none;
  border-radius: 5px;
  background-color: #f2f2f2;
}

.input-field:focus {
  border: 2px solid dodgerblue;
  background-color: white;
}

/* Set a style for the submit button */
.btn {
  background-color: dodgerblue;
  color: white;
  padding: 15px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.btn:hover {
  opacity: 1;
}
</style>
</head>
<body>
<button class="btn-primary"><a href="index.php" > <i class="fa fa-home"></i>  back</a></button>
<?php if(isset($_SESSION['error'])) { ?>
    <div><?php echo $_SESSION['error']; ?></div>
    <?php unset($_SESSION['error']); ?>
  <?php } ?>
<form action="" method="post" style="max-width:500px;margin:auto"><br><br><br><br> <br>
 <center> <h2 class="sans-serif">Reset Password</h2></center> <br><br><br><br><br>
  <div class="input-container">
    <i class="fa fa-user icon"></i>
    <input class="input-field" type="text" placeholder="Username" name="nama">
  </div>

  <div class="input-container">
    <i class="fa fa-key icon"></i>
    <input class="input-field" type="password" placeholder="Password baru" name="new_password">
  </div>

  <div class="input-container">
    <i class="fa fa-key icon"></i>
    <input class="input-field" type="password" placeholder="konfirmasi password baru" name="confirm_password">
</div>

  <button type="submit" class="btn" name="submit"> <i class="fa fa-plus"> </i> &nbsp; Resset password</button>
  
</form>
</body>
</html>