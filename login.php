<!doctype html>
<html>

<head>
  <title>Webtech | Login</title>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Zen+Kaku+Gothic+Antique:wght@300;400;500;700&display=swap" rel="stylesheet">
  <!-- <link rel="stylesheet" href="./styles/main.css"> -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>


<body class="container mt-5 pt-5">
  <?php
  include('components/header.php');

  // if already logged in, redirect to logout
  if (isset($_SESSION['user_token'])) {
    header('Location: logout.php');
  }
  ?>


  <main>
    <div class="container text-center">
      <img class='header-img rounded-circle' src="./images/chat.png" alt="Chat Icon" width="150" height="150">
    </div>
    <div class="container-sm bg-white border p-2 m-2">
      <form method="post">
        <div class="mb-3 text-center">
          <label for="SignIn" class="form-label">Please Sign In</label>
          <input type="text" name="username" id="username" class="form-control" placeholder="Username">
        </div>
        <div class="mb-3">
          <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>
        <div class="btn-group mb-3" role="group" aria-label="Basic example">
          <a href="./register.php" type="button" class="btn btn-secondary">Register</a>
          <input type="submit" class="btn btn-primary" value="Login">
        </div>
      </form>
    </div>
  </main>
  <?php

  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $token = $service->login($username, $password);
    if ($token) {
      $_SESSION['user_token'] = $token;
      $_SESSION['username'] = $username;
      header('Location: friends.php');
    }
    else {
      echo '<div class="alert alert-danger mt-2" role="alert">
        Username or password is incorrect.
      </div>';
    }
  }

  ?>

</body>

</html>