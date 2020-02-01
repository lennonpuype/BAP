<!DOCTYPE html>
<html lang="nl" style="overflow: hidden;">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="theme-color" content="#000">

  <link rel="icon" type="image/png" href="./assets/img/favicon.png">
  <link href="https://fonts.googleapis.com/css?family=Karla&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Inconsolata&display=swap" rel="stylesheet">
  <script src="https://aframe.io/releases/1.0.3/aframe.min.js"></script>
  <script src="https://raw.githack.com/jeromeetienne/AR.js/2.1.4/aframe/build/aframe-ar.js"></script>

  <script src="https://raw.githack.com/donmccurdy/aframe-extras/master/dist/aframe-extras.loaders.min.js"></script>

  <title>BAP</title>
  <?php echo $css;?>
  <script>
      WebFontConfig = {
        google: {
          families: ["Karla:400,400i,700,700i"]
        }
      };

      (function(d) {
        var wf = d.createElement("script"),
          s = d.scripts[0];
        wf.src =
          "https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js";
        wf.async = true;
        s.parentNode.insertBefore(wf, s);
      })(document);
    </script>
</head>

<body class="body">
      <?php
        if(!empty($_SESSION['error'])) {
          echo '<div class="alert alert-danger">' . $_SESSION['error'] . '</div>';
        }
        if(!empty($_SESSION['info'])) {
          echo '<div class="alert alert-success">' . $_SESSION['info'] . '</div>';
        }
        if(!empty($_SESSION['info_long'])) {
          echo '<div class="alert alert-success-long">' . $_SESSION['info_long'] . '</div>';
        }
      ?>
      <?php echo $content; ?>
      <?php echo $js; ?>
  </body>
</html>
