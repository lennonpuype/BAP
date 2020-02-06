<?php if(empty($_SESSION['user'])): ?>

<section class="page1 center_content index">
  <h1 class="head_title">a.r.u.next?</h1>
  <a class="page_btn startBtn btn_shadow variable_button">Start met verkennen ></a>
</section>

<section class="page2 inactive center_content index">
  <ul class="languages">
    <li class="language btn_shadow"><a class="page_btn" data-language="dutch">Nederlands</a></li>
    <li class="language btn_shadow"><a class="page_btn" data-language="french">Français</a></li>
    <li class="language btn_shadow"><a class="page_btn" data-language="english">English</a></li>
  </ul>
</section>

<section class="page3 inactive center_content index">

</section>
<section class="page4 inactive center_content index"></section>
<?php else:
  header('Location: index.php?page=routes');
  exit();
endif; ?>
