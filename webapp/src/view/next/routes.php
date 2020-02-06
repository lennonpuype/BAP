<?php
if(!empty($_GET['l']) && empty($_SESSION['user'])){
  if($_GET['l'] == 'nl'){
    if(empty($_SESSION)){
      $_SESSION['user']['l'] = "nl";
      $_SESSION['user']['codes'] = array();
      array_push($_SESSION['user']['codes'], $_GET['code']);

      header('Location: index.php');
      exit();
    }
  }

  if($_GET['l'] == 'fr'){
    if(empty($_SESSION)){
      $_SESSION['user']['l'] = "fr";
      $_SESSION['user']['codes'] = array();
      array_push($_SESSION['user']['codes'], $_GET['code']);

      header('Location: index.php');
      exit();
    }
  }

  if($_GET['l'] == 'en'){
    if(empty($_SESSION)){
      $_SESSION['user']['l'] = "en";
      $_SESSION['user']['codes'] = array();
      array_push($_SESSION['user']['codes'], $_GET['code']);

      header('Location: index.php');
      exit();
    }
  }
}
?>
<?php if(!empty($_SESSION['user'])){ ?>
  <?php if($_SESSION['user']['l'] == 'nl'){ ?>
    <div class="popup_code hidden"></div>
    <header class="header">
      <div class="icon"></div>
      <h1 class="page_title">Routes</h1>
      <button class="hamburger" data-state="closed">Hamburger</button>
      <div class="hamburger_content hidden">
        <ul class="hamburger_content_list">
          <li class="hamburger_content_list_item">
            <a href="index.php?page=routes" class="hamburger_content_list_item_link">Alle tours</a>
          </li>
          <li class="hamburger_content_list_item">
            <a href="#" class="hamburger_content_list_item_link">Instructies & help</a>
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
    <main class="routePage">
      <nav class="cities_nav">
        <ul class="cities">
          <li class="city_link active_city" data-id="0">Kortrijk</li>
          <li class="city_link" data-id="1">Rijsel</li>
          <li class="city_link" data-id="2">Doornik</li>
          <li class="city_link" data-id="3">Valenciennes</li>
        </ul>
      </nav>
      <article class="hidden">
        <?php
          foreach($routes as $route){
            echo '<span class="routeId">'.$route.'</span>';
          }
        ?>
      </article>
      <section class="routes"></section>
    </main>
  <?php } ?>

  <?php if($_SESSION['user']['l'] == 'fr'){ ?>
    <section>
      <h1>Trajets</h1>
      <ul>
        <li>Coutrai</li>
        <li>Lille</li>
        <li>Tournai</li>
        <li>Valenciennes</li>
      </ul>
      <article>
        <h1>1. Route</h1>
        <ul>
          <li>3km</li>
          <li>40min</li>
        </ul>
        <a href="index.php?page=route&id=1">Start</a>
      </article>

      <article>
        <h1>2. Route</h1>
        <ul>
          <li>3km</li>
          <li>40min</li>
        </ul>
        <a href="index.php?page=route&id=2">Start</a>
      </article>
    </section>
  <?php } ?>

  <?php if($_SESSION['user']['l'] == 'en'){ ?>
    <section class="routePage">
      <h1>Routes</h1>
      <ul>
        <li>Kortrijk</li>
        <li>Lille</li>
        <li>Tournai</li>
        <li>Valenciennes</li>
      </ul>
      <article class="hidden">
        <?php
var_dump($routes);
          foreach($routes as $route){
            var_dump($route);
          }
        ?>
      </article>

      <article>
        <h1>2. Route</h1>
        <ul>
          <li>3km</li>
          <li>40min</li>
        </ul>
        <a href="index.php?page=route&id=2">Start</a>
      </article>
    </section>
  <?php } ?>
<?php }else{
  header('Location: index.php');
  exit();
} ?>

<?php if(!empty($_SESSION['user'])){ ?>
        <a href="index.php?page=logout" class="logout">Logout</a>
      <?php }else{
        echo '<span class="logout">No active session</span>';
      } ?>
