<?php include "header.php" ?>

  <form method="post" action="">
      <div class="form-container">
        <header class="form-header">
          <h1>Login</h1>
        </header>

          <div class="form-input">
            <input type="text" name="user" placeholder="username" />
            <p class="username"></p>
          </div>

          <div class="form-input">
            <input type="password" name="pwd" placeholder="password" />
            <p class="password"></p>
          </div>

          <div class="form-input">
            <p>Don't have an account? <a href="#">register</a></p>
          </div>

          <div class="form-input">
            <p class="form-error"></p>
          </div>

          <div class="form-input">
            <button class="cursor-pointer" name="login" id="login">
              Create Account
            </button>
          </div>
        </div>
    </form>

    <?php
      $login = new ValidateLogin();
      $login->login();
     ?>
  </body>
</html>
