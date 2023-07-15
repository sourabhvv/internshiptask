
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Hello, world!</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
        
<section class="text-center">
<!-- Background image -->
<div class="p-5 bg-image" id="main">
       <div class="navbar">
        <div class="navbar-container">
        <a href="#" class="navbar-item">TASK_NEW</a>
       <a href="home.php" class="navbar-item">Registration</a>
       <a href="login.php" class="navbar-item">Login</a>
        </div>
    </div>
    </div>
<!-- Background image -->

<?php

$error = $_GET['error'] ?? null;

if ($error === "invalid_input") {
    echo ' <h1>Invalid email or contact number</h1>';
} elseif ($error === "empty_input") {
    echo "Please provide both email and contact number";
}
?>

<div class="card mx-4 mx-md-5 shadow-5-strong"  id="card" >
  <div class="card-body py-5 px-md-3">

    <div class="row d-flex justify-content-center">
      <div class="col-lg-6">
        <h2 class="fw-bold mb-1">Registration FORM</h2>


        <form action="connect.php" method="post">
          <!-- 2 column grid layout with text inputs for the first and last names -->            
              <div class="form-outline mb-3">
                <input type="text" id="form3Example1" class="form-control" name="name" />
                <label class="form-label" for="form3Example1">Full name</label>
              </div>
            
          <!-- Email input -->
          <div class="form-outline mb-3">
            <input type="text" id="form3Example3" class="form-control" name="email" />
            <label class="form-label" for="form3Example3">Email address</label>
          </div>
          
          <div class="form-outline mb-3">
                <input type="text" id="form3Example1" class="form-control" name="contact"/>
                <label class="form-label" for="form3Example1">contact no</label>
              </div>
          <!-- Password input -->
          <div class="form-outline mb-3">
            <input type="password" id="form3Example4" class="form-control" name = "password" />
            <label class="form-label" for="form3Example4">Password</label>
          </div>

          <div class="form-group">
            <label for="exampleFormControlTextarea1">Address</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="address"></textarea>
          </div>

          <!-- Checkbox -->
          <!-- Submit button -->
          <button type="submit" class="btn btn-primary btn-block mb-4">
            Sign up
          </button>          
        </form>
      </div>
    </div>
  </div>
</div>
</section>


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
