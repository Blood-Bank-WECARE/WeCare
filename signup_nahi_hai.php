<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignUp Page</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="lang.css">
</head>
<body>
<?php
    include 'config.php';
    if(isset($_POST['submit'])){
    $name=$_POST['fname'];
    $email=$_POST['email'];
    $password=$_POST['pass'];
    $con_password=$_POST['cpass'];
    if($password==$con_password && strlen($password)>8){
    $sql="INSERT INTO user (name,email,pwd) values('{$name}','{$email}','{$password}')";
    $result=mysqli_query($conn,$sql);
    if($result){
        echo "<script> alert('User created successfully!');
        window.location='login.php';
        </script>";
    }
}
    }

                 
?>
    <header> 
    <?php
    include "navbar.php";
    ?>    
    </header>

    <header>
    <div id="google_translate_element" class="lang_trans"></div>

    </header>
    <div class="login">
        <h1>Signup</h1>
        <form name="form1" action="signup.php" method="post" class="form">
            <input name="fname" type="text" placeholder="First Name" required> <br>
            <input name="email" type="email" placeholder="Email" required> <br>
            <input name="pass"  id="pass" type="password" placeholder="Password" required> <br>
            <input name="cpass" id="cpass" type="password" placeholder="Confirm Password" required> <br>
            <button name="submit" type="submit" value="submit" onclick="ValidateEmail(document.form1.email); ValidatePass(document.form1.pass); Checkpass()">Submit</button>
            <!-- <input class="app-form-button" type="submit" value="submit" name="submit"></input> -->

        </form>
    </div>
    <footer></footer>
    <script src="index.js"></script>
    <script>
      if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
      }
    </script> 
    <script type="text/javascript">
    function googleTranslateElementInit() {
    new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
    }
    </script>

    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
</body>
</html>