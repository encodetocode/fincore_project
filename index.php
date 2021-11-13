<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <!-- css file -->
    <link rel="stylesheet" href="styles/index.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fincore Project</title>


    <?php include 'check_if_loggedin.php';?>
    <!-- header navbar -->
    <?php include 'header.php';?>

</head>
<body>
<div class = "wrapper">

<form id = "login-form" action = "Login/login_func.php" method = "post">

<?php if(isset($_GET["error"])){ ?>
  <?php if($_GET["error"] == "none"){
    ?><div class="alert alert-success" role="alert">
    You have registered successfully. Please Login.
  </div>
  <?php }elseif($_GET["error"]) {?>

  <div class="alert alert-danger" role="alert">
  <?= $_GET["error"]?>
</div>
<?php } } ?>

  <div class="mb-3 ">
    <label for="Username" class="form-label">Username</label>
    <input type="text" class="form-control" name = "username" id="username_field" maxlength="30" placeholder = "Enter Your Username" required>
  </div>



  <div class="mb-3">
    <label for="Password" class="form-label">Password</label>
    <input type="password" class="form-control" name = "password" id = "password_field" maxlength="20" placeholder = "Enter Your Password" required>
  </div>

  <div class="md-3">
    <label for="UserType" class="form-label">User Type</label>
    <select class="form-select" name = "usertype" required>
      <option selected disabled value="">Choose Type Of User..</option>
      <option>User</option>
      <option>Manager</option>
    </select>
  </div>
  <br>
  <div>
      <p>you dont already have an account? <a href="register.php">Sign Up</a> </p>  
  </div>

  <button type="submit" class="btn btn-primary" name = "login" id ="login-button" >Login</button>
</form>
    
  </div>
<?php include "footer.php";?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>

</html>