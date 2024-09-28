
<?php
session_start();
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'userregistration');
$name=$_POST['name'];
$mobile=$_POST['mobile'];
$email=$_POST['email'];
$pass=$_POST['password'];

$s = "select * from usertable where name= '$name' ";
$result=mysqli_query($con,$s);


$num= mysqli_num_rows($result);

if($num == 1){
    echo"Username already taken";
}else{
    $reg="insert into usertable(name,mobile,email,password) values('$name','$mobile','$email','$pass')";
    mysqli_query($con,$reg);
    header('location:first1.php');
    echo"Registration successfull";
}
?>