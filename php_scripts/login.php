<?php

  // Includes
  $config = include(__DIR__ . "/sql_config.php");
  $functions = include(__DIR__ . "/functions.php");

  // Start a session
  if (session_id() == "")
    session_start();

  // Get form data
  $username = $_POST["username"];
  $password = $_POST["password"];

  // Create the SQL connection
  $mysqli = mysqli_connect($config["sql_host"], $config["sql_username"], $config["sql_password"], $config["sql_database"], $config["sql_port"]);

  // Redirect with error message if connection to db failed
  if (mysqli_connect_errno())
  {
    redirect("../status.php", "Error during login", "Error: Can't connect to the target SQL database. <a href='./login.php'>Go back</a>");
    exit();
  }

  // Check if username and password matches
  $q_username = mysqli_escape_string($mysqli, $username);
  $q_password = mysqli_escape_string($mysqli, sha1_password($username, $password));
  if ($result = mysqli_query($mysqli, "SELECT username FROM account WHERE username='$q_username' AND sha_pass_hash='$q_password'"))
  {
    if ($result->num_rows != 0)
    {
      $row = $result->fetch_array(MYSQLI_ASSOC);
      $column_username = $row["username"];
      $_SESSION["username"] = $column_username;
      redirect("../marea.php", NULL, NULL);
    }
    else
    {
      redirect("../status.php", "Error during login", "Error: Invalid username or password. <a href='./login.php'>Go back</a>");
    }

    mysqli_free_result($result);
  }
  else
  {
    redirect("../status.php", "Error during login", "Error: Failed to execute an SQL statement! Please contact site administrators. <a href='./login.php'>Go back</a>");
  }

  // Close the SQL connection
  mysqli_close($mysqli);

  // Close the session
  session_commit();

?>
