<?php

@define('IP', @$_SERVER['SERVER_ADDR']);


// Absolute Path Constant
@define('URL', $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF']);


if (IP === "127.0.0.1") {
// Database Constants
  @define('DB_TYPE', "mysql");
  @define('DB_HOST', "localhost");
  @define('DB_USER', "root");
  @define('DB_PASS', "");
  @define('DB_DB', "dcsoft");
} elseif (IP === "50.28.15.25") {
// Database Constants
  @define('DB_TYPE', "mysql");
  @define('DB_HOST', "localhost");
  @define('DB_USER', "icsitpar_soft");
  @define('DB_PASS', "dcsoft@28");
  @define('DB_DB', "dcsoft");
} else {
  
}
?>
