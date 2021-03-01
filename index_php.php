<?php
include 'db.php'
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="dist/app.css">
    <title>Spotify-PHP</title>
  </head>
  <body>

    <header>
      <div class="container">
        <div class="logo">
          <img src="https://1000logos.net/wp-content/uploads/2017/08/Spotify-Logo.png" alt="">
        </div>
      </div>
    </header>

    <main>
      <div class="container">
        <div class="album-box">
          <?php foreach ($albums as $album) { ?>
          <div class="album">
            <div class="album-img">
              <img src="<?php echo $album['poster']?>">
            </div>
            <h3><?php echo $album['title']?></h3>
            <p><?php echo $album['author']?></p>
            <p><?php echo $album['genre']?></p>
            <p><?php echo $album['year']?></p>
          </div>
        <?php }?>
        </div>

      </div>
    </main>

    <script src="dist/app.js" charset="utf-8"></script>
  </body>
</html>
