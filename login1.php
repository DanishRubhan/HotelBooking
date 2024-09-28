<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hilton hotel login page</title>
    <style>
         body{
            margin: 0;
            padding: 0;
            background-image: linear-gradient(rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0.75)), url(login1.jpg);
            background-size: cover;
            background-position:top;
        }          
           
        .signup{
            width: 300px;
            height:55vh;
            background:transparent;
            padding:20px;
            margin-top:5%;
            margin-left:40%;
            text-align:center;
        }
        .signup h1{
            color:white;
            font-size:2em;
            margin-bottom :30px;
            text-align:center;
            text-decoration:underline grey;
        }
        .signup input{
            border-radius:20px;
            padding:10px;
            margin:10px 0;
            width:90%;
            border:1px solid #999;
            outline:none;
        }
        .signup label{
            text-align:center;
            color:white;
            font-size:20px;
        }
        .signup button {
            width: 100px;
            padding: 9px 0;
            text-align: center;
            border-radius: 25px;
            background: transparent;
            color: white;
            cursor: pointer;
            text-transform: uppercase;

        }

        .signup button:hover {
            background-color: #51c4d3;
        }
        h3 a{
            color:white;
            
        }
    </style>

</head>

<body>
    <h3><a href="first1.php">BACK TO HOME</a></h3>
    <div class="signup">
        
                <h1>LOGIN</h1>
                <form action="validation1.php" method="POST">
              
                    <div class="form-group">
                        <label for="name">Enter the Name</label>
                        <input type="text" id="name" name="name" placeholder="Enter the name" required><br><br>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password" placeholder="Enter the password"
                            required><br><br>
                    </div>
                    <button>submit</button>


                    <?php
                    if(isset($_GET['error'])==true){
                        echo'<font color="#ff0000"><p align="center">Sorry Username && Password not match</p></font>';

                    }
                  ?>

                </form>
    </div>


</body>

</html>
