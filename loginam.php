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

            //read from database
            $query = "select * from sene30users where user_name = '$user_name' limit 1";
            $result = mysqli_query($con, $query);

            if($result)
            {
                if($result && mysqli_num_rows($result) > 0)
                {

                    $user_data = mysqli_fetch_assoc($result);
                    
                    if($user_data['password'] === $password)
                    {

                        $_SESSION['user_id'] = $user_data['user_id'];
                        header("Location: homepageam.php");
                        die;
                    }
                }
            }
            
            $error = "Username of Password is Invalid";
        }else
        {
            $error = "Username of Password is Invalid";
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
            <li class="logo"><a href="index .php">ሰኔ ፴</a></li>
         
            </li>
            <li class="item button secondary"><a href="signup.php">ለመመዝገብ</a></li>
            <li class="toggle"><span class="bars"></span></li>
        </ul>
    </nav>
    <main>
        <center>
            <form method="post">
            <div style="font-size: 20px;margin: 10px;color: black;">መግቢያ ፎርም</div>

            <input id="text" style="padding: 10px 60px;"type="text" placeholder="Enter username" name="user_name" required><br><br>
            <input id="text" style="padding: 10px 60px;"type="password" name="password" placeholder="Enter password" required><br><br>

            <input id="authbtn" type="submit" style="padding: 10px 50px;" value="ግባ">
            <a id="signup" href="signupam.php">ለመመዝገብ</a><br>  <br>          

            <span id="error" ><?php echo $error; ?></span><br><br>

            
        </form>

        </center>
    </main>

     <footer class="app-footer">
            <ul>
                <li>
                    <a href="./index .php"><i class="fa fa-home"></i></a> 
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
                    <a href="./login.php"<i class="fa fa-language"></i></a>
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