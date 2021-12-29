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
    <title>Home page</title>
    <link rel="stylesheet" href="style.css"> 
    <script
    src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha256-pasqAKBDmFT4eHoN2ndd6lN370kFiGUFyTiUHWhU7k8="
    crossorigin="anonymous"></script>

</head>
<body>
    <nav>
        <ul class="menu">
            <li class="logo"><a href="homepage.php">ሰኔ ፴</a></li>
            <li class="item button secondary"><a onclick="window.location.href='logout.php';">Log out</a></li>
            <li class="toggle"><span class="bars"></span></li>
        </ul>
    </nav>
    <main>
       <div class="root">
           <div class="holder">
                           <div style="overflow:auto">
              <div class="leftsidebar">
                <div class="leftsidebaritem"><b>TODAY PROGRAM</b></div>
                <div class="leftsidebaritem">02:00-5:00 : Muse & Ali </div>
                <div class="leftsidebaritem">05:00-8:00 : Teshome & Mustefa </div>
                <div class="leftsidebaritem">08:00-11:00 : Habtamu & Zinash </div>
              </div>

              <div class="nosidebar">
                
                <img src="edrr.jpg" style="width:100%;" >
              </div>

              <div class="rightsidebar" style="margin-top: 7px;">
                <div class="leftsidebaritem"><b>Notification</b></div>
                <div class="leftsidebaritem">New member named Abebe Belachew has joined sene30 EDIRR </div>
               <!-- <div class="leftsidebaritem">The National Ethiopia protests US decision to revoke duty-free access </div>
                <div class="leftsidebaritem">A local ethnic oromo media says TPLF killed dozens of Oromo Liberation Army</div>
                <div class="leftsidebaritem">UN lauds improving situation in Ethiopia</div>

            -->
              </div>
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
                    <a href="./homepageam.php"><i class="fa fa-language"></i></a>
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

</body>
</html>