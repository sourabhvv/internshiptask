<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>hello from login side</h1>
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



<div class="card mx-4 mx-md-5 shadow-5-strong"  id="card" >
  <div class="card-body py-5 px-md-3">

    <div class="row d-flex justify-content-center">
      <div class="col-lg-6">
        <h2 class="fw-bold mb-1">Login here</h2>


        <form action="connectlogin.php" method="post">
          <!-- 2 column grid layout with text inputs for the first and last names -->            
            
          <!-- Email input -->
          <div class="form-outline mb-3">
            <input type="text" id="form3Example3" class="form-control" name="email" />
            <label class="form-label" for="form3Example3">Email address</label>
          </div>
          
         
          <!-- Password input -->
          <div class="form-outline mb-3">
            <input type="password" id="form3Example4" class="form-control" name = "password" />
            <label class="form-label" for="form3Example4">Password</label>
          </div>

          <!-- Checkbox -->
          <!-- Submit button -->
          <button type="submit" class="btn btn-primary btn-block mb-4">
            LOgin
          </button>          
        </form>
      </div>
    </div>
  </div>
</div>
</section>

</body>
</html>