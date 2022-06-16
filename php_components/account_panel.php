<?php include __DIR__ . "/../php_scripts/get_account_info.php";?>

<div class="container">
    <div class="row">
        <div class="col-md-9 col-md-offset-1 col-sm-9 col-sm-offset-1 col-xs-9 col-xs-offset-1">
            <div class="panel panel-inverse">

                <!-- panel header -->
                <div class="panel-heading">
                    <strong>Your account information</strong>
                </div>

                <!-- panel body -->
                <div class="panel-body">
                  <form class="form-horizontal" role="form">

                      <!-- account name, email, gmlevel, joindate -->
                      <div class="form-group" id="form-account-name">
                        <div class"row">
                          <div class="col-sm-2 col-sm-offset-1">
                            <label class="control-label" for="account-name">Account name:</label>
                            <p class="form-control"> <?php echo $_SESSION["account"]["username"]; ?></p>
                          </div>
                          <div class="col-sm-3">
                            <label class="control-label" for="account-name">Account email:</label>
                            <p class="form-control"> <?php echo $_SESSION["account"]["email"]; ?></p>
                          </div>
                          <div class="col-sm-2">
                            <label class="control-label" for="account-name">GM Level:</label>
                            <p class="form-control"> <?php echo $_SESSION["account"]["gmlevel"]; ?></p>
                          </div>
                          <div class="col-sm-3">
                            <label class="control-label" for="account-name">Creation date:</label>
                            <p class="form-control"> <?php echo $_SESSION["account"]["joindate"]; ?></p>
                          </div>
                        </div>
                      </div>

                      <!-- account last_login, last_ip, failed_logins, expansion -->
                      <div class="form-group" id="form-account-name">
                        <div class"row">
                          <div class="col-sm-3 col-sm-offset-1">
                            <label class="control-label" for="account-name">Last login:</label>
                            <p class="form-control"> <?php echo $_SESSION["account"]["last_login"]; ?></p>
                          </div>
                          <div class="col-sm-3">
                            <label class="control-label" for="account-name">Last IP Address:</label>
                            <p class="form-control"> <?php echo $_SESSION["account"]["last_ip"]; ?></p>
                          </div>
                          <div class="col-sm-2">
                            <label class="control-label" for="account-name">Failed logins:</label>
                            <p class="form-control"> <?php echo $_SESSION["account"]["failed_logins"]; ?></p>
                          </div>
                          <div class="col-sm-2">
                            <label class="control-label" for="account-name">Expansion id:</label>
                            <p class="form-control"> <?php echo $_SESSION["account"]["expansion"]; ?></p>
                          </div>
                        </div>
                      </div>

                      <!-- account locale, locked -->
                      <div class="form-group" id="form-account-name">
                        <div class"row">
                          <div class="col-sm-2 col-sm-offset-1">
                            <label class="control-label" for="account-name">Locale:</label>
                            <p class="form-control"> <?php echo $_SESSION["account"]["locale"]; ?></p>
                          </div>
                          <div class="col-sm-2">
                            <label class="control-label" for="account-name">Locked:</label>
                            <p class="form-control"> <?php echo ($_SESSION["account"]["locked"]) ? "true" : "false"; ?></p>
                          </div>
                        </div>
                      </div>

                  </form>
                </div>

            </div>
        </div>
    </div>
</div>

