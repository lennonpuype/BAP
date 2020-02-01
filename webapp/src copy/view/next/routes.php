<?php
if(!empty($_GET['l']) && empty($_SESSION['user'])){
  if($_GET['l'] == 'nl'){
    if(empty($_SESSION)){
      // session_set_cookie_params(3600 * 72, "/");

      $_SESSION['user']['l'] = "nl";
    }
  }

  if($_GET['l'] == 'fr'){
    if(empty($_SESSION)){
      // session_set_cookie_params(3600 * 72, "/");
      //session_start();
      $_SESSION['user']['l'] = "fr";
    }
  }

  if($_GET['l'] == 'en'){
    if(empty($_SESSION)){
      // session_set_cookie_params(3600 * 72, "/");
      //session_start();
      $_SESSION['user']['l'] = "en";
    }
  }
}
?>
<?php if(!empty($_SESSION['user'])){ ?>
  <?php var_dump($_SESSION['user']['l']); ?>
  <?php if($_SESSION['user']['l'] == 'nl'){ ?>
    <header class="header">
      <div class="icon"></div>
      <h1 class="page_title">Routes</h1>
      <a href="#">Hamburger</a>
    </header>
    <main>
      <nav class="cities_nav">
        <ul class="cities">
          <li class="city">Kortrijk</li>
          <li class="city">Rijsel</li>
          <li class="city">Doornik</li>
          <li class="city">Valenciennes</li>
        </ul>
      </nav>
      <section class="routes">
        <article class="route">
          <h1 class="route_name">1. Kortrijk Kunst</h1>
          <ul class="route_parameters">
            <li class="route_parameter">3km</li>
            <li class="route_parameter">40min</li>
          </ul>
          <a href="index.php?page=route&id=1" class="route_startbtn">Start</a>
        </article>

        <article class="route">
          <h1 class="route_name">2. Kortrijk Historiek</h1>
          <ul class="route_parameters">
            <li class="route_parameter">3km</li>
            <li class="route_parameter">40min</li>
          </ul>
          <a href="index.php?page=route&id=1" class="route_startbtn">Start</a>
        </article>
      </section>
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
    <section>
      <h1>Routes</h1>
      <ul>
        <li>Kortrijk</li>
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
<?php }else{
  header('Location: index.php');
  exit();
} ?>
