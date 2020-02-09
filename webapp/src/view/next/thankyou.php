<?php if(empty($_SESSION['user']['email'])){
  header('Location: index.php?page=routes');
  exit();
}else{
?>
<header class="header">
      <div class="icon"></div>
      <h1 class="page_title">Routes</h1>
      <button class="hamburger" data-state="closed">Open Hamburger</button>
      <div class="hamburger_content hidden">
        <ul class="hamburger_content_list">
          <li class="hamburger_content_list_item">
            <a href="index.php?page=routes" class="hamburger_content_list_item_link">Alle tours</a>
          </li>
          <li class="hamburger_content_list_item">
            <a href="index.php?page=faq" class="hamburger_content_list_item_link">Instructies & help</a>
          </li>
          <li class="hamburger_content_list_item">
            <a href="#" class="hamburger_content_list_item_link">Over NEXT Festival</a>
          </li>
          <li class="hamburger_content_list_item">
            <a href="#" class="hamburger_content_list_item_link">Over de Eurometropool</a
          ></li>
        </ul>
        <form method="post">
          <input type="hidden" name="action" value="changeLanguage"/>
          <input type="submit" name="language" value="nl" />
          <input type="submit" name="language" value="fr" />
          <input type="submit" name="language" value="en" />
        </form>
      </div>
    </header>

    <main>
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
