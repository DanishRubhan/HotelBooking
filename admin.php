<?php

session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
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
        h2{
            color:darkgreen;
            text-decoration:underline black;
        }

        .table table{
            border-collapse:collapse;
            width:100%;
            color:#588c7e;
            font-size:20px;
            text-align:left;
            border:2px solid #588c7e;
        }
        .table th{
            background-color:#588c7e;
            color:white;
        }
  </style>
</head>
<body>

<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-3 sidenav">
      <h3>WELCOME ADMIN</h3>
      <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href="admin.php">Home</a></li>
        <li><a href="logout.php">LOGOUT</a></li>
      </ul><br>
    </div>

    <div class="col-sm-9">
      <h2>LIST OF USERS</h2>
    <BR>
    <table>
        <tr>
            <th>Name</th>
            <th>Mobile_no</th>
            <th>Email id</th>
        </tr>
        <?php
       $conn=mysqli_connect("localhost","root","","userregistration");
       if($conn-> connect_error){
            die("connection Failed:".$conn-> connect_error);
       }

       $sql="SELECT * from usertable where role!=1 ";
       $result = $conn-> query($sql);

       if($result-> num_rows > 0){
            while($row = $result-> fetch_assoc()){
                echo "<tr><td>".$row["name"] ."</td><td>".$row["mobile"] ."</td><td>".$row["email"] ."</td></tr>";
            }
            echo "</table>";

       }
       else{
           echo "0 result";
       }
       $conn-> close();
       ?>
    </table>
    <hr>
    <br>
    <br>
    <h2>LIST OF REGISTRATION</h2>
    <br>
    <div class="table">
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
        </tr>
        <?php
       $conn=mysqli_connect("localhost","root","","system");
       if($conn-> connect_error){
            die("connection Failed:".$conn-> connect_error);
       }

       $sql="SELECT * from hotel ";
       $result = $conn-> query($sql);

       if($result-> num_rows > 0){
            while($row= $result-> fetch_assoc()){
                echo "<tr><td>".$row["Name"] ."</td><td>".$row["Mobile_no"] ."</td><td>".$row["Arrival_date"] ."</td><td>" .$row["Departure_date"] . "</td><td>" .$row["roomtype"] ."</td><td>" .$row["Adults"] ."</td><td>" .$row["Children"] ."</td><td>" .$row["Rooms"] ."</td></tr>";
            }
            echo "</table>";

       }
       else{
           echo "0 result";
       }
       $conn-> close();
       ?>
    </table>
    </div>
</div>



</body>
</html>
