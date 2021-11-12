<?php
session_start();

if(isset($_SESSION["ID"])){
    if($_SESSION["usertype"] == "Manager"){
        header("location:../Manager/manager_page.php");
    exit();
    }
    

    include '../database.php';
    include '../User/User_db_func.php';
    include '../User/User.php';
    $username_ses = $_SESSION["username"]; 
    $user = new User();
    //get user data
    $userdata = $user -> get_userdata($username_ses);

    ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <!-- css file -->
    <link rel="stylesheet" href="../styles/user_profile.css">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fincore Project</title>

    <!-- header navbar -->
    <?php include '../header.php';?>

</head>
<body>



<form id = "update-form" action="user_func.php" method= "post" >

<!-- return successful message and errors -->
<?php if(isset($_GET["error"])){ ?>
  <?php if($_GET["error"] == "none"){
    ?><div class="alert alert-success" role="alert">
    Your Profile have been updated successfully
  </div>
  <?php }elseif($_GET["error"]) {?>

  <div class="alert alert-danger" role="alert">
  <?= $_GET["error"]?>
</div>
<?php } } ?>
<h5>Personal Information:</h5>
    <div class = "row">
        <div class = "col">

  <div class="mb-3">
    <label for="First name" class="form-label">First Name</label>
    <input type="text" class="form-control" name = "firstname" value = "<?= $userdata[0]["firstname"]?>" id = "firstname_field" placeholder = "Enter Your First Name" >
  </div>
</div>

        <div class = "col">
  <div class="mb-3">
    <label for="Last name" class="form-label">Last Name</label>
    <input type="text" class="form-control" name = "lastname" value = "<?= $userdata[0]["lastname"]?>" id = "lastname_field" placeholder = "Enter Your Last Name" >
  </div>
</div>
</div>


<div class="mb-3">
  <label for="Date of Birth" class="form-label">Date Of Birth</label>
  <input type="date" class="form-control" name = "birthdate" value = "<?= $userdata[0]["birthdate"]?>" id = "datebirth_field" placeholder = "Enter Your Date Of Birth" >
</div>


<div class = "row">
        <div class = "col">

  <div class="mb-3">
    <label for="Country" class="form-label">Country</label>
    <input type="text" class="form-control" name = "country" value = "<?= $userdata[0]["country"]?>" id = "country_field" placeholder = "Enter Your Country" >
  </div>
</div>

        <div class = "col">
  <div class="mb-3">
    <label for="Nationality" class="form-label">Nationality</label>
    <input type="text" class="form-control" name = "nationality" value = "<?= $userdata[0]["nationality"]?>" id = "nationality_field" placeholder = "Enter Your Nationality" >
  </div>
</div>
</div>

<div class="mb-3">
  <label for="Address" class="form-label">Address</label>
  <input type="text" class="form-control" name = "address" maxlength="100" value = "<?= $userdata[0]["address"]?>" id = "address_field" placeholder = "Enter Your Adress" >
</div>
  
<hr>

<h5>Contact Information:</h5>
  <div class="mb-3">
    <label for="Email" class="form-label">Email Address</label>
    <input type="email" class="form-control" name = "email" value = "<?= $userdata[0]["email"]?>" id = "email_field" placeholder = "Enter Your Email Address">
  </div>

  <div class="mb-3">
    <label for="PhoneNumber" class="form-label">Phone Number</label>
    <input type="tel" class="form-control" name = "phonenumber" value = "<?= $userdata[0]["phonenumber"]?>" maxlength="7" id = "password_field" placeholder = "Enter Your Phonenumber" >
  </div>

  <button type="submit" class="btn btn-primary" name = "update">Update</button>
</form>
    

<?php include "../footer.php";?>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>

<?php } ?>