<section class="waypointInfo"></section>
<section class="arPage ar_section">
  <h1>AR <?php if(!empty($_GET['id'])){echo $_GET['id'];} ?></h1>
  <h1 class="ar_tag"></h1>
  <div class="arscene_div">
    <iframe src="index.php?page=arscene" class="arscene_iframe"></iframe>
  </div>
  <a href="index.php?page=route&id=<?php echo $_GET['id']; ?>&city=<?php echo $_GET['city']; ?>&cityRouteId=<?php echo $_GET['cityRouteId']; ?>">route</a>
  <a href="#" class="active">A.R. camera</a>
</section>
<aside class="hidden cityId"><?php echo $_GET['city'] ?></aside>
<aside class="hidden routeId"><?php echo $_GET['id'] ?></aside>
<aside class="hidden cityRouteId"><?php echo $_GET['cityRouteId'] ?></aside>

<?php if(!empty($_SESSION['user'])){ ?>
        <a href="index.php?page=logout" class="logout">Logout</a>
      <?php }else{
        echo '<span class="logout">No active session</span>';
      } ?>
