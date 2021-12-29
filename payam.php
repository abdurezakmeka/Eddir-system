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
    <script
    src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha256-pasqAKBDmFT4eHoN2ndd6lN370kFiGUFyTiUHWhU7k8="
    crossorigin="anonymous"></script>
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

    <script>
 function disableSubmit() {
  document.getElementById("btn").disabled = true;
 }

  function activateButton(element) {

      if(element.checked) {
        document.getElementById("btn").disabled = false;
       }
       else  {
        document.getElementById("btn").disabled = true;
      }

  }
</script>

</head>
<body onload="disableSubmit()">
    <nav>
        <ul class="menu">
            <li class="logo"><a href="homepageam.php">ሰኔ ፴</a></li>
            <li class="item button secondary"><a onclick="window.location.href='logout.php';">ውጣ</a></li>
            <li class="toggle"><span class="bars"></span></li>
        </ul>
    </nav>
    <main>
        <div class="container">
            <h2>በሲቢኢ ብር ይክፈሉ</h2>
            <div class="content">
               <center>
                    <form id="form" method="post" action="sendam.php">
                      <input id="input" type="text" name="name" placeholder="Full name"><br>
                    <input id="input" type="text" name="txnid" placeholder="Txn ID"><br>
                    <select id="input" name="reason">
                        <option value="nothing" selected="selected">⠀ ⠀ ⠀የከፍሉት ክፍያ አይነት⠀  ⠀ ⠀</option>
                        <option>የወንድ እድር(50 ብር)</option>
                        <option>የሴት እድር(50 ብር)</option>
                        <option>የጥበቃ (50 ብር)</option>
                    </select><br>
                    
                    <input type="checkbox" name="terms" id="terms" onchange="activateButton(this)"> <a style="color: blue;" href="termsandconditionsam.php"> በአተገባበሩና መመሪያው </a>ተስማምቻለው<br><br>
                    
                    <input id="btn" type="submit" name="btn" value="አረጋግጥ">   

                    </form>
                   
                </center>

            </div>
            
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
                    <a href="./pay.php"<i class="fa fa-language"></i></a>
                    English
                </li>

            </ul>
        </footer>
</body>
</html>