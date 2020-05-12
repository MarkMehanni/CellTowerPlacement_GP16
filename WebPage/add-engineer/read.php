<?php

$mysqli= NEW MYSQLI ('localhost', 'root', '', 'campaigners');
require_once ("operation.php");
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Changing_Committees</title>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Custom stylesheet -->
    <link rel="stylesheet" href="style.css">

</head>
<body>

 <div class="d-flex table-data">
            <table class="table table-striped table-dark">
                <thead class="thead-dark">
                    <tr>
					    <th>#</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Phone Number</th>
                        <th>Current Committee</th>
                        <th>New Committee</th>
                    </tr>
                </thead>


</body>
 <tbody id="tbody">
                   <?php


                 
                       $result = getData();

                       if($result){

                           while ($row = mysqli_fetch_assoc($result)){ ?>

                               <tr>
                                   <td data-id="<?php echo $row['id']; ?>"><?php echo $row['id']; ?></td>
                                   <td data-id="<?php echo $row['id']; ?>"><?php echo $row['fname']; ?></td>
                                   <td data-id="<?php echo $row['id']; ?>"><?php echo $row['lname']; ?></td>
                                   <td data-id="<?php echo $row['id']; ?>"><?php echo $row['pnumber']; ?></td>
								   <td data-id="<?php echo $row['id']; ?>"><?php echo $row['Ccommittee']; ?></td>
								   <td data-id="<?php echo $row['id']; ?>"><?php echo $row['Ncommittee']; ?></td>
                                   
                               </tr>

                   <?php
                           }

                       }
                   


                   ?>
                </tbody>
            </table>