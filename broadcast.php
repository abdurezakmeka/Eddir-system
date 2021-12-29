<?php 
session_start();

    include("connection.php");
    include("functions.php");

    $user_data = check_login($con);

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Payments</title>
    <link rel="stylesheet" href="style.css"> 
    <script src='https://cdn.scaledrone.com/scaledrone.min.js'></script>
    <script
    src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha256-pasqAKBDmFT4eHoN2ndd6lN370kFiGUFyTiUHWhU7k8="
    crossorigin="anonymous"></script>

</head>
<body>
    <nav>
        <ul class="menu">
            <li class="logo"><a href="homepage.php">ሰኔ ፴</a></li>
         
            </li>
            <li class="item button secondary"><a onclick="window.location.href='logout.php';">Log out</a></li>
            <li class="toggle"><span class="bars"></span></li>
        </ul>
    </nav>
    <main>
        <div class="container">
            <div class="content">
                <div>
                    <video id="localVideo" autoplay muted></video>
                    <div class="live">LIVE</div>

                </div>

            </div>
            
        </div>
    </main>

     <footer class="app-footer">
            <ul>
                <li>
                    <a href="./homepage.php"><i class="fa fa-home"></i></a> 
                    Home
                </li>

                <li>
                    <a href="./broadcast.php"><i class="fa fa-video-camera"></i></a>
                    Broadcast
                </li>

                <li>
        
                    <a href="./pay.php"><i class="fa fa-money"></i></a> 
                    Payment
                </li>               

                 <li>
                    <a href="./broadcastam.php"><i class="fa fa-language"></i></a>
                    አማርኛ
                </li>
               

            </ul>
        </footer>

          <script>
        
    $(function() {
    $(".toggle").on("click", function() {
        if ($(".item").hasClass("active")) {
            $(".item").removeClass("active");
        } else {
            $(".item").addClass("active");
        }
    });
});
    </script>

    <script src="script.js"></script>
</body>
</html>