<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="lang.css">
</head>
<style>
   body{
    background-image: url('img/register.jpg');
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: cover;
    }
</style>
<body>
<?php 

include "navbar.php";

?>
<?php
// session_start();
    include 'config.php';
    if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $gender=$_POST['gender'];
    $blood_grp=$_POST['blood_grp'];
    $aadhaar=$_POST['aadhaar'];
    $dob=$_POST['dob'];
    $contact=$_POST['phone'];
    $email=$_POST['email'];
    $state=$_POST['state'];
    $district=$_POST['district'];
    $city=$_POST['city'];
    $password=$_POST['pass'];
    $con_password=$_POST['cpass'];
    
    if($password==$con_password && strlen($password)>8){
    $mysql="INSERT INTO user (name,email,pwd) values('{$name}','{$email}','{$password}')";
    $result=mysqli_query($conn,$mysql);
    echo $result;

    $sql="INSERT INTO details (name, gender, blood_grp, aadhaar_no, date, contact_no, email, state, district, city) values('{$name}','{$gender}','{$blood_grp}','{$aadhaar}','{$dob}','{$contact}','{$email}','{$state}','{$district}','{$city}')";
    $result1=mysqli_query($conn,$sql);
    echo $result1;
    
    if($result1 && $result){
        echo "<script> alert('User created and details saved successfully!');
        window.location='login.php';
        </script>";
    }
    else{
        echo $conn->error;
        // echo "<script> alert('User not registered!');
        // </script>";

    }
}
    }

    
    ?>
    <div>
    <div id="google_translate_element" class="lang_trans"></div>

</div>
        <div class="main">
            <div id="donate">
                <form action="register.php" class="formmm" method="post" name="form1">
                    
                    <h4>PERSONAL DETAILS and SIGNUP</h4>
                    <p class="tag">Full Name :</p>
                    <input name="name" type="text" placeholder="Full Name" required> <br>
                    <p class="tag"> Select Gender :</p>
                    <select name="gender" id="" required> <br>
                        <option value="select">Select Gender</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="Other">Other</option>
                    </select>
                    <br>
                    <p class="tag">Blood Group :</p>
                    <select name="blood_grp" id="blood_grp" required> <br>
                        <option value="select">Select Blood Group </option>
                        <option value="A+">A+</option>
                        <option value="A-">A-</option>
                        <option value="B+">B+</option>
                        <option value="B-">B-</option>
                        <option value="AB+">AB+</option>
                        <option value="AB-">AB-</option>
                        <option value="O+">O+</option>
                        <option value="O-">O-</option>
                    </select>
                    <p class="tag">Aadhaar Card No. :</p>
                    <input name="aadhaar" type="text" placeholder="Aadhaar Card No." required> <br>
                    <p class="tag">Date of Birth :</p>
                    <input name="dob" type="date" placeholder="dd/mm/yyyy" required> <br>
                    <hr style="height:3px; border-width:0;color: white;background-color: white">
                    
                    <h4>CONTACT DETAILS</h4> 
                    <p class="tag">Contact Number :</p>
                    <input name="phone" type="number" required> <br>
                    <p class="tag">Email Id :</p>
                    <input type="email" name="email" id=""> <br>
                    <hr>
                    <h4>ADDRESS DETAILS</h4>
                    <p class="tag">State :</p>
                    <input name="state" type="text" required> <br>
                    <p class="tag">District :</p>
                    <input name="district" type="text" required> <br>
                    <p class="tag">City :</p>
                    <input name="city" type="text" required> <br>
                    <br>
                    <hr>
                    <h4>Password</h4>
                    <p class="tag">Password :</p>
                    <input name="pass"  id="pass" type="password" placeholder="Password" required> <br>
                    <p class="tag">Confirm Password :</p>
                    <input name="cpass" id="cpass" type="password" placeholder="Confirm Password" required> <br>
                    <input type="checkbox" name="check" id="check" required>
                    <label for="check">I agree to the terms and conditions.</label>
                    <br>
                    <div class="burger">
                    <a href="login.php">
                    <input class="buttonn" type="button" value="Back">
                    </a>
                    <button class="buttonn" name="submit" type="submit" value="submit" onclick="ValidateEmail(document.form1.email); ValidatePass(document.form1.pass); Checkpass()">Submit</button>

                    <!-- <input class="buttonn" type="submit" name="submit" value="Save">  -->
                    <input class="buttonn" type="reset" value="Reset">
                    

                    </div>
                </form>
            </div>
    
        </div>
        <!-- <footer>
            <div class="foot">&copy; Made by Kashish Phulwani & Aryan Vidyarthi</div>
        </footer> -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
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