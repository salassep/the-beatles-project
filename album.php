<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./assets/style/main-style.css">
  <link rel="stylesheet" href="./assets/style/navbar-style.css">
  <link rel="stylesheet" href="./assets/style/album-style.css">
  <title>Album The Beatles</title>
</head>
<body>
  <nav class="fixed-bar">
    <?php $IPATH = $_SERVER["DOCUMENT_ROOT"]."/thebeattlesproyek/assets/php/"; include($IPATH."headernav.html");?>
  </nav>
  <div class="container">
    <h1>- THE BEATLES -</h1>
    <h2>ABBEY ROAD</h2>
    <iframe src="https://open.spotify.com/embed/album/5iT3F2EhjVQVrO4PKhsP8c?theme=0" frameBorder="0" allowtransparency="true" allow="encrypted-media"></iframe>
    <h2>THE BEATLES</h2>
    <iframe src="https://open.spotify.com/embed/album/1WMVvswNzB9i2UMh9svso5?theme=0" frameBorder="0" allowtransparency="true" allow="encrypted-media"></iframe>
    <h2>LIVE AT THE HOLLYWOOD BOWL</h2>
    <iframe src="https://open.spotify.com/embed/album/0n9SWDBEftKwq09B01Pwzw?theme=0" frameBorder="0" allowtransparency="true" allow="encrypted-media"></iframe>
    <h2>YELLOW SUBMARINE</h2>
    <iframe src="https://open.spotify.com/embed/album/0XRZpF083HqgygM0v1hQyE?theme=0" frameBorder="0" allowtransparency="true" allow="encrypted-media"></iframe>
    <h2>LET IT BE... NAKED (REMASTERED)</h2>
    <iframe src="https://open.spotify.com/embed/album/4KYcffwC5HgjJLdpQU9SjC?theme=0" frameBorder="0" allowtransparency="true" allow="encrypted-media"></iframe>

    <a href="https://open.spotify.com/artist/3WrFJ7ztbogyGnTHbHJFl2/discography/album" target="_blank"><h3>&#8635;</h3></a>
  </div>
</body>
<script>
  document.getElementsByTagName('li')[1].style.backgroundColor = 'rgba(197, 201, 198, 0.2)';
</script>
</html>