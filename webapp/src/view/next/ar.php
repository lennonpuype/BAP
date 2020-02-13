<section class="waypointInfo"></section>
<section class="ar_section">
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
  <h1>AR <?php if(!empty($_GET['id'])){echo $_GET['id'];} ?></h1>
  <h1 class="ar_tag"></h1>
  <div class="arscene_div">
    <iframe src="index.php?page=arscene" class="arscene_iframe"></iframe>
  </div>
  <div class="buttons_route main_blur">
  <a href="index.php?page=route&id=<?php echo $_GET['id']; ?>&city=<?php echo $_GET['city']; ?>&cityRouteId=<?php echo $_GET['cityRouteId']; ?>" class="active route_choice_btn">route</a>
  <a href="#" class="active arBtn route_choice_btn">A.R. camera</a>
  <div class="buttons_route">
</div>
  </div>
</section>
<aside class="hidden cityId"><?php echo $_GET['city'] ?></aside>
<aside class="hidden routeId"><?php echo $_GET['id'] ?></aside>
<aside class="hidden cityRouteId"><?php echo $_GET['cityRouteId'] ?></aside>

<?php if(!empty($_SESSION['user'])){ ?>
        <a href="index.php?page=logout" class="logout">Logout</a>
      <?php }else{
        echo '<span class="logout">No active session</span>';
      } ?>
