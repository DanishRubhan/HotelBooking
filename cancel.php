<?php

$conn=mysqli_connect("localhost","root","","system");

$N=$_GET['id'];
$query="DELETE FROM hotel WHERE id='$N'";

$data=mysqli_query($conn,$query);

if($data){
    echo"Record deleted ";
}
?>