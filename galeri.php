<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./assets/style/main-style.css">
  <link rel="stylesheet" href="./assets/style/navbar-style.css">
  <link rel="stylesheet" href="./assets/style/galeri-style.css">
  <title>Galeri The Beatles</title>
</head>
<body>
  <nav class="fixed-bar">
    <?php $IPATH = $_SERVER["DOCUMENT_ROOT"]."/thebeattlesproyek/assets/php/"; include($IPATH."headernav.html");?>
  </nav>
  <div class="container">

    <div class="responsive">
      <div class="gallery">
        <a target="_blank" href="./assets/img/galeri/the-beatles-1.jpg">
          <img src="./assets/img/galeri/the-beatles-1.jpg" alt="The Beatles" width="600" height="400">
        </a>
      </div>
    </div>
    <div class="responsive">
      <div class="gallery">
        <a target="_blank" href="./assets/img/galeri/the-beatles-7.jpg">
          <img src="./assets/img/galeri/the-beatles-7.jpg" alt="The Beatles" width="600" height="400">
        </a>
      </div>
    </div>
    <div class="responsive">
      <div class="gallery">
        <a target="_blank" href="./assets/img/galeri/the-beatles-3.jpg">
          <img src="./assets/img/galeri/the-beatles-3.jpg" alt="The Beatles" width="600" height="399">
        </a>
      </div>
    </div>
    <div class="responsive">
      <div class="gallery">
        <a target="_blank" href="./assets/img/galeri/the-beatles-4.jpg">
          <img src="./assets/img/galeri/the-beatles-4.jpg" alt="The Beatles" width="600" height="400">
        </a>
      </div>
    </div>
    <div class="responsive">
      <div class="gallery">
        <a target="_blank" href="./assets/img/galeri/the-beatles-5.png">
          <img src="./assets/img/galeri/the-beatles-5.png" alt="The Beatles" width="600" height="400">
        </a>
      </div>
    </div>
    <div class="responsive">
      <div class="gallery">
        <a target="_blank" href="./assets/img/galeri/the-beatles-6.jpg">
          <img src="./assets/img/galeri/the-beatles-6.jpg" alt="The Beatles" width="600" height="400">
        </a>
      </div>
    </div>
    <div class="responsive">
      <div class="gallery">
        <a target="_blank" href="./assets/img/galeri/the-beatles-2.jpeg">
          <img src="./assets/img/galeri/the-beatles-2.jpeg" alt="The Beatles" width="600" height="400">
        </a>
      </div>
    </div>
    <div class="responsive">
      <div class="gallery">
        <a target="_blank" href="./assets/img/galeri/the-beatles-8.jpg">
          <img src="./assets/img/galeri/the-beatles-8.jpg" alt="The Beatles" width="600" height="400">
        </a>
      </div>
    </div>
    <div class="clearfix"></div>
  </div>
</body>
<script>
  document.getElementsByTagName('li')[3].style.backgroundColor = 'rgba(197, 201, 198, 0.2)';
</script>
</html>