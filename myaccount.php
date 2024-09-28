<?php

session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>MY ACCOUNT</title>
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

  </style>

</head>
<body>

<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-3 sidenav">
      <h4>MY ACCOUNT</h4>
      <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href="myaccount.php">HOME</a></li>
        <li><a href="bookings.php">MY BOOKINGS</a></li>
        <li><a href="update.php">UPDATE PROFILE</a></li>
        <li><a href="mini.php">BACK TO HOME</a></li>

      </ul><br>
    </div>

    <div class="col-sm-9">
      <h2>MY PROFILE</h2>

    <table>
    <tr>
    <th>Name</th>
    <th>mobile</th>
    <th>email</th>
    
</tr>
<?php
$conn=mysqli_connect("localhost","root","","userregistration");
if($conn-> connect_error){
    die("connection Failed:".$conn-> connect_error);
}
$c=$_SESSION['name'];

$sql="SELECT * from usertable where name='$c' ";
$result = $conn-> query($sql);

if($result-> num_rows > 0){
    while($row= $result-> fetch_assoc()){
        echo "<tr><td>".$row["name"] ."</td><td>".$row["mobile"] ."</td><td>".$row["email"] . "</td></tr>";
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


</body>
</html>
