<?php
if(!empty($_GET['l']) && empty($_SESSION['user'])){
  if($_GET['l'] == 'nl'){
    if(empty($_SESSION)){

    $n=10;
    function getName($n) {
      $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
      $randomString = 'NEXT';

      for ($i = 0; $i < $n; $i++) {
        $index = rand(0, strlen($characters) - 1);
        $randomString .= $characters[$index];
      }

      return $randomString;
    }

      $_SESSION['user']['l'] = "nl";
      $_SESSION['user']['codeForCompletion'] = getName($n);
      $_SESSION['user']['codes'] = array();
      $_SESSION['user']['activeRoutes'] = array();
      array_push($_SESSION['user']['codes'], $_GET['code']);

      header('Location: index.php');
      exit();
    }
  }

  if($_GET['l'] == 'fr'){
    if(empty($_SESSION)){
      $_SESSION['user']['l'] = "fr";
      $_SESSION['user']['codes'] = array();
      $_SESSION['user']['activeRoutes'] = array();
      array_push($_SESSION['user']['codes'], $_GET['code']);

      header('Location: index.php');
      exit();
    }
  }

  if($_GET['l'] == 'en'){
    if(empty($_SESSION)){
      $_SESSION['user']['l'] = "en";
      $_SESSION['user']['codes'] = array();
      $_SESSION['user']['activeRoutes'] = array();
      array_push($_SESSION['user']['codes'], $_GET['code']);

      header('Location: index.php');
      exit();
    }
  }
}
?>
<?php if(!empty($_SESSION['user'])){ ?>
<?php unset($_SESSION['user']['email']); ?>
  <?php unset($_SESSION['user']['activeRoute']); ?>
  <?php if(empty($_SESSION['user']['skiponboarding'])):?>
  <?php $_SESSION['user']['skiponboarding'] = 0; ?>
  <?php endif;?>
  <?php if($_SESSION['user']['skiponboarding'] == 0 ){ ?>
    <?php $_SESSION['user']['onboardingalreadyseen'] = 0 ?>
  <?php } ?>
  <?php if($_SESSION['user']['l'] == 'nl'){ ?>
    <div class="popup_code hidden"></div>
    <header class="header">
    <img src="././assets/img/stickerlogo.png" alt="Logo van a.r.u.next" width="29" height="47">
      <h1 class="logo_title">a.r.u.next</h1>
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
          <input type="submit" name="language" value="nl" class="active" />
          <input type="submit" name="language" value="fr" />
          <input type="submit" name="language" value="en" />
        </form>
      </div>
    </header>
    <main class="routePage">
      <nav class="cities_nav">
        <ul class="cities">
          <li class="city_link active_city city_shadow" data-id="0">Kortrijk</li>
          <li class="city_link city_shadow" data-id="1">Rijsel</li>
          <li class="city_link city_shadow" data-id="2">Doornik</li>
          <li class="city_link city_shadow" data-id="3">Valenciennes</li>
        </ul>
      </nav>
      <article class="hidden">
        <?php
          foreach($routes as $route){
            echo '<span class="routeId">'.$route.'</span>';
          }
        ?>
      </article>
      <section class="routes carousel" data-flickity='{ "contain": true, "wrapAround": true, "prevNextButtons": false, "pageDots": false, "lazyload": 100 }'></section>
     </main>
  <?php } ?>

  <?php if($_SESSION['user']['l'] == 'fr'){ ?>
    <div class="popup_code hidden"></div>
    <header class="header">
      <div class="icon"></div>
      <h1 class="page_title">Trajets</h1>
      <button class="hamburger" data-state="closed">Ouverte Hamburger</button>
      <div class="hamburger_content hidden">
        <ul class="hamburger_content_list">
          <li class="hamburger_content_list_item">
            <a href="index.php?page=routes" class="hamburger_content_list_item_link">Toutes les Trajets</a>
          </li>
          <li class="hamburger_content_list_item">
            <a href="index.php?page=faq" class="hamburger_content_list_item_link">Instructions & aide</a>
          </li>
          <li class="hamburger_content_list_item">
            <a href="#" class="hamburger_content_list_item_link">L'information du NEXT Festival</a>
          </li>
          <li class="hamburger_content_list_item">
            <a href="#" class="hamburger_content_list_item_link">L'information du métropole de l'euro</a
          ></li>
        </ul>
        <form method="post">
          <input type="hidden" name="action" value="changeLanguage"/>
          <input type="submit" name="language" value="nl" />
          <input type="submit" name="language" value="fr" class="active" />
          <input type="submit" name="language" value="en" />
        </form>
      </div>
    </header>
    <main class="routePage">
      <nav class="cities_nav">
        <ul class="cities">
          <li class="city_link active_city" data-id="0">Courtrai</li>
          <li class="city_link" data-id="1">Lille</li>
          <li class="city_link" data-id="2">Tournai</li>
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



  <?php if($_SESSION['user']['l'] == 'en'){ ?>

    <div class="popup_code hidden"></div>
    <header class="header">
      <div class="icon"></div>
      <h1 class="page_title">Tours</h1>
      <button class="hamburger" data-state="closed">Open Hamburger</button>
      <div class="hamburger_content hidden">
        <ul class="hamburger_content_list">
          <li class="hamburger_content_list_item">
            <a href="index.php?page=routes" class="hamburger_content_list_item_link">All tours</a>
          </li>
          <li class="hamburger_content_list_item">
            <a href="index.php?page=faq" class="hamburger_content_list_item_link">Instructions & help</a>
          </li>
          <li class="hamburger_content_list_item">
            <a href="#" class="hamburger_content_list_item_link">about NEXT Festival</a>
          </li>
          <li class="hamburger_content_list_item">
            <a href="#" class="hamburger_content_list_item_link">about the Eurometropolis</a
          ></li>
        </ul>
        <form method="post">
          <input type="hidden" name="action" value="changeLanguage"/>
          <input type="submit" name="language" value="nl" />
          <input type="submit" name="language" value="fr" />
          <input type="submit" name="language" value="en" class="active"/>
        </form>
      </div>
    </header>
    <main class="routePage">
      <nav class="cities_nav">
        <ul class="cities">
          <li class="city_link active_city" data-id="0">Kortrijk</li>
          <li class="city_link" data-id="1">Lille</li>
          <li class="city_link" data-id="2">Tournai</li>
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
<?php }else{
  header('Location: index.php');
  exit();
} ?>

<?php if(!empty($_SESSION['user'])){ ?>
        <a href="index.php?page=logout" class="logout">Logout</a>
      <?php }else{
        echo '<span class="logout">No active session</span>';
      } ?>
