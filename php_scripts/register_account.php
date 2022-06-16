<?php

  // Includes
  $sql_config = include(__DIR__ . "/sql_config.php");
  $functions = include(__DIR__ . "/functions.php");

  // Get form data
  $username = $_POST["username"];
  $email = $_POST["email"];
  $password = $_POST["password"];
  $password_repeat = $_POST["password_repeat"];

  // Check if form input is valid
  if (check_for_symbols($username) == true || check_for_symbols($password) == true || check_for_symbols($password_repeat) == true)
  {
    redirect("../status.php", "Error during registration", "Error: Your username or password contains invalid characters. <a href='./register.php'>Go back</a>");
    exit();
  }

  // Check if passwords match
  if (strcmp($password, $password_repeat) !== 0)
  {
    redirect("../status.php", "Error during registration", "Error: Passwords did not match. <a href='./register.php'>Go back</a>");
    exit();
  }

  // Check if password length is in set bounds
  $password_length = strlen($password);
  if ($password_length < 6 || $password_length > 16)
  {
    redirect("../status.php", "Error during registration", "Error: Password length must be in between 6 to 16 characters. <a href='./register.php'>Go back</a>");
    exit();
  }

  // Create the SQL connection
  $mysqli = mysqli_connect($sql_config["sql_host"], $sql_config["sql_username"], $sql_config["sql_password"], $sql_config["sql_database"], $sql_config["sql_port"]);

  // Redirect with error message if connection to db failed
  if (mysqli_connect_errno())
  {
    redirect("../status.php", "Error during registration", "Error: Can't connect to the target SQL database. <a href='./register.php'>Go back</a>");
    exit();
  }

  // Check if username exists
  $q_username = mysqli_escape_string($mysqli, $username);
  if ($result = mysqli_query($mysqli, "SELECT username FROM account WHERE username='$q_username'"))
  {
    if ($result->num_rows != 0)
    {
      redirect("../status.php", "Error during registration", "Error: an Account with that name already exists. <a href='./register.php'>Go back</a>");
      exit();
    }

    mysqli_free_result($result);
  }

  // Register the new account
  $q_password = mysqli_escape_string($mysqli, sha1_password($username, $password));
  $q_email = mysqli_escape_string($mysqli, $email);
  $sql_query = "INSERT INTO realmd.account (username, sha_pass_hash, email) VALUES ('$q_username', '$q_password', '$q_email');";
  $sql_query .= "INSERT INTO realmd.account_access (id, gmlevel, RealmID) VALUES (realmd.account.id, '0', '-1')";
  if ($result = mysqli_multi_query($mysqli, $sql_query))
  {
    redirect("../status.php", "Registration successful!", "Success: The registration was completeted successfully. You can now use ur account infos to log on either the game server or the website to view/edit your account informations. <a href='./login.php'>Login here</a>");
    mysqli_free_result($result);
  }
  else
  {
    redirect("../status.php", "Error during registration", "Error: Couldn't insert the new account into target database! Please contact site administrators. <a href='./register.php'>Go back</a>");
  }

  // Close the SQL connection
  mysqli_close($mysqli);

?>
