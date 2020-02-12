<!DOCTYPE html>
<html lang="nl">

<head class="head">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="theme-color" content="#090909">

  <link rel="icon" type="image/png" href="./assets/img/favicon.png">
  <link href="https://fonts.googleapis.com/css?family=Lato|Raleway:500,700&display=swap" rel="stylesheet">
  <script src="https://aframe.io/releases/0.8.0/aframe.min.js"></script>
  <script src="https://raw.githack.com/jeromeetienne/AR.js/2.1.4/aframe/build/aframe-ar.js"></script>
  <script src="https://raw.githack.com/donmccurdy/aframe-extras/master/dist/aframe-extras.loaders.min.js"></script>

  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>




<!--
  <script src="https://github.com/donmccurdy/aframe-extras/tree/master/src/loaders#animation"></script>
  <script src="./js/aframe-extras.js"></script>
  <script src="./js/aframe-text-geometry-component.min.js"></script> -->

  <script src="https://js.api.here.com/v3/3.1/mapsjs-core.js" type="text/javascript" charset="utf-8"></script>
  <script src="https://js.api.here.com/v3/3.1/mapsjs-service.js" type="text/javascript" charset="utf-8"></script>
  <script src="https://js.api.here.com/v3/3.1/mapsjs-ui.js" type="text/javascript" charset="utf-8"></script>
  <link rel="stylesheet" type="text/css" href="https://js.api.here.com/v3/3.1/mapsjs-ui.css" />
  <script type="text/javascript" src="https://js.api.here.com/v3/3.1/mapsjs-ui.js"></script>
  <script type="text/javascript" src="https://js.api.here.com/v3/3.1/mapsjs-mapevents.js"></script>



  <title>BAP</title>
  <?php echo $css;?>
  <script>
      WebFontConfig = {
        google: {
          families: ["Lato:300,300i,400,400i,700,700i,900,900i","Raleway:300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"]
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
      <?php if(!empty($_SESSION['user']['l'])){
        echo '<span class="hidden language">'.$_SESSION['user']['l'].'</span>';
      }?>
      <?php echo $js; ?>
  </body>
</html>
