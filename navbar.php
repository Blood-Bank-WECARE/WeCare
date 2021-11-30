

<?php
session_start();
include 'config.php';
error_reporting(E_ALL ^ E_WARNING);
if(isset($_POST['logout'])){
  $_SESSION['login'] = "false";
  echo "<script> alert('Logged out!');
        </script>";
}

$user_ = $_SESSION['email'];
$sql = "SELECT * FROM user where email='$user_'";
$res = mysqli_query($conn,$sql);
$user_details = mysqli_fetch_array($res);

?>

<div id="overlay"></div>

<nav class="navbar navbar-expand-lg navbar-dark" id="nav-color">
  <div class="container-fluid">
    <a href="index.php">
    <img src="img/blood.png" alt="" width="120px"> </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation" id="nav-color">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">HOME</a>
        </li>
        <li class="nav-item">
          <a class="nav-link hidee" href="receiver.php" id="get">GET BLOOD</a>
        </li>
        <li class="nav-item">
          <a class="nav-link show" href="donor_centers.php" id="search">DONATION CENTER LOCATIONS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link hidee" href="add_centers.php" id="add">ADD CENTER LOCATIONS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#about">ABOUT US</a>
        </li>
        <!-- <li class="nav-item">
          <a class="nav-link" href="#">CONTACT US</a>
        </li> -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          CONTACT US
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">FAQs</a></li>
            <li><a class="dropdown-item" href="chatbot.php">Talk to us</a></li>
            <!-- <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li> -->
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link show" href="login.php" id="login">LOGIN/SIGN-UP</a>
        </li>
        <li class="nav-item">
          <!-- <a class="nav-link hidee" href="login.php" id="logout">LOGOUT</a> -->
          <!-- <form action="index.php" method="post"> -->
            <!-- <input type="submit" class="nav-link hidee" id="logout" name="logout" value="LOGOUT"> -->
          <!-- <button  class="nav-link hidee" id="logout" name="logout">LOGOUT</button> -->
          <!-- </form> -->
          <li class="nav-item dropdown hidee" id="logout" style="left: 0">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          <?php echo $user_details['name'] ?>
          </a>
          <ul class="dropdown-menu dropdown-menu-lg-end" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <!-- <li><hr class="dropdown-divider"></li> -->
            <!-- <li><a class="dropdown-item" href="#">Something else here</a></li> -->
            <form action="index.php" method="post">
            <!-- <input type="submit" class="nav-link hidee" id="logout" name="logout" value="LOGOUT"> -->
          <!-- <button  class="nav-link hidee" id="logout" name="logout">LOGOUT</button> -->
          <input class="dropdown-item" type="submit" id="log-out" name="logout" value="Logout">
          </form>
          </ul>
        </li>
        </li>
        <br>
        <br>
        
      </ul>
      <br>
    </div>
  </div>
</nav>

<?php
// echo $_SESSION['admin'];

    if($_SESSION['login']=="true" && $_SESSION['admin'] == "true"){
      echo "<script>
      document.getElementById('search').classList.replace('show','hidee');
      document.getElementById('add').classList.replace('hidee','show');
      document.getElementById('login').classList.replace('show','hidee');
      document.getElementById('logout').classList.replace('hidee','show');
      document.getElementById('get').classList.replace('hidee','show');
      </script>";
  }

    else if($_SESSION['login']=="true" && $_SESSION['admin'] == "false"){
    echo "<script>
    document.getElementById('login').classList.replace('show','hidee');
    document.getElementById('logout').classList.replace('hidee','show');
    document.getElementById('get').classList.replace('hidee','show');
    document.getElementById('search').classList.replace('hidee','show');
      document.getElementById('add').classList.replace('show','hidee');
    </script>";
  }
  else{
    echo "<script>
    // document.getElementById('login').innerHTML = 'HI';
    
    </script>";

   }
  
    ?>
