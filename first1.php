<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hilton hotels & resorts</title>
    <style>
        * {
            margin: 0;
            padding: 0;

        }

        .first {
            width: 100%;
            height: 100vh;
            background-image: linear-gradient(rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0.75)), url(4.png);
            background-size: cover;
            background-position: bottom;
        }

        .content {
            width: 100%;
            position: absolute;
            text-transform: uppercase;
            top: 10%;
            text-align: center;
            color: white;
        }

        .content p {
            margin: 20px auto;
            line-height: 20px;
        }

        .content button {
            width: 200px;
            padding: 15px 0;
            text-align: center;
            margin: 20px 10px;
            border-radius: 25px;
            background: transparent;
            color: white;
            cursor: pointer;
            text-transform: uppercase;

        }

        .content button:hover {
            background-color: #009688;
        }
    </style>
</head>

<body>

    <div class="first">
        <div class="content">
            <h1>WECLOME TO <BR> HILTON HOTELS AND RESORTS</h1>
            <p>We aim to redefine a new dimension of <BR> luxury and relaxation.</p>

            <form action="login1.php">
                <button>login in</button>
            </form>
            <form action="register1.php">
                <button>create an account</button>
            </form>

        </div>

    </div>


</body>

</html>