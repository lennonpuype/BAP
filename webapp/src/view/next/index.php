<?php if(empty($_SESSION['user'])): ?>
<section class="page1 center_content">
  <h1>A.R. U Next?</h1>
  <a class="page_btn">Start exploring</a>
</section>

<section class="page2 inactive center_content">
  <ul class="languages">
    <li class="language"><a class="page_btn" data-language="dutch">Nederlands</a></li>
    <li class="language"><a class="page_btn" data-language="french">Français</a></li>
    <li class="language"><a class="page_btn" data-language="english">English</a></li>
  </ul>
</section>

<section class="page3 inactive center_content"></section>
<section class="page4 inactive center_content"></section>
<?php else:
  header('Location: index.php?page=routes');
  exit();
endif; ?>
