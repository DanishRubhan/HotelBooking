<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update profile</title>
   
    <style>
         body{
            margin: 0;
            padding: 0;
            background-image: linear-gradient(rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0.75)), url(account1.webp);
            height:109vh;
            background-size: cover;
            background-position: center;
        }          
           
        .signup{
            width: 300px;
            height:75vh;
            background:#fff;
            padding:20px;
            margin-top:3%;
            margin-left:40%;
            text-align:center;
        }
        .signup h1{
            color:#1c8adb;
            margin-bottom :30px;
            text-align:center;
        }
        .signup input{
            border-radius:20px;
            padding:10px;
            margin:10px 0;
            width:90%;
            border:1px solid #999;
            outline:none;
        }
        .signup{
            text-align:left;
        }
        .signup button {
            width: 150px;
            padding: 5px 0;
            text-align: center;
            border-radius: 25px;
            background: transparent;
            color: black;
            cursor: pointer;
            text-transform: uppercase;

        }

        .signup button:hover {
            background-color: #009688;
        }
    </style>

</head>

<body>
   
    <div class="first">
    <h3><a href="myaccount.php">BACK TO PROFILE</a></h3>
            <div class="signup">
                <h1>UPDATE PASSWORD</h1>
                <form action="" method="POST">

                        <label for="email">Email</label>

                        <input type="email" id="email" name="email" placeholder="Enter the email id" required><br><br>

                   
                        <label for="oldpassword">OLD Password</label>

                        
                        <input type="password" id="oldpassword" name="oldpassword" placeholder="Enter the old password"
                            required><br><br>

                         <label for="password">NEW Password</label>

                        
                        <input type="password" id="password" name="newpassword" placeholder="Enter the new password" required><br><br>
                  
                    <button name="submit">CHANGE PASSWORD</button>
                    <br>
                
                   
                   
     <?php
    $conn=mysqli_connect("localhost","root","","userregistration");

    if(isset($_POST['submit'])){
        $email=$_POST['email'];
        $oldpassword=$_POST['oldpassword'];
        $newpassword=$_POST['newpassword'];

        $query=mysqli_query($conn," SELECT email, password  from usertable where email='$email'  AND password='$oldpassword'");

        $num = mysqli_fetch_array($query);

        if($num>0){

            $con=mysqli_query($conn,"UPDATE usertable set password='$newpassword' where password='$oldpassword' AND email='$email'");
            echo'<font color="#ff0000"><p align="center">Password Changed Successfully</p></font>';
        }else{
            echo '<font color="#ff0000"><p align="center">Old Password does not match</p></font>';
        }
    }

    ?>

                </form>
            </div>

    </div>


</body>

</html>
