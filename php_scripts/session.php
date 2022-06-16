<?php

  // Force HTTPS
  if($_SERVER["HTTPS"] != "on")
  {
    header("Location: https://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]);
    exit();
  }

  // Start a session
  if (session_id() == "")
    session_start();

  // Check if the result is cached, get contents if true, lifetime 60 seconds
  $cachedFile = __DIR__ . "/../cache/sessions";
  if (file_exists($cachedFile) && time() - 60 < filemtime($cachedFile))
  {
    $sessions = file_get_contents($cachedFile);
    return true;
  }

  // Count the number of active sessions
  $sessionsPath = session_save_path();
  $sessions = count(scandir(empty($sessionsPath) ? sys_get_temp_dir() : $sessionsPath)) - 2;

  // Cache the result on the server side
  $cachedFp = fopen($cachedFile, "w");
  fwrite($cachedFp, $sessions);
  fclose($cachedFp);

?>
