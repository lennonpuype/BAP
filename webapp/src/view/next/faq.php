<header>
  <h1 class="site_title">a.r.u.next</h1>
  <button class="hamburger" data-state="closed">Open Hamburger</button>
  <div class="hamburger_content hidden">
    <ul class="hamburger_content_list">
      <li class="hamburger_content_list_item">
        <a href="index.php?page=routes" class="hamburger_content_list_item_link">Alle tours</a>
      </li>
      <li class="hamburger_content_list_item">
        <a href="#" class="hamburger_content_list_item_link">Instructies & help</a>
      </li>
      <li class="hamburger_content_list_item">
        <a href="#" class="hamburger_content_list_item_link">Over NEXT Festival</a>
      </li>
      <li class="hamburger_content_list_item">
        <a href="#" class="hamburger_content_list_item_link">Over de Eurometropool</a>
      </li>
    </ul>
    <form method="post">
      <input type="hidden" name="action" value="changeLanguage"/>
      <input type="submit" name="language" value="nl" />
      <input type="submit" name="language" value="fr" />
      <input type="submit" name="language" value="en" />
    </form>
  </div>
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
<?php if(!empty($_SESSION['user'])){
  if(!empty($_SESSION['user']['activeRoute'])){
    echo '<a href="index.php?page=route&id='.$_SESSION['user']['activeRoute'][0].'&city='.$_SESSION['user']['activeRoute'][1].'&routeId='.$_SESSION['user']['activeRoute'][0].'">Terug naar route</a>';
  }
 } ?>
