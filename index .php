<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    <link rel="stylesheet" href="style.css"> 
    <script
    src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha256-pasqAKBDmFT4eHoN2ndd6lN370kFiGUFyTiUHWhU7k8="
    crossorigin="anonymous"></script>

</head>
<body>
    <nav>
        <ul class="menu">
            <li class="logo"><a href="index .php">ሰኔ ፴</a></li>
         
            </li>
            <li class="item button"><a href="loginam.php">ለመግባት</a></li>
            <li class="item button secondary"><a href="signupam.php">ለመመዝገብ</a></li>
            <li></li>
            <li class="toggle"><span class="bars"></span></li>
        </ul>
    </nav>
    <main>
        <div class="indexti">
            <h1>እንኳን ደህና መጡ</h1>
            <p>ይህ ድህረ ገፅ በኢትዩጵያ ማህበረሰብ ተጠቃሚነት ላይ ያተኮረ የእድርን አገልግሎት <br>የሚያቀል የሙከራ ድህረ ገፅ ነው</p>
            <a id="registerbtn" href="signupam.php">ይመዝገቡ</a>
        </div>
        <div class="images">
            <img class="shape" style="" src="ci.png">
            <img class="photo" style="" src="cu.png">
        </div>

    </main>

     <footer class="app-footer">
            <ul>
                <li>
                    <a href="./homepageam.php"><i class="fa fa-home"></i></a> 
                    መነሻ ገፅ 
                </li>
               
                <li>
                    <a href="./broadcastam.php"><i class="fa fa-video-camera"></i></a>
                    ቀጥታ ስርጭት
                </li>

                <li>
                    <a href="./payam.php"><i class="fa fa-money"></i></a> 
                    ክፍያ ለመፈፀም
                </li>

                 <li>
                    <a href="./index.php"<i class="fa fa-language"></i></a>
                    English
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
