<div class="container">
    <div class="row vertical-center-100">
        <div class="col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3 col-xs-9 col-xs-offset-1">
            <div class="panel panel-inverse">

                <!-- panel header -->
                <div class="panel-heading">
                    <strong>
                        <?php
                            // Get page redirect title and print it here
                            if (isset($_GET["title"]))
                            {

                              // Color the title b
                              if (isset($_GET["message"]))
                              {
                                if (stripos($_GET["message"], 'error') !== false)
                                {
                                  echo "<span class='text-danger'>";
                                  echo $_GET["title"];
                                  echo "</span>";
                                }
                                else if (stripos($_GET["message"], 'warning') !== false)
                                {
                                  echo "<span class='text-warning'>";
                                  echo $_GET["title"];
                                  echo "</span>";
                                }
                                else if (stripos($_GET["message"], 'success') !== false)
                                {
                                  echo "<span class='text-success'>";
                                  echo $_GET["title"];
                                  echo "</span>";
                                }
                              }
                              else
                              {
                                echo $_GET["title"];
                              }
                            }
                        ?>
                    </strong>
                </div>

                <!-- panel body -->
                <div class="panel-body">
                  <?php
                      // Get page redirect message and print it here
                      if (isset($_GET["message"]))
                      {
                        echo $_GET["message"];
                      }
                  ?>
                </div>

                <!-- panel footer -->
                <div class="panel-footer">
                    <span>Problems with something? <a href="#">Contact me</a></span>
                </div>

            </div>
        </div>
    </div>
</div>
