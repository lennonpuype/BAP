<?php
if(!empty($_GET['l']) && empty($_SESSION['user'])){
  if($_GET['l'] == 'nl'){
    $_SESSION['user']['l'] = "nl";
  }

  if($_GET['l'] == 'fr'){
    $_SESSION['user']['l'] = "fr";
  }

  if($_GET['l'] == 'en'){
    $_SESSION['user']['l'] = "en";
  }
}
?>
<?php if(!empty($_SESSION['user'])){ ?>
  <?php var_dump($_SESSION['user']['l']); ?>
  <?php if($_SESSION['user']['l'] == 'nl'){ ?>
    <section>
      <h1>Routes</h1>
      <ul>
        <li>Kortrijk</li>
        <li>Rijsel</li>
        <li>Doornik</li>
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
  Header('Location: index.php');
  exit();
} ?>
