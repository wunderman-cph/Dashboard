<?php

  /* Return command output */

  function getCommand($c) {

    $output = shell_exec($c);
    return $output;

  }

  /* Return log file output */

  function getFile($file) {

    session_start();
    $handle = fopen($file,'r');

    if (isset($_SESSION['offset'])) {
      $data = stream_get_contents($handle, -1, $_SESSION['offset']);
      echo nl2br($data);
    } else {
      fseek($handle, 0, SEEK_END);
      $_SESSION['offset'] = ftell($handle);
    } 
    exit();

  }

?>