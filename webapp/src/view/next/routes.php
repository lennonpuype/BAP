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

  <?php if($_SESSION['user']['l'] == 'nl' && !empty($_SESSION['user']['unlockedroutes'])){ ?>
    <header class="header">
    <img src="././assets/img/stickerlogo.png" alt="Logo van a.r.u.next" width="29" height="47">
      <h1 class="logo_title">a.r.u.next</h1>
    <nav class="navbar">
      <div class="hamburger-menu">
      <div class="line line-1"></div>
      <div class="line line-2"></div>
      <div class="line line-3"></div>
      </div>

      <ul class="nav-list">
      <li class="nav-item nav-item-1"><a class="nav-link" href="index.php?page=routes">Alle tours</a></li>
      <li class="nav-item nav-item-2"><a class="nav-link" href="index.php?page=faq">Instructies & help</a></li>
      <li class="nav-item nav-item-3"><a class="nav-link" target="_blank" href="http://www.nextfestival.eu/nl/internationaal-podiumkunstenfestival-voor-de-eurometropool-lille-kortrijk-tournai-valenciennes">Over NEXT Festival</a></li>
      <li class="nav-item nav-item-4"><a class="nav-link" target="_blank" href="http://eurometropolis.eu/nl/">Over de Eurometropool</a></li>
      </ul>
      <form method="post">
          <input type="hidden" name="action" value="changeLanguage"/>
          <input type="submit" name="language" class="nav-language" value="nl" />
          <input type="submit" name="language" class="nav-language" value="fr" />
          <input type="submit" name="language" class="nav-language" value="en" class="active"/>
      </form>
    </nav>
    </header>
    <div class="popup_code blur_hidden hidden">
    </div>

    <main class="routePage main_blur">

      <nav class="cities_nav">
        <ul class="cities">
          <li class="city_link active_city city_shadow" data-id="0">Kortrijk</li>
          <li class="city_link city_shadow" data-id="1">Rijsel</li>
          <li class="city_link city_shadow" data-id="2">Doornik</li>
          <li class="city_link city_shadow" data-id="3">Valenciennes</li>
        </ul>
      </nav>
      <article class="hidden routeslist">
        <?php
          foreach($routes as $route){
            echo '<span class="routeId">'.$route.'</span>';
          }
        ?>
      </article>

      <div class="routes_container">
      </div>
    </main>

  <?php }else{
    // unset($_SESSION['user']);
    // header('Location: index.php');
    // exit();
  } ?>

  <?php if($_SESSION['user']['l'] == 'fr' && !empty($_SESSION['user']['unlockedroutes'])){ ?>
    <div class="popup_code blur_hidden hidden"></div>
    <header class="header">
    <img src="././assets/img/stickerlogo.png" alt="Logo van a.r.u.next" width="29" height="47">
      <h1 class="logo_title">a.r.u.next</h1>
      <nav class="navbar">
      <div class="hamburger-menu">
      <div class="line line-1"></div>
      <div class="line line-2"></div>
      <div class="line line-3"></div>
      </div>

      <ul class="nav-list">
      <li class="nav-item nav-item-1"><a class="nav-link" href="index.php?page=routes">Toutes les trajets</a></li>
      <li class="nav-item nav-item-2"><a class="nav-link" href="index.php?page=faq">Instructions & aide</a></li>
      <li class="nav-item nav-item-3"><a class="nav-link" target="_blank" href="http://www.nextfestival.eu/fr/le-festival-international-des-arts-vivants-pour-l-eurometropole-lille-kortrijk-tournai-valenciennes">En savoir plus sur NEXT Festival</a></li>
      <li class="nav-item nav-item-4"><a class="nav-link" target="_blank" href="http://eurometropolis.eu/fr/">En savoir plus sur Eurometropole</a></li>

      </ul>
      <form method="post">
          <input type="hidden" name="action" value="changeLanguage"/>
          <input type="submit" name="language" class="nav-language" value="nl" />
          <input type="submit" name="language" class="nav-language" value="fr" />
          <input type="submit" name="language" class="nav-language" value="en" class="active"/>
        </form>
    </nav>

    </header>
    <main class="routePage main_blur">
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
      <div class="routes_container">
      </div>
    </main>
  <?php }else{
    // unset($_SESSION['user']);
    // header('Location: index.php');
    // exit();
  } ?>



  <?php if($_SESSION['user']['l'] == 'en' && !empty($_SESSION['user']['unlockedroutes'])){ ?>

    <div class="popup_code blur_hidden hidden"></div>
    <header class="header">
    <img src="././assets/img/stickerlogo.png" alt="Logo van a.r.u.next" width="29" height="47">
      <h1 class="logo_title">a.r.u.next</h1>

      <nav class="navbar">
      <div class="hamburger-menu">
      <div class="line line-1"></div>
      <div class="line line-2"></div>
      <div class="line line-3"></div>
      </div>

      <ul class="nav-list">
      <li class="nav-item nav-item-1"><a class="nav-link" href="index.php?page=routes">All tours</a></li>
      <li class="nav-item nav-item-2"><a class="nav-link" href="index.php?page=faq">Instructions & help</a></li>
      <li class="nav-item nav-item-3"><a class="nav-link" target="_blank" href="http://www.nextfestival.eu/en/about">About NEXT Festival</a></li>
      <li class="nav-item nav-item-4"><a class="nav-link"  target="_blank"href="http://eurometropolis.eu/en/">About Eurometropolis</a></li>
      </ul>
      <form method="post">
          <input type="hidden" name="action" value="changeLanguage"/>
          <input type="submit" name="language" class="nav-language" value="nl" />
          <input type="submit" name="language" class="nav-language" value="fr" />
          <input type="submit" name="language" class="nav-language" value="en" class="active"/>
        </form>
    </nav>
    </header>
    <main class="routePage main_blur">
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
      <div class="routes_container">
      </div>
    </main>
  <?php }else{
    // unset($_SESSION['user']);
    // header('Location: index.php');
    // exit();
  } ?>
<?php }else{
  header('Location: index.php');
  exit();
} ?>

<?php if(!empty($_SESSION['user'])){ ?>
        <a href="index.php?page=logout" class="logout">Logout</a>
      <?php }else{
        echo '<span class="logout">No active session</span>';
      } ?>
