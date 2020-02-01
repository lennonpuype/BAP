<?php if(empty($_SESSION['user'])): ?>

<section class="page1 center_content index">
  <h1>A.R. U Next?</h1>
  <a class="page_btn startBtn">Start met verkennen</a>
</section>

<section class="page2 inactive center_content index">
  <ul class="languages">
    <li class="language"><a class="page_btn" data-language="dutch">Nederlands</a></li>
    <li class="language"><a class="page_btn" data-language="french">Français</a></li>
    <li class="language"><a class="page_btn" data-language="english">English</a></li>
  </ul>
</section>

<section class="page3 inactive center_content index">

</section>
<section class="page4 inactive center_content index"></section>
<?php else:
  header('Location: index.php?page=routes');
  exit();
endif; ?>

<?php if(!empty($_SESSION['user'])){ ?>
        <a href="index.php?page=logout" class="logout">Logout</a>
      <?php }else{
        echo '<span class="logout">No active session</span>';
      } ?>
