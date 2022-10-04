<?php

if(empty($_POST['email']) && empty($_POST['password'])){
  echo "empty";
}else if(empty($_POST['email'])){
  echo "empty_email";
}else if(empty($_POST['password'])){
  echo "empty_password";
}else{
  include('config.php');
  
  $email = $_POST['email'];
  $password = $_POST['password'];

  $sql = "SELECT * FROM users WHERE email = '$email' and passcode = '$password' ";
  $res = mysqli_query($conn, $sql);
  $count = mysqli_num_rows($res);

  if($count > 0){
    session_start();
    $_SESSION['email'] = $email;
    echo 'ok';
    exit();
  }else{
    echo 'wrong';
  }
}