<section>
  <h1>Route <?php if(!empty($_GET['id'])){echo $_GET['id'];} ?></h1>
  <div></div>
  <a href="index.php?page=route&id=<?php if(!empty($_GET['id'])){echo $_GET['id'];} ?>" class="active">route</a>
  <a href="index.php?page=ar&id=<?php if(!empty($_GET['id'])){echo $_GET['id'];} ?>">A.R. camera</a>
</section>

<?php if(!empty($_SESSION['user'])){ ?>
        <a href="index.php?page=logout" class="logout">Logout</a>
      <?php }else{
        echo '<span class="logout">No active session</span>';
      } ?>
