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
<header> 
    <?php
    include "navbar.php";
    ?>    
    </header>
    <header>
    <div id="google_translate_element" class="lang_trans"></div>

    </header>
    <div>
    <table class="table table-hover table-striped table-condensed table-bordered" style="border-color:black;">
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

            include 'config.php';

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
                
        <?php
            }

        ?>
        </tbody>
    </table>
    <div class="add-button">
    <a href="">
                <button class="add-buttonn">+ Add Center Details</button>
            </a>
    </div>

    <div>
        <form action="" class="pop-up_form">
            <p class="tag">Center ID:</p>
            <input type="text" placeholder="Center ID"> <br>
            <p class="tag">Name:</p>
            <input type="text" placeholder="Name"> <br>
            <p class="tag">Type:</p>
            <input type="text" placeholder="Type"> <br>
            <p class="tag">Address:</p>
            <input type="text" placeholder="Address">  <br>
            <p class="tag">City:</p>
            <input type="text" placeholder="City "> <br>
            <p class="tag">State:</p>
            <input type="text" placeholder="State "> <br>
            <p class="tag">Pincode:</p>
            <input type="text" placeholder="Pincode "> <br>
            <p class="tag">Contact No. :</p>
            <input type="text" placeholder="Contact No. "> <br>
            <p class="tag">Timings:</p>
            <input type="text" placeholder="Timings "> <br>

            <button class="buttonn">Add</button> 
            <button class="buttonn">Close</button>
        </form>
    </div>

</body>
</html>