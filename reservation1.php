<?php

session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel management system</title>
</head>
<style>
    * {
        margin: 0;
        padding: 0%;
    }

    .first {
        width: 100%;
        height: 160vh;
        background-image: linear-gradient(rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0.75)), url('reser.jpg');
        background-size: cover;
        background-position: center;
    }

    .header {
        width: 100%;
        margin: auto;
        padding: 0;
        align-items: center;
        
    }

    .header img {
        width: 250px;
        cursor: pointer;
        margin-left:40%;
    }

    #titles h1 {
        color: white;
        text-transform: uppercase;
        text-align: center;
    }

    #titles h4 {
        color: white;
        text-align: center;
    }

    .forms {
        width: 35%;
        height: 55%;
        margin-left: 30%;
        margin-top: 2%;
        border: 2px solid black;
        background-color: rgba(0, 0, 0, 0.75);
        padding: 20px 30px;

    }

    .forms h1 {
        color: goldenrod;
    }

    .forms input {
        height: 30px;
        background-color: white;
    }

    .forms label {
        color: white;
        width: 200px;
        display: inline-block;
    }

    .buttons input {
        width: 100px;
        height: 50px;
        text-align: center;
        border-radius: 15px;
        background: transparent;
        color: white;
        cursor: pointer;
        text-transform: uppercase;
    }

    .buttons input:hover {
        background-color: #009688;
    }

    .header {
        width: 100%;
        margin: auto;
        padding: 0;
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .header img {
        width: 250px;
        cursor: pointer;

    }

    .header ul li {
        display: inline-block;
        list-style: none;
        margin: 0 20px;

    }

    .header ul li a {
        color: white;
        text-decoration: none;
        text-transform: uppercase;
    }

    .header a:hover {
        text-decoration: underline aquamarine;
    }

</style>

<body>
    <div class="first">
        <div class="header">
            <img src="Hilton_Hotels_and_Resorts.png">
        <ul>
                <li><a href="mini.php">BACK TO HOME</a></li>
        </ul>
</div>
        <div id="titles">
            <h1>HELLO <?php  echo $_SESSION['name']; ?></h1><br><br>
            <h1>hilton hotels & resorts</h1>
            <h4>A place to experience and enjoy life</h4>
        </div>
        <div class="forms">
            <form action="system.php" method="POST">
                <h1>RESERVATION</h1><br>
                <label for="name">Enter the Name</label>
                <input type="text" id="name" name="Name" value="<?php echo $_SESSION['name'];?>" required><br><br>
                <label for="mobile">Mobile no </label>
                <input type="tel" id="mobile" name="Mobile_no" placeholder="Enter the mobile no." required><br><br>
                <label for="arrival">Arrival date</label>
                <input type="date" id="arrival" name="Arrival_date" placeholder="Enter the arrival-date"
                    required><br><br>
                <label for="departure">Departure date</label>
                <input type="date" id="departure" name="Departure_date" placeholder="Enter the departure-date"
                    required><br><br>
                    <label for="roomtype">Select Roomtype</label>
                <select name="roomtype" id="roomtype">
                    <option value="single room">single room</option>
                    <option value="double room">double room</option>
                    <option value="triple room">triple room</option>
                    <option value="twinbed room">twinbed room room</option>
                    <option value="interconnected room">interconnected room</option>
                    <option value="quad room">quad room</option>
                </select><br><br>
                <label for="adults">Adults</label>
                <input type="number" min="0" max="100" id="adults" name="Adults" placeholder="1" style="width: 100px;"
                    required><br><br>
                <label for="children">Children</label>
                <input type="number" min="0" max="100" id="children" name="Children" placeholder="0"
                    style="width: 100px;" required><br><br>
                <label for="rooms">No. of rooms</label>
                <input type="number" min="1" max="100" id="rooms" name="Rooms" placeholder="1" style="width: 100px;"
                    required><br><br>
                <div class="buttons">
                    <input type="submit" name="save" value="BOOK NOW">
                </div>
            </form>
        </div>

    </div>

</body>

</html>