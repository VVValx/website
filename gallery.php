<?php require "header.php" ?>
  <div class="gallery-container">
    <?php include "catMenu.php" ?>
    <div class="grid-container">
      <?php
        $gallery = new DisplayGalleryImages();
        $gallery->displayGallery();
      ?>
    </div>
  </div>
</body>
</html>
