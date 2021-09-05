<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Centers Location</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
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
</body>
</html>