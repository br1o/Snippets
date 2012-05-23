<?php
function currentPage($strPage) {
  if (strstr($_SERVER['PHP_SELF'], $strPage)) {
     echo 'class="current_' . $strPage. '" ';
  } else {
     echo '';
  }
}
?>
<div id="menu">
     <ul>
         <li><a <?php currentPage('index') ?>id="index" href="index.php">Accueil</a></li>
         <li><a <?php currentPage('page1') ?>id="page1" href="page1.php">page1</a></li>
         <li><a <?php currentPage('page2') ?>id="page2" href="page2.php">page2</a></li>
     </ul>
</div>