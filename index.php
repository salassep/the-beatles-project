<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- my css -->
  <link rel="stylesheet" href="./assets/style/main-style.css">
  <link rel="stylesheet" href="./assets/style/style.css">
  <link rel="stylesheet" href="./assets/style/navbar-style.css">
  <link rel="stylesheet" href="./assets/style/button-home-style.css">

  <title>The Beatles Playlist</title>
</head>
<body>

<!-- Navigasi -->
  <nav class="fixed-bar">
    <!-- Mengambil isi dari file headernav.html -->
    <?php $IPATH = $_SERVER["DOCUMENT_ROOT"]."/thebeattlesproyek/assets/php/"; include($IPATH."headernav.html");?>
  </nav>
<!-- Akhir dari navigasi -->

<!-- Konten halaman -->
  <div class="container">
    <h1>Hey Jude,<br /> Beritahu Saya lagu <br /> 
    <span class="txt-beatles">The Beatles</span><br /> 
    #favoritmu !</h1>

    <a href="login.php">
      <button>LET IT BE !</button>
    </a>
  </div>
<!-- Akhir dari konten halaman -->

</body>
</html>