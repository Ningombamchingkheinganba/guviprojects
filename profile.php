<!DOCTYPE html>
<html lang="en">
<?php 
session_start();
if(!isset($_SESSION['email'])){
  header("location: login.php");
}
$email = $_SESSION['email'];
?>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/profile.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <title>Profile</title>
</head>

<body>
  <?php 
    include('config.php');
    $sql = mysqli_query($conn, "SELECT * FROM users WHERE email = '$email' ");
    if(mysqli_num_rows($sql) > 0){
      $row = mysqli_fetch_assoc($sql);
    };
  ?>

  <div class="row">
    <div class="profile col-xl-8">
      <div class="profile__top" >
        <h2><?php echo $row['email']; ?></h2>
      </div>
      <div class="profile__bottom">
        <label for="">Name</label>
        <h4><?php echo $row['name']; ?></h4>
        <label for="">Email</label>
        <h4><?php echo $row['email']; ?></h4>
        <label for="">Phone</label>
        <h4><?php echo $row['phone']; ?></h4>
        <label for="">D.O.B</label>
        <h4><?php echo $row['dob']; ?></h4>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
    crossorigin="anonymous">
  </script>
  <script src="./jQuery/jquery-3.6.1.js" ></script>
</body>

</html>