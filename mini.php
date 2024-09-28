<?php

    session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Hilton hotels & resorts</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
        #about {
            padding: 80px 120px;
        }

        .thumbnail {
            padding: 0 0 15px 0;
            border-radius: 0;
        }

        .thumbnail p {
            margin-top: 15px;
            color: #555;
        }

        .btn {
            padding: 10px 20px;
            background-color: #333;
            color: #f1f1f1;
            border-radius: 0;
            transition: .2s;
        }

        .thumbnail>img {
            height: 400px;
            object-fit: cover;
        }
        #about h1{
            color:red;
        }
    </style>
</head>

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">

    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#myPage">HILTON</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="mini.php">HOME</a></li>
                    <li><a href="mini.php">ABOUT US</a></li>
                    <li><a href="reservation1.php">RESERVATION</a></li>
                    <li><a href="myaccount.php">MY ACCOUNT</a></li>
                    <li><a href="logout.php">LOGOUT</a></li>

                </ul>
            </div>
        </div>
    </nav>

    <div id="myCarousel" class="carousel slide" data-ride="carousel">

        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>


        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="background11.jpg" width="1400">
                <div class="carousel-caption">
                    <h3>HILTON HOTELS & RESORTS</h3>
                    <p>A PLACE TO EXPERIENCE AND ENJOY LIFE</p>
                </div>
            </div>

            <div class="item">
                <img src="background22.jpg" width="1400">
                <div class="carousel-caption">
                    <h3>HILTON HOTELS</h3>
                    <p>A DINNER WE WON'T FORGET</p>
                </div>
            </div>

            <div class="item">
                <img src="background33.jpg" width="1400">
                <div class="carousel-caption">
                    <h3>HILTON AQUA PARK</h3>
                    <p>A PLACE YOU WON'T FORGET</p>
                </div>
            </div>
        </div>

        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <div id="about" class="container text-center">
        <h1>Welcome <?php echo $_SESSION['name'];  ?></h1>
        <h3>HILTON HOTELS & RESORTS</h3>
        <p>FEEL A LUXIOUROUS STAY HERE</p>
        <p>The Hilton Hotel is an organisation within the private sector and is a public limited company which means you
            can buy shares. The main aims of The Hilton Hotel is to make a profit by selling different things such as
            room service, meals or even expanding the business to potentially maximize the sales and customers. They
            also wish to grow the business and to be successful.</p>
    </div>
    <hr>


    <div class="container text-center">
        <h3>ROOMS AVAILABLE</h3><br>
        <div class="row">
            <div class="col-sm-4">
                <div class="thumbnail">
                    <img src="single.jpg" class="img-responsive img-resize" style="width:100%" alt="Image">
                    <h4>SINGLE ROOM</h4>
                    <p>A room assigned to <b>one person</b> .May have one or more beds.

                        The room size or area of Single Rooms are generally between 37 m² to 45 m².</p>

                </div>
            </div>
            <div class="col-sm-4">
                <div class="thumbnail">
                    <img class="img-responsive img-resize" src="double.jpg" style="width:100%" alt="Image">
                    <H4>DOUBLE ROOM</H4>
                    <p>A room assigned to <b>two people</b>. May have one or more beds.

                        The room size or area of Double Rooms are generally between 40 m² to 45 m².</p>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="thumbnail">
                    <img src="triple1.webp" class="img-responsive img-resize" style="width:100%" alt="Image">
                    <H4>TRIPLE ROOM</H4>
                    <p>A room that can accommodate <b>three persons</b> and has been fitted with three twin beds, one
                        double
                        bed and one twin bed or two double beds.

                        The room size or area of Triple Rooms are generally between 45 m² to 65 m².</p>
                </div>
            </div>
        </div><br><br>
        <div class="row">
            <div class="col-sm-4">
                <div class="thumbnail">
                    <img src="twin.jpg" class="img-responsive img-resize" style="width:100%" alt="Image">
                    <h4>TWINBED ROOM</h4>
                    <p>A room with two twin beds. May be occupied by <b>one or more people</b>.

                        The room size or area of Twin Rooms are generally between 32 m² to 40 m².

                    </p>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="thumbnail">
                    <img src="inter.jpg" class="img-responsive img-resize" style="width:100%" alt="Image">
                    <H4>INTERCONNECTED ROOM</H4>
                    <p>Rooms with individual entrance doors from the outside and a connecting door between. Guests can
                        move between rooms without going through the hallway.

                        The room size or area of InterConnecting rooms are generally between 30 m² to 50 m².</p>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="thumbnail">
                    <img src="last.jpg" class="img-responsive img-resize" style="width:100%" alt="Image">
                    <H4>QUAD ROOM</H4>
                    <p>A room assigned to<b>four people</b> . May have two or more beds.

                        The room size or area of Quad Rooms are generally between 70 m² to 85 m².</p>
                </div>
            </div>
        </div>
    </div>
    <br>
    <hr>
    <br>
    <div class="footer">
        <div class="container text-center">
            <h3>CONTACT US</h3><br>
            <div class="row">
                <div class="col-sm-4">
                    <P> Our mission is simple – to help you grow your hospitality business. To discuss any of our
                        services
                        in more
                        detail,
                        please contact us by email or telephone and we will get back to you straight away. We look
                        forward
                        to hearing
                        from
                        you.</P>
                </div>
                <div class="col-sm-4">
                    <H4>ADDRESS</H4>
                    <P> Adress
                        114 Whitechapel High St,Chennai, E1 7PT</P>
                    <H4>Telephone</H4>
                    <P> +44 (0)20 3983 9423
                    </P>
                </div>
                <div class="col-sm-4">
                    <H4>E-MAIL</H4>
                    <P> hilton@hotels&resorts.co.uk
                    </P>
                </div>
            </div>
        </div>
    </div>
    </body>
    </html>