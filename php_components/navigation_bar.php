<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">

        <a href="./index.php" class="navbar-brand">Killigon WotLK</a>

        <p class="navbar-text pull-left"><?php include __DIR__ . "/../php_scripts/serverstatus.php";?></p>

        <?php if (isset($_SESSION["username"]) && $_SESSION["username"] == true) : ?>
          <p class="navbar-text pull-right">Logged in as: <?php echo $_SESSION["username"]; ?></p>
        <?php endif; ?>

        <button class="navbar-toggle" data-toggle="collapse" data-target=".nav-header-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>

        <div class="collapse navbar-collapse nav-header-collapse">
            <ul class="nav navbar-nav navbar-left">

                <li class="<?php if (strpos($_SERVER["PHP_SELF"], 'index.php') !== false) { echo 'active'; } ?>">
                  <a href="./index.php">Index</a>
                </li>

                <li class="<?php if (strpos($_SERVER["PHP_SELF"], 'about.php') !== false) { echo 'active'; } ?>">
                  <a href="./about.php">About</a>
                </li>

                 <?php if (isset($_SESSION["username"]) == true) : ?>
                <li class="<?php if (strpos($_SERVER["PHP_SELF"], 'marea.php') !== false) { echo 'active'; } ?>">
                  <a href="./marea.php">Member Area</a>
                </li>
                <?php endif; ?>

                <?php if (isset($_SESSION["username"]) == true) : ?>
                <li class="<?php if (strpos($_SERVER["PHP_SELF"], 'account.php') !== false) { echo 'active'; } ?>">
                  <a href="./account.php">Account</a>
                </li>
                <?php endif; ?>

                <?php if (isset($_SESSION["username"]) == false) : ?>
                <li class="<?php if (strpos($_SERVER["PHP_SELF"], 'register.php') !== false) { echo 'active'; } ?>">
                  <a href="./register.php">Register</a>
                </li>
                <?php endif; ?>

                <?php if (isset($_SESSION["username"]) == false) : ?>
                  <li class="<?php if (strpos($_SERVER["PHP_SELF"], 'login.php') !== false) { echo 'active'; } ?>">
                    <a href="./login.php">Login</a>
                  </li>
                <?php endif; ?>

                <?php if (isset($_SESSION["username"]) && $_SESSION["username"] == true) : ?>
                  <li>
                    <a href="./php_scripts/logout.php">Logout</a>
                  </li>
                <?php endif; ?>

            </ul>
        </div>
    </div>
</div>
