<section class="singleRoutePage">
  <h1 class="page_title">Route <?php if(!empty($_GET['id'])){echo $_GET['id'];} ?></h1>
  <div class="content"></div>
  <div id="map"></div>
  <a href="index.php?page=route&id=<?php if(!empty($_GET['id'])){echo $_GET['id'];} ?>" class="active">route</a>
  <a class="arBtn">A.R. camera</a>

</section>
<section class="detailPage"></section>
<section class="arPage"></section>

<?php if(!empty($_SESSION['user'])){ ?>
        <a href="index.php?page=logout" class="logout">Logout</a>
      <?php }else{
        echo '<span class="logout">No active session</span>';
      } ?>
