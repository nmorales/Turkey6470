<?php

  // Information about Jobble database
  $host = "sql.mit.edu";
  $user = "tfleish";
  $pass = "turkey";
  $db = "tfleish+test";

  // Connect to database
  $ms = mysql_pconnect($host, $user, $pass);
  if ( !$ms ){
    echo "Error connecting to database.\n";
  }

  // Select relevant database
  mysql_select_db($db);
?>