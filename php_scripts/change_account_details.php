<?php

    // Includes
    if (isset($sql_config) == false)
        $sql_config = include(__DIR__ . "/sql_config.php");

    // Start a session
    if (session_id() == "")
        session_start();

    // Create the SQL connection
    $mysqli = mysqli_connect($sql_config["sql_host"], $sql_config["sql_username"], $sql_config["sql_password"], $sql_config["sql_database"], $sql_config["sql_port"]);

    // Redirect with error message if connection to db failed
    if (mysqli_connect_errno())
    {
        echo "Error: Can't connect to the target SQL database.";
        return false;
    }

    $q_email = mysqli_real_escape_string($mysqli, $_SESSION["account"]["email"]);
    $sql_query = "SELECT * FROM realmd.account WHERE realmd.account.email='$q_email'";
    if ($result = mysqli_query($mysqli, $sql_query))
    {
        if ($result->num_rows != 0)
        {
            $new_email = $_POST["new_email"];
            $query= "UPDATE (email) FROM realmd.account WHERE realmd.account.email='$new_email'";
            mysqli_query($mysqli, $query));
        }
        mysqli_free_result($result);

    else
    {
        echo "Error: Failed to execute an SQL statement! Please contact site administrators.";
        return false;
    }

    /* redirect("../status.php", "Error during login", "Error: Invalid username or password. <a href='./login.php'>Go back</a>"); */

    // Close the SQL connection
    mysqli_close($mysqli);
?>