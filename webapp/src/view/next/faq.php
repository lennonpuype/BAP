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
<main class="faqPage main_blur">
  <section class="faq">
    <h1 class="page_title_small page_faq">Instructies & help</h1>
    <ul class="faq_options">
      <li class="faq_option accordion">Hoe werkt de Augmented Reality? <svg xmlns="http://www.w3.org/2000/svg" class="svg_arrow" height="24" viewBox="0 0 24 24" width="24"><path d="M15.41 16.59L10.83 12l4.58-4.59L14 6l-6 6 6 6 1.41-1.41z"/><path d="M0 0h24v24H0V0z" fill="none"/></svg></li>
      <div class="panel box-shadow">
        <!--Informatie over deze topic-->
        <p class="panel_instructions">Open de site arunext.eu en hou bij het juiste scherm de camera voor de sticker. Deze stickers zijn speciaal ontworpen en zorgen voor een unieke beleving doorheen de stad.  </p>
      </div>
      <li class="faq_option accordion">Hoe kan ik een beloning claimen? <svg xmlns="http://www.w3.org/2000/svg" class="svg_arrow" height="24" viewBox="0 0 24 24" width="24"><path d="M15.41 16.59L10.83 12l4.58-4.59L14 6l-6 6 6 6 1.41-1.41z"/><path d="M0 0h24v24H0V0z" fill="none"/></svg></li>
      <div class="panel box-shadow">
      <p class="panel_instructions">Nadat je alle punten bezocht hebt op een route, krijg je de optie om je mailadres op te geven en een kortingscode te claimen voor NEXT Festival! Deze code kan je inruilen voor 1 voorstelling. Meer informatie? Mail arunext@next.eu</p>
      </div>
      <li class="faq_option accordion">Waar vind ik de A.R. plekken? <svg xmlns="http://www.w3.org/2000/svg" class="svg_arrow" height="24" viewBox="0 0 24 24" width="24"><path d="M15.41 16.59L10.83 12l4.58-4.59L14 6l-6 6 6 6 1.41-1.41z"/><path d="M0 0h24v24H0V0z" fill="none"/></svg></li>
      <div class="panel box-shadow">
      <p class="panel_instructions">De A.R. scanplekken vind je doorheen de steden van de Eurometropool. Deze vind je makkelijk ook terug op het routeoverzicht.</p>

      </div>
      <li class="faq_option accordion">Waar vind ik de installaties? <svg xmlns="http://www.w3.org/2000/svg" class="svg_arrow" height="24" viewBox="0 0 24 24" width="24"><path d="M15.41 16.59L10.83 12l4.58-4.59L14 6l-6 6 6 6 1.41-1.41z"/><path d="M0 0h24v24H0V0z" fill="none"/></svg></li>
      <div class="panel box-shadow">
      <p class="panel_instructions">Om te vertrekken vind je installaties op centrale plekken doorheen de stad: </p>
        <ul>
          <li class="panel_instructions panel_list">Kortijk - Stationsplein</li>
          <li class="panel_instructions panel_list">Lille - Euralille</li>
          <li class="panel_instructions panel_list">Tournai - Station</li>
          <li class="panel_instructions panel_list">Valenciennes - Stadhal</li>
        </ul>
      </div>
      <li class="faq_option accordion">Wat voor toestel is vereist? <svg xmlns="http://www.w3.org/2000/svg" class="svg_arrow" height="24" viewBox="0 0 24 24" width="24"><path d="M15.41 16.59L10.83 12l4.58-4.59L14 6l-6 6 6 6 1.41-1.41z"/><path d="M0 0h24v24H0V0z" fill="none"/></svg></li>
      <div class="panel box-shadow">
      <p class="panel_instructions">Er zijn geen specifieke vereisten voor de routes. Zolang je smartphone een camera heeft kan je starten!</p>
      </div>
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
    <h1 class="page_title_small page_faq">Instructions & aide</h1>
    <ul class="faq_options">
    <li class="faq_option accordion">Comment l'A.R. marche?<svg xmlns="http://www.w3.org/2000/svg" class="svg_arrow" height="24" viewBox="0 0 24 24" width="24"><path d="M15.41 16.59L10.83 12l4.58-4.59L14 6l-6 6 6 6 1.41-1.41z"/><path d="M0 0h24v24H0V0z" fill="none"/></svg></li>
      <div class="panel box-shadow">
      <p class="panel_instructions">Ouvrez le site arunext.eu et tenez l'appareil photo devant l'autocollant sur l'écran de droite. Ces autocollants sont spécialement conçus et garantissent une expérience unique dans toute la ville.</p>
      </div>
      <li class="faq_option accordion">Comment puis-je obtenir le cadeau?<svg xmlns="http://www.w3.org/2000/svg" class="svg_arrow" height="24" viewBox="0 0 24 24" width="24"><path d="M15.41 16.59L10.83 12l4.58-4.59L14 6l-6 6 6 6 1.41-1.41z"/><path d="M0 0h24v24H0V0z" fill="none"/></svg></li>
      <div class="panel">
      <p class="panel_instructions">Après avoir visité tous les points d'un itinéraire, vous aurez la possibilité d'entrer votre adresse e-mail et de réclamer un code de réduction pour NEXT Festival! Vous pouvez échanger ce code contre 1 spectacle. Plus d'informations? Mail arunext@next.eu</p>
      </div>
      <li class="faq_option accordion">Ou je trouve les places d'A.R.?<svg xmlns="http://www.w3.org/2000/svg" class="svg_arrow" height="24" viewBox="0 0 24 24" width="24"><path d="M15.41 16.59L10.83 12l4.58-4.59L14 6l-6 6 6 6 1.41-1.41z"/><path d="M0 0h24v24H0V0z" fill="none"/></svg></li>
      <div class="panel">
      <p class="panel_instructions">L'A.R. des endroits peuvent être trouvés dans les villes de l'Eurométropole. Vous pouvez également le trouver facilement sur l'aperçu de l'itinéraire.</p>
      </div>
      <li class="faq_option accordion">Ou je trouve l'installations?<svg xmlns="http://www.w3.org/2000/svg" class="svg_arrow" height="24" viewBox="0 0 24 24" width="24"><path d="M15.41 16.59L10.83 12l4.58-4.59L14 6l-6 6 6 6 1.41-1.41z"/><path d="M0 0h24v24H0V0z" fill="none"/></svg></li>
      <div class="panel">
      <p class="panel_instructions">Pour partir, vous trouverez des installations dans des endroits centraux de la ville:</p>
        <ul>
          <li class="panel_instructions panel_list">Kortijk - Place de la gare</li>
          <li class="panel_instructions panel_list">Lille - Euralille</li>
          <li class="panel_instructions panel_list">Tournai - La gare</li>
          <li class="panel_instructions panel_list">Valenciennes - Hôtel de ville</li>
        </ul>
      </div>
      <li class="faq_option accordion">Quel appareil est requis?<svg xmlns="http://www.w3.org/2000/svg" class="svg_arrow" height="24" viewBox="0 0 24 24" width="24"><path d="M15.41 16.59L10.83 12l4.58-4.59L14 6l-6 6 6 6 1.41-1.41z"/><path d="M0 0h24v24H0V0z" fill="none"/></svg></li>
      <div class="panel">
      <p class="panel_instructions">Il n'y a pas d'exigences spécifiques pour les itinéraires. Vous pouvez commencer tant que votre smartphone dispose d'un appareil photo!</p>
      </div>

    </ul>
  </section>
</main>
<?php } ?>
<?php if($_SESSION['user']['l'] == 'en'){ ?>
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
    <h1 class="page_title_small page_faq">Instructions & help</h1>
    <ul class="faq_options">
    <li class="faq_option accordion">How does the A.R. work?<svg xmlns="http://www.w3.org/2000/svg" class="svg_arrow" height="24" viewBox="0 0 24 24" width="24"><path d="M15.41 16.59L10.83 12l4.58-4.59L14 6l-6 6 6 6 1.41-1.41z"/><path d="M0 0h24v24H0V0z" fill="none"/></svg></li>
      <div class="panel box-shadow">
      <p class="panel_instructions">Open the site arunext.eu and hold the camera in front of the sticker at the right screen. These stickers are specially designed and ensure a unique experience throughout the city.</p>
      </div>
      <li class="faq_option accordion">How can I claim my rewards?<svg xmlns="http://www.w3.org/2000/svg" class="svg_arrow" height="24" viewBox="0 0 24 24" width="24"><path d="M15.41 16.59L10.83 12l4.58-4.59L14 6l-6 6 6 6 1.41-1.41z"/><path d="M0 0h24v24H0V0z" fill="none"/></svg></li>
      <div class="panel box-shadow">
      <p class="panel_instructions">After you've visited all the points on a route, you'll be given the option to enter your email address and claim a discount code for NEXT Festival! You can exchange this code for 1 show. More information? Mail arunext@next.eu.</p>
      </div>
      <li class="faq_option accordion">Where do you find the A.R. places?<svg xmlns="http://www.w3.org/2000/svg" class="svg_arrow" height="24" viewBox="0 0 24 24" width="24"><path d="M15.41 16.59L10.83 12l4.58-4.59L14 6l-6 6 6 6 1.41-1.41z"/><path d="M0 0h24v24H0V0z" fill="none"/></svg></li>
      <div class="panel box-shadow">
      <p class="panel_instructions">The A.R. places can be found throughout the cities of the Eurometropolis. You can also easily find this on the route overview.</p>
      </div>
      <li class="faq_option accordion">Where can I find the installations?<svg xmlns="http://www.w3.org/2000/svg" class="svg_arrow" height="24" viewBox="0 0 24 24" width="24"><path d="M15.41 16.59L10.83 12l4.58-4.59L14 6l-6 6 6 6 1.41-1.41z"/><path d="M0 0h24v24H0V0z" fill="none"/></svg></li>
      <div class="panel box-shadow">
      <p class="panel_instructions">To leave you will find installations at central locations throughout the city:</p>
      <ul>
          <li class="panel_instructions panel_list">Kortijk - Station Square</li>
          <li class="panel_instructions panel_list">Lille - Euralille</li>
          <li class="panel_instructions panel_list">Tournai - Station</li>
          <li class="panel_instructions panel_list">Valenciennes - City Hall</li>
        </ul>
      </div>
      <li class="faq_option accordion">What device is required?<svg xmlns="http://www.w3.org/2000/svg" class="svg_arrow" height="24" viewBox="0 0 24 24" width="24"><path d="M15.41 16.59L10.83 12l4.58-4.59L14 6l-6 6 6 6 1.41-1.41z"/><path d="M0 0h24v24H0V0z" fill="none"/></svg></li>
      <div class="panel box-shadow">
      <p class="panel_instructions">There are no specific requirements for the routes. You can start as long as your smartphone has a camera!</p>
      </div>
    </ul>
  </section>
</main>
<?php } ?>
<?php if(!empty($_SESSION['user'])){
  // if(!empty($_SESSION['user']['activeRoute'])){
  //   echo '<div class="route_div_faq"><a href="index.php?page=route&id='.$_SESSION['user']['activeRoute'][0].'&city='.$_SESSION['user']['activeRoute'][1].'&routeId='.$_SESSION['user']['activeRoute'][0].'" class="back_to_route box-shadow">Terug naar route</a></div>';
  // }
  header('Location: index.php');
  exit();
 } ?>
