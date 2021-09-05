<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="donor.css">

</head>
<body>
	<header>
<?php
	include "navbar.php";
	?>
	</header>
	<?php
	include "config.php";
	$pasta = $_GET['id'] ;
	// echo $_GET['id'];

	$sql = "SELECT * from details where blood_grp = '$pasta' ";
	$result=mysqli_query($conn,$sql);
	if(!$result)
	{
		echo "Error : ".$sql."<br>".mysqli_error($conn);
	}
	$rows=mysqli_fetch_assoc($result);
	
	?>
	<h1>Donor details</h1>
 				<?php 
                    do{
                ?>

		<div class="pizza">
		<span id="namee" class="det">Name: <?php echo $rows['name'] ?></span>
		<span class="det">Blood Group: <?php echo $rows['blood_grp']?></span> <br>
		<span id="genderr" class="det">Gender: <?php echo $rows['gender'] ?></span>
		<span id="num" class="det">Contact Number: <?php echo $rows['contact_no'] ?></span>
		<div id="addr" class="det">Address: <?php echo $rows['city'].",&nbsp;";
	 								echo $rows['district'].",&nbsp;";
	 								echo $rows['state']?></div>
	</div>

	<?php
                    }while($rows=mysqli_fetch_assoc($result))
                ?>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script>
            if ( window.history.replaceState ) {
                window.history.replaceState( null, null, window.location.href );
            }
        </script> 
</body>
</html>