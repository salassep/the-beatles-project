<?php 
$status = file_get_contents('./data/status.json');
$status = json_decode($status, TRUE);
if ($status['status'] == 'in') {
  return header('Location: '.$status['path']);
} else {
  $json = file_get_contents('./data/users.json');
  $json_data = json_decode($json, TRUE);
  if(isset($_POST['username']) && isset($_POST['password'])) {
    for($i=0; $i < count($json_data); $i++) {
      if($json_data[$i]['username'] == $_POST['username']) {
        if($json_data[$i]['password'] == $_POST['password']) {
          $status['status'] = 'in';
          $status['path'] = "favorit.php?username=".$_POST['username'];
          $newStatus = json_encode($status, JSON_PRETTY_PRINT);
          file_put_contents('./data/status.json', $newStatus);
          return header('Location: '.$status['path']);
        } 
      }
    }
    echo "<script>alert('username atau password salah!')</script>";
  } 
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./assets/style/main-style.css">
  <link rel="stylesheet" href="./assets/style/navbar-style.css">
  <link rel="stylesheet" href="./assets/style/login-style.css">
  <title>Favoritmu</title>
</head>
<body>
  <nav class="fixed-bar">
    <?php $IPATH = $_SERVER["DOCUMENT_ROOT"]."/thebeattlesproyek/assets/php/"; include($IPATH."headernav.html");?>
  </nav>
  <div class="login-page">
    <div class="form">
      <form method="POST" class="login-form" autocomplete="off">
        <input type="text" name="username" placeholder="username" required/>
        <input type="password" name="password" placeholder="password" required/>
        <button>masuk</button>
        <p class="message">Belum punya akun ? <a href="register.php" target="_blank">Daftar dulu Jude.</a></p>
      </form>
    </div>
  </div>
</body>
<script>
  document.getElementsByTagName('li')[0].style.backgroundColor = 'rgba(197, 201, 198, 0.2)';
</script>
</html>