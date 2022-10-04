<?php
  define('DB_SERVER', 'sql6.freesqldatabase.com');
  define('DB_USERNAME', 'sql6523894');
  define('DB_PASSWORD', 'u17CBXVlU8');
  define('DATABASE', 'sql6523894');

  $conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DATABASE);

  if($conn === false){
    die("error".mysql_connect_error());
  }
?>