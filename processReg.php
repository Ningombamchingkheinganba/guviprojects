<?php

if(empty($_POST['email']) && empty($_POST['password']) && empty($_POST['cPassword']) && $_POST['name']){
  echo "empty";
}else if(empty($_POST['name'])){
  echo "empty_name";
}else if(empty($_POST['email'])){
  echo "empty_email";
}else if(empty($_POST['password'])){
  echo "empty_password";
}else if(empty($_POST['cPassword'])){
  echo "empty_password";
}else if($_POST['cPassword'] !== $_POST['password']){
  echo "no-match";
}else{
  
  include('config.php');

  $name = $_POST['name'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $cPassword = $_POST['cPassword'];

  $sql = "SELECT * FROM users WHERE email = '$email' ";
  $res = mysqli_query($conn, $sql);
  $count = mysqli_num_rows($res);

  if($count === 0){

    $sql = "INSERT INTO users (name, email, passcode) VALUES ( '$name', '$email', '$password') ";
    $res = mysqli_query($conn, $sql);
    if($res){
      echo "ok";
    }
  }else{
    echo 'unavail';
  }
};