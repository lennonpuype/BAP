<?php if(empty($_SESSION['user']['email'])){
  header('Location: index.php?page=routes');
  exit();
}else{
?>
<header class="header">
      <div class="icon"></div>
      <h1 class="page_title">Routes</h1>
      <nav class="navbar">
      <div class="hamburger-menu">
      <div class="line line-1"></div>
      <div class="line line-2"></div>
      <div class="line line-3"></div>
      </div>

      <ul class="nav-list">
      <li class="nav-item nav-item-1"><a class="nav-link" href="index.php?page=routes">Alle tours</a></li>
      <li class="nav-item nav-item-2"><a class="nav-link" href="index.php?page=faq">Instructies & help</a></li>
      <li class="nav-item nav-item-3"><a class="nav-link" href="#">Over NEXT Festival</a></li>
      <li class="nav-item nav-item-4"><a class="nav-link" href="#">Over de Eurometropool</a></li>
      </ul>
      <form method="post">
          <input type="hidden" name="action" value="changeLanguage"/>
          <input type="submit" name="language" class="nav-language" value="nl" />
          <input type="submit" name="language" class="nav-language" value="fr" />
          <input type="submit" name="language" class="nav-language" value="en" class="active"/>
      </form>
    </nav>
    </header>

    <main class="main_blur">
      <h1>De code is verzonden naar <?php echo $_SESSION['user']['email']; ?></h1>
      <?php if($_SESSION['user']['l'] == "nl"){
        echo '<h2>Niets ontvangen? Bekijk zeker eens je spam</h2>';
      }?>

      <?php if($_SESSION['user']['l'] == "en"){
        echo "<h2>Vous n'avez rien reçu? N'oubliez pas de vérifier votre spam</h2>";
      }?>

      <?php if($_SESSION['user']['l'] == "fr"){
        echo "<h2>Didn't reveived anything? Don't forget to look in your spam folder</h2>";
      }?>
      <a href="index.php?page=routes">Terug naar routes</a>
    </main>
<?php } ?>
