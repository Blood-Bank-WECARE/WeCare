<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Centers Location</title>
    <link rel="stylesheet" href="lang.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <script type="text/javascript">
    function googleTranslateElementInit() {
    new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
    }

    </script>
    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
</head>
<body>
<div id="overlay"></div>
<header> 
    <?php
    include "navbar.php";
    include 'config.php';
    ?>    
    <?php
// session_start();
    
    if(isset($_POST['submit'])){
    
    $center_id=$_POST['center_id'];
    $name=$_POST['name'];
    $type=$_POST['type'];
    $address=$_POST['address'];
    $city=$_POST['city'];
    $state=$_POST['state'];
    $pincode=$_POST['pincode'];
    $contact=$_POST['contact'];
    $timing=$_POST['timing'];
    echo "<script>
    alert(`$name`);
    </script>";
    
    

    $sql="INSERT INTO centers values('{$center_id}','{$name}','{$address}','{$city}','{$state}','{$pincode}','{$type}','{$contact}','{$timing}')";
    $result=mysqli_query($conn,$sql);
  
	if(!$result)
	{
		echo "Error : ".$sql."<br>".mysqli_error($conn);
	}
    

    }

    
    ?>

    </header>
    <header>
    <div id="google_translate_element" class="lang_trans"></div>

    </header>
    <div>
    <table class="table_ table-hover" style="border-color:black;">
        <thead >
            <tr>
                <th class="text-center">Center_Id</th>
                <th class="text-center">Name</th>
                <th class="text-center">Type</th>
                <th class="text-center">Address</th>
                <th class="text-center">City</th>
                <th class="text-center">State</th>
                <th class="text-center">Pincode</th>
                <th class="text-center">Contact</th>
                <th class="text-center">Timings</th>
            </tr>
        </thead>
        <tbody>
        </div>
            
        <?php

            $sql ="select * from centers";

            $query =mysqli_query($conn, $sql);

            while($rows = mysqli_fetch_assoc($query))
            {
        ?>

            <tr>
            <td class="py-2" ><?php echo $rows['Center_ID']; ?></td>
            <td class="py-2" ><?php echo $rows['Name']; ?></td>
            <td class="py-2" ><?php echo $rows['Type']; ?></td>
            <td class="py-2" ><?php echo $rows['Address']; ?></td>
            <td class="py-2" ><?php echo $rows['City']; ?> </td>
            <td class="py-2" ><?php echo $rows['State']; ?> </td>
            <td class="py-2" ><?php echo $rows['Pincode']; ?></td>
            <td class="py-2" ><?php echo $rows['Contact No.']; ?> </td>
            <td class="py-2" ><?php echo $rows['Timings']; ?> </td>
            </tr>
                
        <?php
            }

        ?>
        </tbody>
    </table>
    <div class="add-button">
    <a href="">
                <button class="add-buttonn" onfocus="myFunction()">+ Add Center Details</button>
            </a>
    </div>

    <div id="popup_frm_div">
        <form action="add_centers.php" class="pop-up_form" method="post" name="form1">
            <p class="tag add_tag">Center ID:</p>
            <input name="center_id" type="text" placeholder="Center ID" class="inpt_frm">
            <p class="tag add_tag">Name:</p>
            <input name="name" type="text" placeholder="Name" class="inpt_frm"> <br>
            <p class="tag add_tag">Type:</p>
            <input name="type" type="text" placeholder="Type" class="inpt_frm"> 
            <p class="tag add_tag">Address:</p>
            <input name="address" type="text" placeholder="Address" class="inpt_frm">  <br>
            <p class="tag add_tag">City:</p>
            <input name="city" type="text" placeholder="City " class="inpt_frm">
            <p class="tag add_tag">State:</p>
            <input name="state" type="text" placeholder="State " class="inpt_frm"> <br>
            <p class="tag add_tag">Pincode:</p>
            <input name="pincode" type="text" placeholder="Pincode " class="inpt_frm"> 
            <p class="tag add_tag">Contact No. :</p>
            <input name="contact" type="text" placeholder="Contact No. " class="inpt_frm"> <br>
            <p class="tag add_tag">Timings:</p>
            <input name="timing" type="text" placeholder="Timings " class="inpt_frm"> <br><br>
            <div class="add-button">
                <button type="submit" name="submit" class="buttonn">Add</button> 
                <button class="buttonn" onfocus="myFunction()">Close</button>
            </div>
        </form>
    </div>



    <script>
        function myFunction() {
        var x = document.getElementById("popup_frm_div");
            if (x.style.display === "block") {
                x.style.display = "none";
            } else {
                x.style.display = "block";
            }
            var y = document.getElementById("overlay");
            if (y.style.display === "block") {
                y.style.display = "none";
            } else {
                y.style.display = "block";
            }

        }

        
</script>
<script>
            if ( window.history.replaceState ) {
                window.history.replaceState( null, null, window.location.href );
            }
        </script> 
</body>
</html>