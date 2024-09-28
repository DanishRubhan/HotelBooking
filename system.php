<?php
$server_name="localhost";
$username="root";
$password="";
$database_name="system";

$conn=mysqli_connect($server_name, $username, $password, $database_name);


if(isset($_POST['save']))
{
    $Name=$_POST['Name'];
    $Mobile_no=$_POST['Mobile_no'];
    $Arrival_date=$_POST['Arrival_date'];
    $Departure_date=$_POST['Departure_date'];
    $roomtype=$_POST['roomtype'];
    $Adults=$_POST['Adults'];
    $Children=$_POST['Children'];
    $Rooms=$_POST['Rooms'];

    $sql_query = "INSERT INTO  hotel (Name, Mobile_no , Arrival_date, Departure_date,roomtype, Adults, Children, Rooms) 
    VALUES ('$Name', ' $Mobile_no','$Arrival_date','$Departure_date','$roomtype','$Adults',' $Children','$Rooms')";
    if(mysqli_query($conn,$sql_query))
    {
        echo "<h1><center>Your registration is successfull!!<br>
        Thank You!!!!Come again <br> <a href='mini.php'>Click here for home page</a></h1></center> "; 
    }
    else{
        echo"Error:" .$sql ."" .mysqli_error($conn);
    }
    mysqli_close($conn);
}
?>