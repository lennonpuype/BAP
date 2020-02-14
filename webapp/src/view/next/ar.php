<section class="waypointInfo"></section>
<section class="ar_section ar_section_def">
<article class="popupClaimPrize">
    <button class="popupPrizeNotification hidden">Ontvang je kortingscode</button>
      <div class="popupForClaim hidden">
        <h2>Helaas! Dit is het laatste punt..<br/>Maar niet getreurd...</h2>
        <br/>
        <h1>Vul je mailadres in en ontvang je kortingsbon voor NEXT Festival</h1>
        <form method="post">
          <input type="hidden" name="action" value="sendCode"/>
          <input type="hidden" name="code" value=<?php echo $_SESSION['user']['codeForCompletion']; ?> />
          <span class="error"></span>
          <input type="email" name="email" value="<?php if(!empty($_POST['email'])){echo $_POST['email']; }?>"/>
          <input type="submit" value="Ontvang de bon in je mailbox" />
        </form>
        <button class="closePrizePopup">Sluit</button>
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
  <h1 class="ar_tag"></h1>
  <div class="arscene_div arscene_div_def">
    <iframe src="index.php?page=arscene" class="arscene_iframe"></iframe>
  </div>
  <div class="buttons_route main_blur arscene_buttons_div">
  <a href="index.php?page=route&id=<?php echo $_GET['id']; ?>&city=<?php echo $_GET['city']; ?>&cityRouteId=<?php echo $_GET['cityRouteId']; ?>" class="rtn_btn_route-inactive route_choice_btn"><img src="././assets/img/icons/pin_yellow.svg" alt="Route" width="36" height="48"></a>
  <a href="#" class="active arBtn route_choice_btn"><img src="././assets/img/icons/camera-icon.svg" alt="Route" width="48" height="36"></a>
  <div class="buttons_route">
</div>
  </div>
</section>
<aside class="hidden cityId"><?php echo $_GET['city'] ?></aside>
<aside class="hidden routeId"><?php echo $_GET['id'] ?></aside>
<aside class="hidden cityRouteId"><?php echo $_GET['cityRouteId'] ?></aside>
