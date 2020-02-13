
<?php $_SESSION['user']['activeRoute'] = $_GET['id'] . $_GET['city'] ?>
<?php if($_SESSION['user']['skiponboarding'] == 0 && $_SESSION['user']['onboardingalreadyseen'] == 0): ?>
  <?php $_SESSION['user']['onboardingalreadyseen'] = 1 ?>
  <section class="onboarding<?php if($_SESSION['user']['skiponboarding'] === 1){ echo ' hidden'; }?>">
    <form method="post" class="skip_onboarding_form">
      <input type="hidden" name="action" value="skipOnboarding"/>
      <input type="submit" value="Skip" class="skip_onboarding_text"/>
    </form>
    <article class="onboarding1">
      <?php
        if($_SESSION['user']['l'] === 'nl'){
          echo '<h1 class="onboarding_title">Volg de route aangeduid via de gps...</h1>';
        }

        if($_SESSION['user']['l'] === 'fr'){
          echo "<h1 class='onboarding_title'>Suivez l'itinéraire indiqué via le GPS...</h1>";
        }

        if($_SESSION['user']['l'] === 'en'){
          echo '<h1 class="onboarding_title">Follow the route on the GPS...</h1>';
        }
      ?>
    </article>

    <article class="onboarding2">
    <?php
        if($_SESSION['user']['l'] === 'nl'){
          echo '<h1 class="onboarding_title">Hou de camera van je gsm voor de a.r.u.next stickers...</h1>';
        }

        if($_SESSION['user']['l'] === 'fr'){
          echo "<h1 class='onboarding_title'>Tenez la caméra de votre mobile pour les autocollants a.r.u.next...</h1>";
        }

        if($_SESSION['user']['l'] === 'en'){
          echo '<h1 class="onboarding_title">Hold the camera in front of the a.r.u.next stickers...</h1>';
        }
      ?>
    </article>

    <article class="onboarding3">
    <?php
        if($_SESSION['user']['l'] === 'nl'){
          echo '<h1 class="onboarding_title">En laat je verassen!</h1>';
        }

        if($_SESSION['user']['l'] === 'fr'){
          echo "<h1 class='onboarding_title'>Et soyez surpris!</h1>";
        }

        if($_SESSION['user']['l'] === 'en'){
          echo '<h1 class="onboarding_title">And be surprised!</h1>';
        }
      ?>
    </article>
  </section>
<?php endif; ?>

<section class="singleRoutePage hidden">

  <article class="popupClaimPrize">
  <?php
        if($_SESSION['user']['l'] === 'nl'){
          echo '<button class="popupPrizeNotification hidden">Ontvang je kortingscode</button>
          <div class="popupForClaim hidden">
            <h2>Helaas! Dit is het laatste punt..<br/>Maar niet getreurd...</h2>
            <br/>
            <h1>Vul je mailadres in en ontvang je kortingsbon voor NEXT Festival</h1>';
        }

        if($_SESSION['user']['l'] === 'fr'){
          echo "<button class='popupPrizeNotification hidden'>Recevoir votre coupon</button>
          <div class='popupForClaim hidden'>
            <h2>Malheureusement! Ceci est le dernier point.</br> Mais ne t'inquiète pas ...</h2>
            <br/>
            <h1>Entrez votre adresse e-mail et recevez votre bon de réduction pour NEXT Festival</h1>";
        }

        if($_SESSION['user']['l'] === 'en'){
          echo "<button class='popupPrizeNotification hidden'>Receive your discount code</button>
          <div class='popupForClaim hidden'>
            <h2>Oh no! This is the last point.<br/>But Don't be sad...</h2>
            <br/>
            <h1>Enter your mailadress to receive a discount for NEXT Festival</h1>";
        }
      ?>
        <form method="post">
          <input type="hidden" name="action" value="sendCode"/>
          <input type="hidden" name="code" value=<?php echo $_SESSION['user']['codeForCompletion']; ?> />
          <span class="error"></span>
          <input type="email" name="email" value="<?php if(!empty($_POST['email'])){echo $_POST['email']; }?>"/>
          <input type="submit" value="Ontvang de bon in je mailbox" />
        </form>
        <?php
        if($_SESSION['user']['l'] === 'nl'){
          echo '<button class="closePrizePopup">Sluit</button>';
        }

        if($_SESSION['user']['l'] === 'fr'){
          echo "<button class='closePrizePopup'>Fermer</button>";
        }

        if($_SESSION['user']['l'] === 'en'){
          echo '<button class="closePrizePopup">Close</button>';
        }
      ?>

      </div>
  </article>
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
  <!-- <h1 class="page_title">Route <?php if(!empty($_GET['id'])){echo $_GET['id'];} ?></h1> -->
  <!-- <div class="content"></div> -->
  <div class="content_div">
  <div class="content hidden"></div>
</div>
  <div id="map" class="main_blur"></div>
  <div class="buttons_route blur_hidden">
  <a href="#" class="active route_choice_btn"><img src="././assets/img/icons/pin.svg" alt="Route" width="36" height="48"></a>
  <a class="arBtn route_choice_btn rtn_btn_camera-inactive"><img src="././assets/img/icons/camera_yellow.svg" alt="Route" width="48" height="36"></a>

  </div>
</section>
<section class="detailPage main_blur">
  <div class="detail_container">

  </div>
<div class="images_container">

</div>
</section>
<section class="arPage"></section>
<aside class="hidden cityId"><?php echo $_GET['city'] ?></aside>
<aside class="hidden routeId"><?php echo $_GET['id'] ?></aside>
<aside class="hidden cityRouteId"><?php echo $_GET['cityRouteId'] ?></aside>
<aside class="hidden onboardingSeen"><?php echo $_SESSION['user']['onboardingalreadyseen']; ?></aside>
<aside class="hidden visitedPoints">
  <?php foreach($visitedPoints as $visitedPoint){
    echo '<span class="visitedPoint">'. $visitedPoint . '</span>';
  }?>
</aside>

<?php if(!empty($_SESSION['user'])){ ?>
        <a href="index.php?page=logout" class="logout">Logout</a>
      <?php }else{
        echo '<span class="logout">No active session</span>';
      } ?>
