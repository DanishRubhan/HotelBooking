<?php

session_start();

$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'userregistration');
$name=$_POST['name'];
$pass=$_POST['password'];

$s = "select * from usertable where name= '$name' && password= '$pass' ";
$result=mysqli_query($con,$s);


$num= mysqli_num_rows($result);

if($num == 1){
    $row=mysqli_fetch_row($result);
    $_SESSION['name']=$row[0];
    $_SESSION['role']=$row[4];
    $_SESSION['name']=$name;

    if($row[4]==0){
    header('location:mini.php');
    }else{
   header('location:admin.php');
    }
}else{
   header('location:login1.php?error=1');
}
?>