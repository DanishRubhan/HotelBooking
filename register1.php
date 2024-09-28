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
            background-image: linear-gradient(rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0.75)), url(account1.webp);
            height:109vh;
            background-size: cover;
            background-position: center;
        }          
           
        .signup{
            width: 300px;
            height:85vh;
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
            width: 100px;
            padding: 9px 0;
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
    <h3><a href="first1.php">BACK TO HOME</a></h3>
            <div class="signup">
                
        
                <h1>CREATE NEW ACCOUNT</h1>
                <form action="validation2.php" method="POST">
                   
                        <label for="name">Enter the Name</label>

                        <input type="text" id="name" name="name" placeholder="Enter the name" required><br><br>
                    
                        <label for="mobile">Mobile no</label>

                        <input type="text" id="mobile" name="mobile" placeholder="Enter the mobile no." required><br><br>

                        <label for="email">Email</label>

                        <input type="email" id="email" name="email" placeholder="Enter the email id" required><br><br>

                   
                        <label for="password">Password</label>

                        
                        <input type="password" id="password" name="password" placeholder="Enter the password"
                            required><br><br>
                  
                    <button>SUBMIT</button>

                </form>
            </div>

    </div>


</body>

</html>
