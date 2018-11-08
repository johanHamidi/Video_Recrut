<?php
$user = 'root';
$password = 'root';
$db = 'video_recrut';
$host = 'localhost';
$port = 3333;

$link = mysqli_init();
$success = mysqli_real_connect(
   $link,
   $host,
   $user,
   $password,
   $db,
   $port
);
if(!$success){
  echo "erreur";
}
else {
  echo "ok";
}
?>
