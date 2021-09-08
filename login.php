<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="lang.css">

</head>
<body>
    

<?php
session_start();
// echo $_SESSION['login'];
    include 'config.php';
    $_SESSION['login'] = "false";
    // $_SESSION['admin'] = "false";
    if(isset($_POST['submit'])){
        $email=$_POST['email'];
        $password=$_POST['pass'];
        if($email == "admin@gmail.com" && $password == "admin@1234"){
            $_SESSION['admin'] = "true"; 
            $_SESSION['login'] = "true";
            echo $_SESSION['admin'];
            echo "<script>
            alert('logged in');
            window.location='index.php';
            </script>";
        }
        else{
        $s =" select * from user where email = '$email' && pwd = '$password'";

        $result=mysqli_query($conn,$s);
        $num = mysqli_num_rows($result);
        if($num == 1){
            $_SESSION['login'] = "true";
            echo "<script>
            window.location='index.php';
            console.log('heyy')
            console.log(document.getElementById('login').innerText);

            // Welcome(num);
            </script>";
        }
        else{
            $_SESSION['login'] = "false";
            echo "<script> alert('Try again!');
            </script>";
        }
    }
}
?>
    <div>
        <br>
    </div>
    <header>
    <div id="google_translate_element" class="lang_trans"></div>
    </header>

  <div class="row">
      <div class="col-lg-1"></div>
        <div class="col-lg-5">
            <img src="img/login.svg" alt="">
        </div>
        <div class="col-lg-6">

            <div class="login">
                <h1>User Login</h1>
                <form name="form1" action="login.php" method="post" class="formmm">
                    <input id="email" type="text" placeholder="Email" name="email" required> <br>
                    <input id="pass" type="password" placeholder="Password" name="pass" required> <br>
                    
                <a href="index.php?id"> <button id="submit" name="submit" onclick="ValidateEmail(document.form1.email); ValidatePass(document.form1.pass)">Login</button> </a>
                
                </form>
                <a href="index.php?id"> <button id="back" name="submit">Back</button> </a>
                <p>Not a Member? <a href="register.php">Signup</a></p>
            </div>
        </div>
    </div>
    <footer></footer>

    <script src="index.js"></script>
    <script>
      if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
      }
    </script> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script type="text/javascript">
        function googleTranslateElementInit() {
        new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
        }
        </script>

        <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
</body>
</html>