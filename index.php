<?php include "header.php"?>
    <div class="main-container">
      <div class="section-tmp">
        <div class="banner-player">

          <div class="top-icons">
            <i class="fas fa-arrow-left"></i>
            <i class="far fa-heart"></i>
          </div>

          <video  autoplay muted loop>
            <source src="videos/frozen2-comp.mp4">
          </video>

          <div class="bar">
            <div class="inner-bar">
            </div>
          </div>

          <div class="bottom-icons">
            <div class="icons-left">
              <i class="fas fa-play"></i>
              <i class="fas fa-undo"></i>
              <i class="fas fa-redo"></i>
            </div>

            <div class="icons-right">
              <i class="fas fa-volume-mute"></i>
              <i class="fas fa-compress"></i>
            </div>
          </div>
        </div>
      </div>

      <div class="section-2">

        <header class="section-2-header">
          <h1>Movies</h1>
        </header>

        <div class="section-3-grid">
            <?php
              $grid = new DisplayFFiles("images/home-movie-grid/", "section-3-img-grid");
             ?>
        </diV>
      </div>

      <div class="section-3">
        <header class="section-2-header">
          <h1>Tv series<h1>
        </header>
        <div class="section-3-grid">
            <?php
              $grid = new DisplayFFiles("images/home-movie-grid/", "section-3-img-grid");
             ?>
        </diV>
      </div>
    </div>
</body>
</html>
