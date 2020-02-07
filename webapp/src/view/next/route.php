<?php if($_SESSION['user']['skiponboarding'] == 0 && $_SESSION['user']['onboardingalreadyseen'] == 0): ?>
  <?php $_SESSION['user']['onboardingalreadyseen'] = 1 ?>
  <section class="onboarding<?php if($_SESSION['user']['skiponboarding'] === 1){ echo ' hidden'; }?>">
    <article class="onboarding1">
      <h1 class="onboarding_title">Volg de route aangeduid via de gps</h1>
    </article>

    <article class="onboarding2">
      <h1 class="onboarding_title">Hou de camera van je gsm voor de a.r.u.next stickers</h1>
    </article>

    <article class="onboarding3">
      <h1 class="onboarding_title">En laat je verrassen! </h1>
    </article>
  </section>
<?php endif; ?>
<section class="singleRoutePage hidden">
  <h1 class="page_title">Route <?php if(!empty($_GET['id'])){echo $_GET['id'];} ?></h1>
  <div class="content"></div>
  <div id="map"></div>
  <a href="index.php?page=route&id=<?php if(!empty($_GET['id'])){echo $_GET['id'];} ?>" class="active choise_btn">route</a>
  <a class="arBtn choise_btn">AR-camera</a>


</section>
<section class="detailPage"></section>
<section class="arPage"></section>
<aside class="hidden cityId"><?php echo $_GET['city'] ?></aside>
<aside class="hidden routeId"><?php echo $_GET['id'] ?></aside>
<aside class="hidden cityRouteId"><?php echo $_GET['cityRouteId'] ?></aside>
<aside class="hidden onboardingSeen"><?php echo $_SESSION['user']['onboardingalreadyseen']; ?></aside>

<?php if(!empty($_SESSION['user'])){ ?>
        <a href="index.php?page=logout" class="logout">Logout</a>
      <?php }else{
        echo '<span class="logout">No active session</span>';
      } ?>
