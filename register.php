


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <!-- css file -->
    <link rel="stylesheet" href="styles/register.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fincore Project</title>

    <!-- will check if account is logged in if yes take it to its page by checking checking user type -->
    <?php include 'check_if_loggedin.php';?>
    <!-- header navbar -->
    <?php include 'header.php';?>

</head>
<body>



<form id = "register-form" action="Signup/signup_func.php" method= "post" >
<?php if(isset($_GET["error"])){ ?>
  <div class="alert alert-danger" role="alert">
  <?= $_GET["error"]?>
</div>
<?php } ?>

  <div class="mb-3 ">
    <label for="Username" class="form-label">Username</label>
    <input type="text" class="form-control" name = "username" id="username_field" maxlength="30" placeholder = "Enter Your Username" required>
  </div>

  <div class="md-3">
    <label for="UserType" class="form-label">User Type</label>
    <select class="form-select" id="usertype_selection" name = "usertype" required>
      <option selected disabled value="">Choose Type Of User..</option>
      <option>User</option>
      <option>Manager</option>
    </select>
</div>
    <div class = "row">
        <div class = "col">

  <div class="mb-3">
    <label for="First name" class="form-label">First Name</label>
    <input type="text" class="form-control" name = "firstname" id = "firstname_field" placeholder = "Enter Your First Name" required>
  </div>
</div>

        <div class = "col">
  <div class="mb-3">
    <label for="Last name" class="form-label">Last Name</label>
    <input type="text" class="form-control" name = "lastname" id = "lastname_field" placeholder = "Enter Your Last Name" required>
  </div>
</div>
</div>
  
  <div class="mb-3">
    <label for="Email" class="form-label">Email Address</label>
    <input type="email" class="form-control" name = "email" id = "email_field" placeholder = "Enter Your Email Address">
  </div>

  <hr>

  <div class="mb-3">
    <label for="Password" class="form-label">Password</label>
    <input type="password" class="form-control" name = "password" maxlength="20" id = "password_field" placeholder = "Enter Your Password" required>
  </div>

  <div class="mb-3">
    <label for="Password" class="form-label">Confirm Password</label>
    <input type="password" class="form-control" name = "repeated_password" maxlength="20" id = "repeated_password_field" placeholder = "Enter Your Password" required>
  </div>

  <div>
      <p>you already have an account? <a href="index.php">Log In</a> </p>  
  </div>

  <button type="submit" class="btn btn-primary" name = "signup">Sign up</button>
</form>
    



<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>


<?php include "footer.php";?>

</body>
</html>