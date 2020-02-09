<?php if(empty($_SESSION['user'])): ?>
  <?php $_COOKIE['activeRoute'] = 999 ?>

<section class="page1 center_content index">
  <h1 class="head_title">a.r.u.next?</h1>
  <a class="page_btn startBtn btn_shadow variable_button">Start met verkennen ></a>
</section>

<section class="page2 inactive center_content index">
  <h1 class="head_title">a.r.u.next</h1>
  <ul class="languages">
    <a class="page_btn" data-language="dutch"><li class="language btn_shadow">Nederlands</li></a>
    <a class="page_btn" data-language="french"><li class="language btn_shadow">Français</li></a>
    <a class="page_btn" data-language="english"><li class="language btn_shadow">English</li></a>

  </ul>
</section>

<section class="page3 inactive center_content index">

</section>
<section class="page4 inactive center_content index"></section>
<?php else:
  header('Location: index.php?page=routes');
  exit();
endif; ?>
