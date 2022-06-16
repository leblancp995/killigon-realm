<div class="container">
        <div class="row">
                <div class="col-md-9 col-md-offset-1 col-sm-9 col-sm-offset-1 col-xs-9 col-xs-offset-1">
                        <div class="panel panel-default">
                            <form class="form-horizontal" role="form" method="post" action="./php_scripts/change_account_details.php">

                                <!-- panel header -->
                                <div class="panel-heading">
                                        <strong>Edit your account details</strong>
                                </div>

                                <!-- panel body -->
                                <div class="panel-body">

                                            <!-- email -->
                                            <div class="form-group" id="form-email">
                                                    <label class="col-sm-3 control-label" for="email">New email:</label>
                                                    <div class="col-sm-9">
                                                            <input class="form-control" type="email" name="email" placeholder="New email" required>
                                                    </div>
                                            </div>

                                            <!-- password -->
                                            <div class="form-group" id="form-password">
                                                    <label class="col-sm-3 control-label" for="password">New password:</label>
                                                    <div class="col-sm-9">
                                                            <input class="form-control" type="password" name="password" placeholder="New password" minlength="6" required>
                                                    </div>
                                            </div>

                                            <!-- password repeat -->
                                            <div class="form-group" id="form-password-repeat">
                                                    <label class="col-sm-3 control-label" for="password">Repeat new password:</label>
                                                    <div class="col-sm-9">
                                                            <input class="form-control" type="password" name="password_repeat" placeholder="Repeat new password" minlength="6" required>
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
                                                                    Change details
                                                            </button>
                                                            <button type="reset" class="btn btn-danger btn-sm">
                                                                    Reset
                                                            </button>
                                                    </div>
                                            </div>

                                    </form>
                                </div>

                                <!-- panel footer -->
                                <div class="panel-footer">
                                        <span>Problems with something? <a href="#">Contact us</a></span>
                                </div>

                        </div>
                </div>
        </div>
</div>