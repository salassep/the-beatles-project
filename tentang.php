<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./assets/style/main-style.css">
  <link rel="stylesheet" href="./assets/style/navbar-style.css">
  <link rel="stylesheet" href="./assets/style/tentang-style.css">
  <title>Tentang The Beatles</title>
</head>
<body>
  <nav class="fixed-bar">
    <?php $IPATH = $_SERVER["DOCUMENT_ROOT"]."/thebeattlesproyek/assets/php/"; include($IPATH."headernav.html");?>
  </nav>
  <div class="container">
    <h1>- THE BEATLES -</h1>
  </div>
  <div class="container">
    <img src="./assets/img/tentang/john-lennon.jpg" alt="Avatar" style="width:200px">
    <div class="desc">
      <h2>John Lennon</h2>
      <p><br/>John Winston Ono Lennon (lahir di Liverpool, Inggris, 9 Oktober 1940 – meninggal di New York City, Amerika Serikat, 8 Desember 1980 pada umur 40 tahun) paling dikenal sebagai penyanyi, pencipta lagu, instrumentalis, penulis, dan aktivis politik yang terkenal di seluruh dunia sebagai pemimpin dari The Beatles.</p>
    </div>
  </div>
  <div class="container">
    <img src="./assets/img/tentang/paul-mccartney.jpg" alt="Avatar" style="width:200px">
    <div class="desc">
      <h2>Paul McCartney</h2>
      <p><br/>Sir Paul McCartney, KBE (lahir di Liverpool, Inggris, 18 Juni 1942; umur 71 tahun) merupakan penyanyi berkebangsaan Inggris. Ia terkenal sebagai salah satu personel The Beatles. Bersama John Lennon di dekade 1960an, ia membentuk partnership pencipta lagu paling sukses.</p>
    </div>
  </div>
  <div class="container">
    <img src="./assets/img/tentang/george.jpg" alt="Avatar" style="width:200px">
    <div class="desc">
      <h2>George Harrison</h2>
      <p><br/>George Harrison MBE (lahir di Wavertree, Liverpool, Inggris, 25 Februari 1943 – meninggal di Los Angeles, Kalifornia, Amerika Serikat, 29 November2001 pada umur 58 tahun) adalah musisi, penyanyi, penulis lagu dan produser film Britania Raya. Ia paling dikenal sebagai gitaris grup musik The Beatles.</p>
    </div>
  </div>
  <div class="container">
    <img src="./assets/img/tentang/ringo-star.jpg" alt="Avatar" style="width:200px">
    <div class="desc">
      <h2>Ringo Starr</h2>
      <p><br/>Richard Starkey, MBE (lahir di Liverpool, Inggris, 7 Juli 1940; umur 73 tahun), dikenal dengan nama panggungnya Ringo Starr, adalah musikus terkenal dari Britania Raya, paling populer sebagai drummer The Beatles. Ia bergabung dengan The Beatles pada tahun 1962.</p>
    </div>
  </div>

  <div class="container">
    <div class="quote">
      <p>“I believe in everything until it's disproved. So I believe in fairies, the myths, dragons. It all exists, even if it's in your mind. Who's to say that dreams and nightmares aren't as real as the here and now?”
      <br/>- John Lennon</p>
    </div>
  </div>

</body>
<script>
  document.getElementsByTagName('li')[4].style.backgroundColor = 'rgba(197, 201, 198, 0.2)';
</script>
</html>