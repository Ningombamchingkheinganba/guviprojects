<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <title>Login</title>
</head>

<body>
  <div class="row">
    <form action="" class="col-xl-3 col-lg-4 col-md-6 col-sm-8">
      <h1>Login</h1>
      <label for="email">Email</label>
      <input id='email' placeholder="Email" required type="email">
      <label for="password">Password</label>
      <input id='password' placeholder="Password" required type="password">
      <input id="submit" type="submit" value="Submit">
      <p>Don't have an account? <a href="./registration.php">Register</a></p>
      <div id="msg" class="p-1" ></div>
    </form>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
    crossorigin="anonymous">
  </script>
  <script src="./jQuery/jquery-3.6.1.js" ></script>
  <script src="./login.js"></script>
</body>

</html>