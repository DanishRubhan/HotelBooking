<?php

session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Bookings</title>
    <style>
        table{
            border-collapse:collapse;
            width:100%;
            color:#588c7e;
            font-size:25px;
            text-align:left;
            border:2px solid #588c7e;
        }
        th{
            background-color:#588c7e;
            color:white;
        }
        h1{
            color:red;
            text-decoration:underline black;
        }
        
    </style>
</head>

<body>
    <a href="myaccount.php">BACK TO PROFILE</a>
    <h1>MY BOOKINGS</h1>
    <BR>
    <table>
        <tr>
            <th>Name</th>
            <th>Mobile_no</th>
            <th>Arrival_date</th>
            <th>Departure_date</th>
            <th>roomtype</th>
            <th>Adults</th>
            <th>Children</th>
            <th>Rooms</th>
            <th>ACTION</th>
        </tr>
        <?php
       $conn=mysqli_connect("localhost","root","","system");
       if($conn-> connect_error){
            die("connection Failed:".$conn-> connect_error);
       }
       $c=$_SESSION['name'];

       $sql="SELECT * from hotel where Name='$c' ";
       $result = $conn-> query($sql);

       if($result-> num_rows > 0){
            while($row= $result-> fetch_assoc()){
                echo "<tr><td>".$row["Name"] ."</td><td>".$row["Mobile_no"] ."</td><td>".$row["Arrival_date"] ."</td><td>" .$row["Departure_date"] . "</td><td>" .$row["roomtype"] ."</td><td>" .$row["Adults"] ."</td><td>" .$row["Children"] ."</td><td>" .$row["Rooms"] ."</td><td><a href='cancel.php?id=".$row['id']."'>CANCEL RESERVATION</td></tr>";
            }
            echo "</table>";

       }
       else{
           echo "0 result";
       }
       $conn-> close();
       ?>

    </table>
</body>

</html>