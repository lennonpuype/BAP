<?php if($_SESSION['user']['l'] == 'nl'){ ?>
<header>
  <h1 class="site_title">a.r.u.next</h1>
  <nav class="navbar">
      <div class="hamburger-menu">
      <div class="line line-1"></div>
      <div class="line line-2"></div>
      <div class="line line-3"></div>
      </div>

      <ul class="nav-list">
      <li class="nav-item nav-item-1"><a class="nav-link" href="index.php?page=routes"></a>Alle tours</li>
      <li class="nav-item nav-item-2"><a class="nav-link" href="index.php?page=faq"></a>Instructies & help</li>
      <li class="nav-item nav-item-3"><a class="nav-link" href="#"></a>Over NEXT Festival</li>
      <li class="nav-item nav-item-4"><a class="nav-link" href="#"></a>Over de Eurometropool</li>
      </ul>
      <form method="post">
          <input type="hidden" name="action" value="changeLanguage"/>
          <input type="submit" name="language" class="nav-language" value="nl" />
          <input type="submit" name="language" class="nav-language" value="fr" />
          <input type="submit" name="language" class="nav-language" value="en" class="active"/>
      </form>
    </nav>
</header>
<main class="faqPage">
  <section class="faq">
    <h1 class="page_title">Instructies & help</h1>
    <ul class="faq_options">
      <li class="faq_option">Hoe werkt de Augmented Reality?</li>
      <li class="faq_option">Waar vindt ik de A.R. plekken?</li>
      <li class="faq_option">Waar vindt ik de installaties?</li>
      <li class="faq_option">Hoe kan ik een beloning claimen?</li>
      <li class="faq_option">Wat voor toestel is vereist?</li>
    </ul>
  </section>
</main>
<?php } ?>
<?php if($_SESSION['user']['l'] == 'fr'){ ?>
<header>
  <h1 class="site_title">a.r.u.next</h1>
  <nav class="navbar">
      <div class="hamburger-menu">
      <div class="line line-1"></div>
      <div class="line line-2"></div>
      <div class="line line-3"></div>
      </div>

      <ul class="nav-list">
      <li class="nav-item nav-item-1"><a class="nav-link" href="index.php?page=routes"></a>Toutes les trajets</li>
      <li class="nav-item nav-item-2"><a class="nav-link" href="index.php?page=faq"></a>Instructions & aide</li>
      <li class="nav-item nav-item-3"><a class="nav-link" href="#"></a>En savoir plus sur NEXT Festival</li>
      <li class="nav-item nav-item-4"><a class="nav-link" href="#"></a>En savoir plus sur Eurometrpole</li>
      </ul>
      <form method="post">
          <input type="hidden" name="action" value="changeLanguage"/>
          <input type="submit" name="language" class="nav-language" value="nl" />
          <input type="submit" name="language" class="nav-language" value="fr" />
          <input type="submit" name="language" class="nav-language" value="en" class="active"/>
        </form>
    </nav>
</header>
<main class="faqPage">
  <section class="faq">
    <h1 class="page_title">Instructions & aide</h1>
    <ul class="faq_options">
      <li class="faq_option">Comment l'Augmented Reality marche?</li>
      <li class="faq_option">Ou je trouve le places d'A.R.?</li>
      <li class="faq_option">Ou je trouve l'installations?</li>
      <li class="faq_option">Comment puis-je réclamer une récompense?</li>
      <li class="faq_option">Quel appareil est requis?</li>
    </ul>
  </section>
</main>
<?php } ?>
<?php if($_SESSION['user']['l'] == 'en'){ ?>
<header>
  <h1 class="site_title">a.r.u.next</h1>
  <nav class="navbar">
      <div class="hamburger-menu">
      <div class="line line-1"></div>
      <div class="line line-2"></div>
      <div class="line line-3"></div>
      </div>

      <ul class="nav-list">
      <li class="nav-item nav-item-1"><a class="nav-link" href="index.php?page=routes"></a>All tours</li>
      <li class="nav-item nav-item-2"><a class="nav-link" href="index.php?page=faq"></a>Instructions & help</li>
      <li class="nav-item nav-item-3"><a class="nav-link" href="#"></a>About NEXT Festival</li>
      <li class="nav-item nav-item-4"><a class="nav-link" href="#"></a>About Eurometropolis</li>
      </ul>
      <form method="post">
          <input type="hidden" name="action" value="changeLanguage"/>
          <input type="submit" name="language" class="nav-language" value="nl" />
          <input type="submit" name="language" class="nav-language" value="fr" />
          <input type="submit" name="language" class="nav-language" value="en" class="active"/>
        </form>
    </nav>
</header>
<main class="faqPage">
  <section class="faq">
    <h1 class="page_title">Instructions & help</h1>
    <ul class="faq_options">
      <li class="faq_option">How does the Augmented Reality work?</li>
      <li class="faq_option">Where do you find the A.R. places?</li>
      <li class="faq_option">Where can I find the installations?</li>
      <li class="faq_option">How can I claim my rewards?</li>
      <li class="faq_option">What device is required?</li>
    </ul>
  </section>
</main>
<?php } ?>
<?php if(!empty($_SESSION['user'])){
  if(!empty($_SESSION['user']['activeRoute'])){
    echo '<a href="index.php?page=route&id='.$_SESSION['user']['activeRoute'][0].'&city='.$_SESSION['user']['activeRoute'][1].'&routeId='.$_SESSION['user']['activeRoute'][0].'">Terug naar route</a>';
  }
 } ?>
