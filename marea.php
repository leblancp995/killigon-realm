<!DOCTYPE html>

<?php

    include __DIR__ . "/php_scripts/measure_pagegen_time_start.php";
    include __DIR__ . "/php_scripts/session.php";

    // Start a session
    if (session_id() == "")
        session_start();

?>

<html lang="en">

<head>
    <!-- page title -->
    <title>Killigon WotLK - Member Area</title>

    <!-- metadata includes -->
    <?php include __DIR__ . "/php_components/metadata_includes.php";?>

    <!-- stylesheet includes -->
    <?php include __DIR__ . "/php_components/stylesheet_includes.php";?>
</head>

<body>
    <!-- navigation bar -->
    <?php include __DIR__ . "/php_components/navigation_bar.php";?>

    <!-- jumbotron -->
    <?php include __DIR__ . "/php_components/jumbotron.php";?>

    <!-- page content -->
    <div class="container">
        <div class="row">
            <div class="col-md-9 col-md-offset-1 col-sm-9 col-sm-offset-1 col-xs-9 col-xs-offset-1">

                <div class="panel panel-inverse">

                    <!-- panel header -->
                    <div class="panel-heading">
                        <strong>Killigon World of Warcraft::WotLK server website -- </strong><b>member area</b>!!!
                    </div>

                    <!-- panel body -->
                    <div class="panel-body">
                        Welcome <b><?php echo $_SESSION["username"]; ?></b>,
                        </BR>
                        </BR>
                        Your characters will be listed in the box below.
                        <p>
                            &nbsp;
                        </p>
                        </BR>
                        </BR>
                        Also you'll be able to read the rules and disclaimer...
                        </BR>
                        </BR>
                        To download the game archive simply click the gamebox cover below (the archive is quite a big file of 18.7GB)
                        </BR>
                        <a href="https://u.pcloud.link/publink/show?code=XZTcAJXZri4ghldpzgHenJot8e5ieVaf09WV"><img src="./images/gamebox.png" height="230" width="180" alt="World of Warcraft - Wrath of the Lich King game box" align="center" /></a>.
                        </BR>
                        Once you'll have the archive you gunna need to extract it's content on your hard drive, before being able to log into the game using ur account infos...
                        </BR>
                        Be able to change your account email or password...
                    </div>

                    <!-- panel footer -->
                    <div class="panel-footer">
                        <span>Got a question? or Problems with something? <a href="#">Contact me</a></span>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- footer -->
    <?php include __DIR__ . "/php_components/footer_bar.php";?>

    <!-- javascript includes -->
    <?php include __DIR__ . "/php_components/javascript_includes.php";?>
</body>

</html>