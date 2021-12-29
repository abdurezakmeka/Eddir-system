<?php 
session_start();

    include("connection.php");
    include("functions.php");


    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        //something was posted
        $user_name = $_POST['user_name'];
        $password = $_POST['password'];

        if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
        {

            //save to database
            $user_id = random_num(20);
            $query = "insert into sene30users (user_id,user_name,password) values ('$user_id','$user_name','$password')";

            mysqli_query($con, $query);

            header("Location: login.php");
            die;
        }else
        {
            $error = "Please enter a valid information!";
        }
    }
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

</head>
<body>
    <nav>
        <ul class="menu">
            <li class="logo"><a href="index.php">ሰኔ ፴</a></li>
         
            </li>
            <li class="item button"><a href="login.php">Log In</a></li>
            <li class="toggle"><span class="bars"></span></li>
        </ul>
    </nav>
    <main>
         <center>
            <form method="post">
            <div style="font-size: 20px;margin: 10px;color: black;">Signup</div>

            <input style="padding: 10px 60px;" id="text" type="text" name="user_name" placeholder="Enter username" required><br><br>
            <input style="padding: 10px 60px;" id="text" type="password" name="password" placeholder="Enter password" required><br><br>

            <input style="padding: 10px 51px;" id="authbtn" type="submit" value="Signup">

            <a id="login" href="login.php">Login</a><br>  <br>          

            <span id="error" ><?php echo $error; ?></span><br><br>
        </form>
        </center>
    </main>

     <footer class="app-footer">
            <ul>
                <li>
                    <a href="./index.php"><i class="fa fa-home"></i></a> 
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
                    <a href="./signupam.php"><i class="fa fa-language"></i></a>
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