<section class="singleRoutePage">
  <h1 class="page_title">Route <?php if(!empty($_GET['id'])){echo $_GET['id'];} ?></h1>
  <div class="content"></div>
  <div id="map"></div>
  <a href="index.php?page=route&id=<?php if(!empty($_GET['id'])){echo $_GET['id'];} ?>" class="active choise_btn">route</a>
  <a class="arBtn choise_btn">AR-camera</a>

</section>
<section class="detailPage"></section>
<section class="arPage"></section>
<aside class="hidden cityId"><?php echo $_GET['city'] ?></aside>
<aside class="hidden routeId"><?php echo $_GET['id'] ?></aside>
<aside class="hidden cityRouteId"><?php echo $_GET['cityRouteId'] ?></aside>

<?php if(!empty($_SESSION['user'])){ ?>
        <a href="index.php?page=logout" class="logout">Logout</a>
      <?php }else{
        echo '<span class="logout">No active session</span>';
      } ?>
