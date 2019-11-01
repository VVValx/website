<?php include "header.php"?>
    <div class="main-container">
      <div class="section-tmp">
        <div class="banner-player">

          <div class="top-icons">
            <i class="fas fa-arrow-left"></i>
            <i class="far fa-heart"></i>
          </div>

          <video  autoplay muted loop id="homeVideo">
            <source src="videos/frozen2-comp.mp4">
          </video>

          <div class="banner-description">
            <div class="description-detail">
              <div class="description title">
                <h4>Title: Fronzen 2</h4>
              </div>

              <div class="description img">
                <img src="images/banners/frozen2.jpg">
              </div>

              <div class="description plot">
                <h4>Plot:</h4>
                <p>
                  This is just a sample plot to tell something
                  I don't even know what I am wrting here but
                  I will keep typing because it is necessary to
                  have this area in my video page. I know this is
                  probably the worst write up ever but I don't
                  care
                </p>
              </div>

              <div class="description rating">
                <h4>Rating: 4.5</h4>
              </div>

              <div class="description release-date">
                <h4>Release Date: 25 December 2019</h4>
              </div>

              <div class="description buttons">
                <button>Watch now</button>
              </div>
            </div>
          </div>

          <div class="bar">
            <div class="inner-bar">
            </div>
          </div>

          <div class="bottom-icons">
            <div class="icons-left">
              <i class="fas fa-pause"></i>
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

    <?php include "footer.php" ?>
    <script src="js/videoPlayer.js"></script>
</body>
</html>
