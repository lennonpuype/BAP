<?php
  if(empty($_GET['l'])){
    $_SESSION['user']['l'] = 'nl';
  }else{
    if($_GET['l'] === 'nl'){
      $_SESSION['user']['l'] = 'nl';
    }

    if($_GET['l'] === 'fr'){
      $_SESSION['user']['l'] = 'fr';
    }

    if($_GET['l'] === 'en'){
      $_SESSION['user']['l'] = 'en';
    }

    if($_GET['l'] !== 'nl' && $_GET['l'] !== 'fr' && $_GET['l'] !== 'en' ){
      $_SESSION['user']['l'] = 'nl';
    }
  }
?>
<?php if($_SESSION['user']['l'] == 'nl'){?>
<header class="landing_header landingPage">
  <h1 class="hidden">Header</h1>
  <nav class="header_languages" data-aos="fade-down">
  <h2 class="hidden">Kies taal</h2>
    <ul class="header_languages_list">
      <li class="header_languages_list_item header_languages_list_item_active"><a href="index.php?page=desktop&l=nl">NL</a></li>
      <li class="header_languages_list_item"><a href="index.php?page=desktop&l=en">EN</a></li>
      <li class="header_languages_list_item"><a href="index.php?page=desktop&l=fr">FR</a></li>
    </ul>
  </nav>
  <article class="header_title" data-aos="fade-right">
    <h1 class="header_title_big">a.r.u.next?</h1>
    <h2 class="header_title_small">the coolest city tours worldwide</h2>
  </article>
  <address class="header_socials" data-aos="fade-left" data-aos-anchor-placement="top-bottom">
  <h2 class="hidden">Social Media kanalen</h2>
    <ul class="header_socials_list">
      <li><img src="./assets/img/landingpagina/socials/facebook.png" width="150" alt="#" class="header_socials_image"/></li>
      <li><img src="./assets/img/landingpagina/socials/instagram.png" width="150" alt="#" class="header_socials_image"/></li>
      <li><img src="./assets/img/landingpagina/socials/youtube.png" width="150" alt="#" class="header_socials_image"/></li>
    </ul>
  </address>
</header>
<main>
  <section class="intro">
    <figure class="intro_image" data-aos="fade-right"><img src="./assets/img/landingpagina/installation.png" width="300" alt="De installatie in het openbaar" class="intro_image_box"/></figure>
    <article class="intro_text"  data-aos="fade-left">
      <h1 class="intro_text_title intro_text_title_big">a.r.u.next ? de installatie</h1>
      <p class="intro_text_paragraph intro_text_paragraph1">De a.r.u.next routes laten je op interactieve wijze kennis maken met de <b class="intro_text_highlight">talenten, sporen en toekomst</b> van de steden.</p>
      <h2 class="intro_text_title intro_text_title_small">Waar kan je hem vinden?</h2>
      <p class="intro_text_paragraph intro_text_paragraph2">De a.r.u.next installaties kan je vinden op centrale punten in de steden van de Eurometropool: Kortrijk, Lille, Tournai en Valenciennes. Weten waar? Check ze <span class="intro_text_url intro_text_highlight"><a href="#places">hier</a></span>.</p>
    </article>
  </section>
  <section class="routes_section">
    <article class="route_preview talent_route" data-aos="fade-up">
      <figure class="route_image"><img src="./assets/img/landingpagina/routes/k_talent.gif" width="200" alt="Preview van wat je in de talentroute kan verwachten"/></figure>
      <h1 class="route_title yellow">Talent Route</h1>
      <p class="route_description">Trek op pad door de stad en ontdek de talenten van nu en vroeger diede stad verwonderen</p>
    </article>
    <article class="route_preview sporen_route" data-aos="fade-down">
      <figure class="route_image"><img src="./assets/img/landingpagina/routes/k_sporen.gif" width="200" alt="Preview van wat je in de sporenroute kan verwachten"/></figure>
      <h1 class="route_title green">Sporen Route</h1>
      <p class="route_description">Ontdek de wondere sporen nagelaten door koningen, legendes en natuurlijk ook de treinen in de stad.</p>
    </article>
    <article class="route_preview toekomst_route" data-aos="fade-up">
      <figure class="route_image"><img src="./assets/img/landingpagina/routes/k_toekomst.gif" width="200" alt="Preview van wat je in de toekomstroute kan verwachten"/></figure>
      <h1 class="route_title red">Toekomst Route</h1>
      <p class="route_description">Leer de scheppers van de toekomst kennen: van keizers tot helden en visies van morgen!</p>
    </article>
  </section>
  <section class="test">
    <article class="test_text" data-aos="fade-right">
      <h1 class="test_text_title">Al een keertje testen?</h1>
      <p class="test_text_paragraph">Wil je het nu al een keertje proberen? Haal je smartphone camera alvast boven:</p>
      <ul class="test_text_list">
        <li class="test_text_list_item"><span class="test_text_bullet yellow_bg">1</span> surf naar www.arunext.eu op je smartphone</li>
        <li class="test_text_list_item"><span class="test_text_bullet green_bg">2</span> doorloop de stappen</li>
        <li class="test_text_list_item"><span class="test_text_bullet red_bg">3</span> en scan het vlak hiernaast</li>
      </ul>
    </article>
    <figure class="test_image" data-aos="fade-left"><img src="./assets/img/landingpagina/test.png" width="500" class="test_image_self" alt="Marker (foto) om de AR eens te testen"/></figure>
    <figure class="test_image_responsive" data-aos="fade-up"><img src="./assets/img/landingpagina/test_responsive.png" width="500" class="test_image_self" alt="Marker (foto) om de AR eens te testen"/></figure>
  </section>
  <section>
    <ul class="city_list" id="places" data-aos="fade-up">
      <li class="city_list_item kortrijk">Kortrijk - Stationsplein</li>
      <li class="city_list_item tournai">Doornik - Station</li>
      <li class="city_list_item lille">Rijsel - Euralille</li>
      <li class="city_list_item valenciennes">Valenciennes - Stadshal</li>
    </ul>
  </section>
</main>
<!-- <footer class="footer">
  <address class="footer_details">
    <h1 class="footer_text footer_text-title">NEXT Arts Festival</h1>
    <p class="footer_text">Kapucijnenstraat 10</p>
    <p class="footer_text">8500 Kortrijk</p>
    <p class="footer_text">+32 56 22 10 01</p>
    <p class="footer_text">info@nextfestival.eu</p>
  </address>
  <article class="footer_sponsors">
    <img src="./assets/img/footer/europa.png" width="200" height="134" alt="Sponsor - Europa"/>
    <img src="./assets/img/footer/federation.png" width="200" height="157" alt="Sponsor - Féderation Wallonie-Bruxelles"/>
    <img src="./assets/img/footer/lotto.png" width="200" height="125" alt="Sponsor - Lotto"/>
    <img src="./assets/img/footer/mel.png" width="198" height="147" alt="Sponsor - Mel"/>
    <img src="./assets/img/footer/region.png" width="198" height="139" alt="Sponsor - Eurometropool"/>
    <img src="./assets/img/footer/valenciennes.png" width="200" height="134" alt="Sponsor - Nationale Lotterij"/>
    <img src="./assets/img/footer/vlaanderen.png" width="200" height="120" alt="Sponsor - Stad Kortrijk"/>
  </article>
  <ul class="footer_tags">
    <li><a href="#">algemene voorwaarden</a></li>
    <li><a href="#">privacyverklaring</a></li>
    <li><a href="#">cookiebeleid</a></li>
    <a href="#">&copy; 2020</a>
  </ul>

</footer> -->

<footer>
      <div class="footer-logo">
      <img class="logo-img footer-logo-img" src="./assets/img/stickerlogo.png" alt="Logo Disegno" width="29" height="47">
      <address class="footer_details logo-img footer-logo-title">
        <h1 class="footer_text footer_text-title">NEXT Arts Festival</h1>
        <p class="footer_text">Kapucijnenstraat 10</p>
        <p class="footer_text">8500 Kortrijk</p>
        <p class="footer_text">+32 56 22 10 01</p>
        <p class="footer_text">info@nextfestival.eu</p>
    </address>
      </div>
      <section class="partners">
      <img src="./assets/img/footer/europa.png" class="europa" width="100" height="67" alt="Sponsor - Europa"/>
      <img src="./assets/img/footer/federation.png" class="federation"   width="50" height="60" alt="Sponsor - Féderation Wallonie-Bruxelles"/>
      <img src="./assets/img/footer/lotto.png" class="lotto" width="100" height="60" alt="Sponsor - Lotto"/>
      <img src="./assets/img/footer/mel.png" class="mel" width="99" height="73,5" alt="Sponsor - Mel"/>
      <img src="./assets/img/footer/region.png" class="regio" width="99" height="69,5" alt="Sponsor - Eurometropool"/>
      <img src="./assets/img/footer/valenciennes.png" class="val" width="100" height="67" alt="Sponsor - Nationale Lotterij"/>
      <img src="./assets/img/footer/vlaanderen.png" class="vlaanderen" width="100" height="60" alt="Sponsor - Stad Kortrijk"/>
      <img src="./assets/img/footer/em.png" class="em" width="100" height="50" alt="Sponsor - Eurometropool"/>

      </section>

      <section class="rights">
        <p class="rights-title"> &copy 2020 - Alle rechten voorbehouden</p>
      </section>


    </footer>
<?php }?>




<?php if($_SESSION['user']['l'] == 'en'){?>
<header class="landing_header landingPage">
  <h1 class="hidden">Header</h1>
  <nav class="header_languages" data-aos="fade-down">
  <h2 class="hidden">Kies taal</h2>
    <ul class="header_languages_list">
      <li class="header_languages_list_item"><a href="index.php?page=desktop&l=nl">NL</a></li>
      <li class="header_languages_list_item header_languages_list_item_active"><a href="index.php?page=desktop&l=en">EN</a></li>
      <li class="header_languages_list_item"><a href="index.php?page=desktop&l=fr">FR</a></li>
    </ul>
  </nav>
  <article class="header_title" data-aos="fade-right">
    <h1 class="header_title_big">a.r.u.next?</h1>
    <h2 class="header_title_small">the coolest city tours worldwide</h2>
  </article>
  <address class="header_socials" data-aos="fade-left" data-aos-anchor-placement="top-bottom">
  <h2 class="hidden">Social Media Channels</h2>
    <ul class="header_socials_list">
      <li><img src="./assets/img/landingpagina/socials/facebook.png" width="150" alt="#" class="header_socials_image"/></li>
      <li><img src="./assets/img/landingpagina/socials/instagram.png" width="150" alt="#" class="header_socials_image"/></li>
      <li><img src="./assets/img/landingpagina/socials/youtube.png" width="150" alt="#" class="header_socials_image"/></li>
    </ul>
  </address>
</header>
<main>
  <section class="intro">
    <figure class="intro_image" data-aos="fade-right"><img src="./assets/img/landingpagina/installation.png" width="300" alt="De installatie in het openbaar" class="intro_image_box"/></figure>
    <article class="intro_text"  data-aos="fade-left">
      <h1 class="intro_text_title intro_text_title_big">a.r.u.next ? the installation</h1>
      <p class="intro_text_paragraph intro_text_paragraph1">The a.r.u.next tours let you meet in an interactive way with the <b class="intro_text_highlight">talents, tracks and future</b> from the cities.</p>
      <h2 class="intro_text_title intro_text_title_small">Where can you find them?</h2>
      <p class="intro_text_paragraph intro_text_paragraph2">The a.r.u.next installations are located at central points in the cities from the Eurometropolis; Kortrijk, Lille, Tournai and Vallenciennes. You want to know where? Chek them <span class="intro_text_url intro_text_highlight"><a href="#places">here</a></span>.</p>
    </article>
  </section>
  <section class="routes_section">
    <article class="route_preview talent_route" data-aos="fade-up">
      <figure class="route_image"><img src="./assets/img/landingpagina/routes/k_talent.gif" width="200" alt="Preview van wat je in de talentroute kan verwachten"/></figure>
      <h1 class="route_title yellow">Talent Route</h1>
      <p class="route_description">Take a walk through the city and discover the talents of the past and present that amaze and make the city what it is today.</p>
    </article>
    <article class="route_preview sporen_route" data-aos="fade-down">
      <figure class="route_image"><img src="./assets/img/landingpagina/routes/k_sporen.gif" width="200" alt="Preview van wat je in de sporenroute kan verwachten"/></figure>
      <h1 class="route_title green">Track Route</h1>
      <p class="route_description">Discover the wonderful traces left by kings, legends and of course also the trains in the city.</p>
    </article>
    <article class="route_preview toekomst_route" data-aos="fade-up">
      <figure class="route_image"><img src="./assets/img/landingpagina/routes/k_toekomst.gif" width="200" alt="Preview van wat je in de toekomstroute kan verwachten"/></figure>
      <h1 class="route_title red">Future Route</h1>
      <p class="route_description">Get to know the creators and rulers of the future: from emperors to heroes and visions of yesterday and tomorrow!</p>
    </article>
  </section>
  <section class="test">
    <article class="test_text" data-aos="fade-right">
      <h1 class="test_text_title">Want to test already?</h1>
      <p class="test_text_paragraph">Do you want to test this experience already? Take you mobile device with you:</p>
      <ul class="test_text_list">
        <li class="test_text_list_item"><span class="test_text_bullet yellow_bg">1</span> go to www.arunext.eu on your smartphone</li>
        <li class="test_text_list_item"><span class="test_text_bullet green_bg">2</span> go trough the steps</li>
        <li class="test_text_list_item"><span class="test_text_bullet red_bg">3</span> and scan the image here</li>
      </ul>
    </article>
    <figure class="test_image" data-aos="fade-left"><img src="./assets/img/landingpagina/test.png" width="500" class="test_image_self" alt="Marker (foto) om de AR eens te testen"/></figure>
    <figure class="test_image_responsive" data-aos="fade-up"><img src="./assets/img/landingpagina/test_responsive.png" width="500" class="test_image_self" alt="Marker (foto) om de AR eens te testen"/></figure>
  </section>
  <section>
    <ul class="city_list" id="places" data-aos="fade-up">
      <li class="city_list_item kortrijk">Kortrijk - Station</li>
      <li class="city_list_item tournai">Doornik - Station</li>
      <li class="city_list_item lille">Rijsel - Euralille</li>
      <li class="city_list_item valenciennes">Valenciennes - Cityhall</li>
    </ul>
  </section>
</main>
<footer class="footer">
  <address class="footer_details">
    <h1>NEXT Arts Festival</h1>
    <p>Kapucijnenstraat 10</p>
    <p>8500 Kortrijk</p>
    <p>+32 56 22 10 01</p>
    <p>info@nextfestival.eu</p>
  </address>
  <article class="footer_sponsors">
    <figure><img src="./assets/img/landingpagina/sponsors/vlaanderen.png" width="200" alt="Sponsor - Vlaanderen verbeelding werkt"/></figure>
    <figure><img src="./assets/img/landingpagina/sponsors/federation.png" width="200" alt="Sponsor - Féderation Wallonie-Bruxelles"/></figure>
    <figure><img src="./assets/img/landingpagina/sponsors/hauts.png" width="200" alt="Sponsor - Région Hauts-de-France"/></figure>
    <figure><img src="./assets/img/landingpagina/sponsors/europe.png" width="200" alt="Sponsor - Europa"/></figure>
    <figure><img src="./assets/img/landingpagina/sponsors/em.png" width="200" alt="Sponsor - Eurometropool"/></figure>
    <figure><img src="./assets/img/landingpagina/sponsors/nl.png" width="200" alt="Sponsor - Nationale Lotterij"/></figure>
    <figure><img src="./assets/img/landingpagina/sponsors/kortrijk.png" width="200" alt="Sponsor - Stad Kortrijk"/></figure>
    <figure><img src="./assets/img/landingpagina/sponsors/valenciennes.png" width="200" alt="Sponsor - Valenciennes Metropole"/></figure>
    <figure><img src="./assets/img/landingpagina/sponsors/mel.png" width="200" alt="Sponsor - Métropole Européene de Lille"/></figure>
  </article>
  <ul class="footer_tags">
    <li><a href="#">Terms and Conditions</a></li>
    <li><a href="#">Privacy policy</a></li>
    <li><a href="#">Cookie policy</a></li>
    <a href="#">&copy; 2020</a>
  </ul>
  <aside class="devine_logo">
    <img src="./assets/img/landingpagina/sponsors/devine.png" width="200" alt="Devine Logo"/>
  </aside>
</footer>
<?php }?>


<?php if($_SESSION['user']['l'] == 'fr'){?>
<header class="landing_header landingPage">
  <h1 class="hidden">Header</h1>
  <nav class="header_languages" data-aos="fade-down">
  <h2 class="hidden">Kies taal</h2>
    <ul class="header_languages_list">
      <li class="header_languages_list_item"><a href="index.php?page=desktop&l=nl">NL</a></li>
      <li class="header_languages_list_item"><a href="index.php?page=desktop&l=en">EN</a></li>
      <li class="header_languages_list_item header_languages_list_item_active"><a href="index.php?page=desktop&l=fr">FR</a></li>
    </ul>
  </nav>
  <article class="header_title" data-aos="fade-right">
    <h1 class="header_title_big">a.r.u.next?</h1>
    <h2 class="header_title_small">the coolest city tours worldwide</h2>
  </article>
  <address class="header_socials" data-aos="fade-left" data-aos-anchor-placement="top-bottom">
  <h2 class="hidden">Social Media kanalen</h2>
    <ul class="header_socials_list">
      <li><img src="./assets/img/landingpagina/socials/facebook.png" width="150" alt="#" class="header_socials_image"/></li>
      <li><img src="./assets/img/landingpagina/socials/instagram.png" width="150" alt="#" class="header_socials_image"/></li>
      <li><img src="./assets/img/landingpagina/socials/youtube.png" width="150" alt="#" class="header_socials_image"/></li>
    </ul>
  </address>
</header>
<main>
  <section class="intro">
    <figure class="intro_image" data-aos="fade-right"><img src="./assets/img/landingpagina/installation.png" width="300" alt="De installatie in het openbaar" class="intro_image_box"/></figure>
    <article class="intro_text"  data-aos="fade-left">
      <h1 class="intro_text_title intro_text_title_big">a.r.u.next ? l'installation</h1>
      <p class="intro_text_paragraph intro_text_paragraph1">Les a.r.u.next routes vous présenter les <b class = "intro_text_highlight"> talents, traces et avenir </b> des villes de manière interactive.</p>
      <h2 class="intro_text_title intro_text_title_small">Où pouvez-vous le trouver?</h2>
      <p class="intro_text_paragraph intro_text_paragraph2">Les installations a.r.u.next se trouvent aux points centraux des villes de l'Eurométropole: Courtrai, Lille, Tournai et Valenciennes. Tu sais où? Vérifiez-les <span class = "intro_text_url intro_text_highlight"> <a href="#places"> ici</a></span>.</p>
    </article>
  </section>
  <section class="routes_section">
    <article class="route_preview talent_route" data-aos="fade-up">
      <figure class="route_image"><img src="./assets/img/landingpagina/routes/k_talent.gif" width="200" alt="Preview van wat je in de talentroute kan verwachten"/></figure>
      <h1 class="route_title yellow">Trajet des talents</h1>
      <p class="route_description">Promenez-vous dans la ville et découvrez les talents du passé et du présent qui étonnent et font de la ville ce qu'elle est aujourd'hui.</p>
    </article>
    <article class="route_preview sporen_route" data-aos="fade-down">
      <figure class="route_image"><img src="./assets/img/landingpagina/routes/k_sporen.gif" width="200" alt="Preview van wat je in de sporenroute kan verwachten"/></figure>
      <h1 class="route_title green">Trajet des trace</h1>
      <p class="route_description">Découvrez les merveilleuses traces laissées par les rois, les légendes et bien sûr aussi les trains de la ville.</p>
    </article>
    <article class="route_preview toekomst_route" data-aos="fade-up">
      <figure class="route_image"><img src="./assets/img/landingpagina/routes/k_toekomst.gif" width="200" alt="Preview van wat je in de toekomstroute kan verwachten"/></figure>
      <h1 class="route_title red">Trajet des futures</h1>
      <p class="route_description">Apprenez à connaître les créateurs et les dirigeants de l'avenir: des empereurs aux héros et aux visions d'hier et de demain!</p>
    </article>
  </section>
  <section class="test">
    <article class="test_text" data-aos="fade-right">
      <h1 class="test_text_title">Voulez-vous déjà le tester?</h1>
      <p class="test_text_paragraph">Voulez-vous l'essayer maintenant? Obtenez la caméra de votre smartphone:</p>
      <ul class="test_text_list">
        <li class="test_text_list_item"><span class="test_text_bullet yellow_bg">1</span> surfez sur www.arunext.eu sur votre smartphone</li>
        <li class="test_text_list_item"><span class="test_text_bullet green_bg">2</span> suivez les étapes</li>
        <li class="test_text_list_item"><span class="test_text_bullet red_bg">3</span> et scannez la zone à côté</li>
      </ul>
    </article>
    <figure class="test_image" data-aos="fade-left"><img src="./assets/img/landingpagina/test.png" width="500" class="test_image_self" alt="Marker (foto) om de AR eens te testen"/></figure>
    <figure class="test_image_responsive" data-aos="fade-up"><img src="./assets/img/landingpagina/test_responsive.png" width="500" class="test_image_self" alt="Marker (foto) om de AR eens te testen"/></figure>
  </section>
  <section>
    <ul class="city_list" id="places" data-aos="fade-up">
      <li class="city_list_item kortrijk">Kortrijk - Place de la gare</li>
      <li class="city_list_item tournai">Doornik - La gare</li>
      <li class="city_list_item lille">Rijsel - Euralille</li>
      <li class="city_list_item valenciennes">Valenciennes - Hôtel de ville</li>
    </ul>
  </section>
</main>
<footer class="footer">
  <address class="footer_details">
    <h1>NEXT Arts Festival</h1>
    <p>Kapucijnenstraat 10</p>
    <p>8500 Kortrijk</p>
    <p>+32 56 22 10 01</p>
    <p>info@nextfestival.eu</p>
  </address>
  <article class="footer_sponsors">
    <figure><img src="./assets/img/landingpagina/sponsors/vlaanderen.png" width="200" alt="Sponsor - Vlaanderen verbeelding werkt"/></figure>
    <figure><img src="./assets/img/landingpagina/sponsors/federation.png" width="200" alt="Sponsor - Féderation Wallonie-Bruxelles"/></figure>
    <figure><img src="./assets/img/landingpagina/sponsors/hauts.png" width="200" alt="Sponsor - Région Hauts-de-France"/></figure>
    <figure><img src="./assets/img/landingpagina/sponsors/europe.png" width="200" alt="Sponsor - Europa"/></figure>
    <figure><img src="./assets/img/landingpagina/sponsors/em.png" width="200" alt="Sponsor - Eurometropool"/></figure>
    <figure><img src="./assets/img/landingpagina/sponsors/nl.png" width="200" alt="Sponsor - Nationale Lotterij"/></figure>
    <figure><img src="./assets/img/landingpagina/sponsors/kortrijk.png" width="200" alt="Sponsor - Stad Kortrijk"/></figure>
    <figure><img src="./assets/img/landingpagina/sponsors/valenciennes.png" width="200" alt="Sponsor - Valenciennes Metropole"/></figure>
    <figure><img src="./assets/img/landingpagina/sponsors/mel.png" width="200" alt="Sponsor - Métropole Européene de Lille"/></figure>
  </article>
  <ul class="footer_tags">
    <li><a href="#">algemene voorwaarden</a></li>
    <li><a href="#">privacyverklaring</a></li>
    <li><a href="#">cookiebeleid</a></li>
    <a href="#">&copy; 2020</a>
  </ul>
  <aside class="devine_logo">
    <img src="./assets/img/landingpagina/sponsors/devine.png" width="200" alt="Devine Logo"/>
  </aside>
</footer>
<?php }?>
<script>
  AOS.init();
</script>
