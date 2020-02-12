<?php if($_SESSION['user']['l'] == 'nl'){ ?>
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
<main class="faqPage main_blur">
  <section class="faq">
    <h1 class="page_title_small page_faq">Instructies & help</h1>
    <ul class="faq_options">
      <li class="faq_option">Hoe werkt de Augmented Reality?</li>
      <li class="faq_option">Hoe kan ik een beloning claimen?</li>
      <li class="faq_option">Waar vind ik de A.R. plekken?</li>
      <li class="faq_option">Waar vind ik de installaties?</li>
      <li class="faq_option">Wat voor toestel is vereist?</li>
    </ul>
  </section>

  <section class="faq_standard_options">
  <ul class="faq_standards">
      <li class="faq_standard">Algemene voorwaarden</li>
      <li class="faq_standard">Privacyverklaring</li>
      <li class="faq_standard">Cookiebeleid</li>
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
      <li class="nav-item nav-item-1"><a class="nav-link" href="index.php?page=routes">Toutes les trajets</a></li>
      <li class="nav-item nav-item-2"><a class="nav-link" href="index.php?page=faq">Instructions & aide</a></li>
      <li class="nav-item nav-item-3"><a class="nav-link" href="#">En savoir plus sur NEXT Festival</a></li>
      <li class="nav-item nav-item-4"><a class="nav-link" href="#">En savoir plus sur Eurometropole</a></li>
      </ul>
      <form method="post">
          <input type="hidden" name="action" value="changeLanguage"/>
          <input type="submit" name="language" class="nav-language" value="nl" />
          <input type="submit" name="language" class="nav-language" value="fr" />
          <input type="submit" name="language" class="nav-language" value="en" class="active"/>
        </form>
    </nav>
</header>
<main class="faqPage main_blur">
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
      <li class="nav-item nav-item-1"><a class="nav-link" href="index.php?page=routes">All tours</a></li>
      <li class="nav-item nav-item-2"><a class="nav-link" href="index.php?page=faq">Instructions & help</a></li>
      <li class="nav-item nav-item-3"><a class="nav-link" href="#">About NEXT Festival</a></li>
      <li class="nav-item nav-item-4"><a class="nav-link" href="#">About Eurometropolis</a></li>
      </ul>
      <form method="post">
          <input type="hidden" name="action" value="changeLanguage"/>
          <input type="submit" name="language" class="nav-language" value="nl" />
          <input type="submit" name="language" class="nav-language" value="fr" />
          <input type="submit" name="language" class="nav-language" value="en" class="active"/>
        </form>
    </nav>
</header>
<main class="faqPage main_blur">
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
