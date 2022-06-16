<?php

  // Includes
  $srv_config = include(__DIR__ . "/srv_config.php");

  // Check if the result is cached, echo contents if true, lifetime 60 seconds
  $cachedFile = __DIR__ . "/../cache/serverstatus";
  if (file_exists($cachedFile) && time() - 60 < filemtime($cachedFile))
  {
    echo file_get_contents($cachedFile);
    return true;
  }

  // String that we will return
  $returnStr = "<span>";

  // Test if realm server is online
  $returnStr .= "Login: ";
  $socket = @fsockopen($srv_config["srv_host_realm"], $srv_config["srv_port_realm"], $errorNo, $errorStr, 0.1);
  if ($socket != false)
  {
    $returnStr .= "<span class=\"text-success\">Online</span>";
    fclose($socket);
  }
  else
  {
    $returnStr .= "<span class=\"text-danger\">Offline</span>";
  }

  $returnStr .= ", ";

  // Test if world server is online
  $returnStr .= "Realm: ";
  $socket = @fsockopen($srv_config["srv_host_world"], $srv_config["srv_port_world"], $errorNo, $errorStr, 0.1);
  if ($socket != false)
  {
    $returnStr .= "<span class=\"text-success\">Online</span>";
    fclose($socket);
  }
  else
  {
    $returnStr .= "<span class=\"text-danger\">Offline</span>";
  }

  $returnStr .= "</span>";

  // Cache the result on the server side
  $cachedFp = fopen($cachedFile, "w");
  fwrite($cachedFp, $returnStr);
  fclose($cachedFp);

  // Output the result
  echo $returnStr;

?>
