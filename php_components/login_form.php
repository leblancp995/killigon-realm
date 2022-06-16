<div class="container">
    <div class="row vertical-center-75">
        <div class="col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3 col-xs-9 col-xs-offset-1">
            <div class="panel panel-inverse">

                <!-- panel header -->
                <div class="panel-heading">
                    <strong>Login to your account</strong>
                </div>

                <!-- panel body -->
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="post" action="./php_scripts/login.php">

                        <!-- username -->
                        <div class="form-group" id="form-username">
                            <label class="col-sm-3 control-label" for="username">Username:</label>
                            <div class="col-sm-9">
                                <input class="form-control" type="text" name="username" placeholder="Account username" required>
                            </div>
                        </div>

                        <!-- password -->
                        <div class="form-group" id="form-password">
                            <label class="col-sm-3 control-label" for="password">Password:</label>
                            <div class="col-sm-9">
                                <input class="form-control" type="password" name="password" placeholder="Account password" required>
                            </div>
                        </div>

                        <!-- form submit/reset buttons -->
                        <div class="form-group last">
                            <div class="col-sm-offset-3 col-sm-9">
                                <p>
                                  <?php

                                    // Get page redirect message and print it here
                                    if (isset($_GET["message"]))
                                    {
                                      echo $_GET["message"];
                                    }

                                  ?>
                                </p>
                                <button type="submit" class="btn btn-success btn-sm">
                                    Login
                                </button>
                                <button type="reset" class="btn btn-danger btn-sm">
                                    Reset
                                </button>
                                </BR>
                                <span>Forgot password? <a href="./forgot.php">click here</a></span>
                            </div>
                        </div>

                    </form>
                </div>

                <!-- panel footer -->
                <div class="panel-footer">
                    <span>Problems logging in? <a href="#">Contact me</a></span>
                </div>

            </div>
        </div>
    </div>
</div>
