<?php include "header.php" ?>

  <form method="post" action="">
      <div class="form-container">
        <header class="form-header">
          <h1>Create Account</h1>
        </header>

          <div class="form-input">
            <input type="text" name="username" placeholder="username" id="username" />
            <p class="username"></p>
          </div>

          <div class="form-input">
            <input type="password" name="password" placeholder="password" id="password" />
            <p class="password"></p>
          </div>

          <div class="form-input">
            <input type="password" name="repassword" placeholder="repassword" id="repassword" />
            <p class="repassword"></p>
          </div>

          <div class="form-input">
            <input type="text" name="email" placeholder="email" id="email" />
            <p class="email"></p>
          </div>

          <div class="form-input">
            <p>Already have an account? <a href="login.php">Login</a></p>
          </div>

          <div class="form-input">
            <p class="form-error"></p>
          </div>

          <div class="form-input">
            <button class="cursor-pointer" name="create_acct" id="register">
              Create Account
            </button>
          </div>
        </div>
    </form>
  </body>
</html>
