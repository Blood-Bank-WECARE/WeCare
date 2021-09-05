<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
// session_start();
    include 'config.php';
    if(isset($_POST['submit'])){
    $blood_grp=$_POST['blood_grp'];
    echo "<script>
    window.location = 'donor_details.php?id=$blood_grp';
    </script>";

    
}
    
    ?>
    <header>
      <?php
      include "navbar.php" ;
      ?> 
  </header>
        <div class="main">
            <div id="donate">
                <form action="receiver.php" class="formmm" method="post">
                    <h4>RECEIVER DETAILS</h4>
                    
                    <p class="tag"> Blood Group :</p>
                    <select name="blood_grp" id="blood_grp" required> <br>
                        <option value="select">Select Blood Group </option>
                        <option value="A">A+</option>
                        <option value="A-">A-</option>
                        <option value="B">B+</option>
                        <option value="B-">B-</option>
                        <option value="AB">AB+</option>
                        <option value="AB-">AB-</option>
                        <option value="O">O+</option>
                        <option value="O-">O-</option>
                    </select>
                    <br>
                    <br>
                    <div class="burger">
                    <input class="buttonn" type="submit" name="submit" value="Proceed">
                    
                    </div>
                </form>
            </div>
    
        </div>
        <footer></footer>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script>
            if ( window.history.replaceState ) {
                window.history.replaceState( null, null, window.location.href );
            }
        </script> 
</body>
</html>