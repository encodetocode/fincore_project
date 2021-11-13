<?php
// it display the header depending on the conditions , if not logged in, if logged in and which usertype
if(!isset($_SESSION["ID"])){?>
<nav class="navbar navbar-dark bg-dark" id = "mynav">
<div class="container-fluid">
<span class="navbar-brand mb-0 h1">Navbar</span>

</div>
</nav>
<?php } elseif(isset($_SESSION["ID"])){
    if($_SESSION["usertype"] == "Manager"){
    ?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark" id = "mynav">
  <a class="navbar-brand" href="manager_page.php">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="manager_getusers.php">Users</a>
      <a class="nav-item nav-link e" href="../Logout.php">Logout</a>
    </div>
  </div>
</nav>
<?php }elseif($_SESSION["usertype"] == "User"){ ?>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark" id = "mynav">
  <a class="navbar-brand" href="user_page.php">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="user_profile.php">Profile</a>
      <a class="nav-item nav-link e" href="../Logout.php">Logout</a>
    </div>
  </div>
</nav>
<?php } ?>
<?php } ?>