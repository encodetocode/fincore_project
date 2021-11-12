<?php 
session_start();


if(isset($_SESSION["ID"])){
  if($_SESSION["usertype"] == "User"){
    header("location:../User/user_page.php");
    exit();
  }
  
  include '../database.php';
  include './Manager_db_func.php';
  include './Manager.php';

  $manager = new Manager();
  $getusers = $manager -> getusers();
  
  
  ?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <!-- css file -->
    <link rel="stylesheet" href="../styles/manager_getusers.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fincore Project</title>

    <!-- header navbar -->
    <?php include '../header.php';?>



    <script language="JavaScript" type="text/javascript">
      function checkDelete(){
    return confirm('Are you sure?');
      }
    </script>

</head>
<body>
  
  <div class = "wrapper">
<?php if(isset($_GET["error"])){ ?>
  <?php if($_GET["error"] == "none"){
    ?><div class="alert alert-success" role="alert">
      User got deleted successfully.
</div>
  <?php }elseif($_GET["error"]) {?>

  <div class="alert alert-danger" role="alert">
  <?= $_GET["error"]?>
</div>
<?php } } ?>

<h1 class = "m-3" id = "allusers"> All Users: </h1>

<div class = "table-responsive">
<table class="table">
  <thead class="thead-light">
    <tr>

      <th scope="col">#</th>
      <th scope="col">ID</th>
      <th scope="col">Username</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Birthdate</th>
      <th scope="col">Country</th>
      <th scope="col">Nationality</th>
      <th scope="col">Address</th> 
      <th scope="col">Email Address</th> 
      <th scope="col">Phone Number</th> 
      <th scope="col">Delete</th> 
    </tr>
  </thead>
  <tbody>
  <?php for($i = 0; $i < sizeof($getusers);$i++){?>
    <tr>
      <th scope="row"><?= $i ?></th>
      <td><?php echo $getusers[$i]["ID"]?></td>
      <td><?php echo $getusers[$i]["username"]?></td>
      <td><?php echo $getusers[$i]["firstname"]?></td>
      <td><?php echo $getusers[$i]["lastname"]?></td>
      <td><?php echo $getusers[$i]["birthdate"]?></td>
      <td><?php echo $getusers[$i]["country"]?></td>
      <td><?php echo $getusers[$i]["nationality"]?></td>
      <td><?php echo $getusers[$i]["address"]?></td>
      <td><?php echo $getusers[$i]["email"]?></td>
      <td><?php echo $getusers[$i]["phonenumber"]?></td>
      <td> <a href = "delete_user.php?username=<?php echo $getusers[$i]['username']; ?>" onclick="return checkDelete()"> <button type="button" class="btn btn-primary">Delete</button> </a></td>
    </tr>
    <?php } ?>
  </tbody>
</table>
</div>



</div>

<?php include "../footer.php";?>



<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>



</html>

<?php } ?>