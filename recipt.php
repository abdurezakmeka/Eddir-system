<?php
include_once 'db_conn.php';
$result = mysqli_query($conn,"SELECT * FROM sene30 ORDER BY id DESC LIMIT 1");

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BOOKS</title>
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
</head>
<body>

    <?php
if (mysqli_num_rows($result) > 0) {
?>
  
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>
    <nav>
        <ul class="menu">
            <li class="logo"><a href="homepage.php">ሰኔ ፴</a></li>
            <li class="item button secondary"><a onclick="window.location.href='logout.php';">Log out</a></li>
            <li class="toggle"><span class="bars"></span></li>
        </ul>
    </nav>
  <main>

    <div class="Recipt" style="margin-top: 90px;">
                                    <Center>
                                            <strong></strong><br>
                                            <h2 style="text-align: center;">Payment Confirmation<br>
                                            <span class="small" style="color:red;">Under verifcation...</span></h2><br><br>
                                            <span style="color: #6bbfcd;"> Verification Number: </span> 
                                            <?php 
                                                $today=date('sIsyI');
                                                echo $today;                                    
                                            ?><br>

                                            <span style="color: #6bbfcd;"> Payment Date: </span> <?php echo $row["date"]; ?><br>
                                              
                                            <span style="color: #6bbfcd;">Name: </span> <?php echo $row["name"]; ?><br>
                                            <span style="color: #6bbfcd;">Txn ID: </span> <?php echo $row["txnid"]; ?><br>
                                            <span style="color: #6bbfcd;">Reason: </span> <?php echo $row["reason"]; ?><br>


                                    
                                    <div><button style="margin-top:15px" id="prbtn" onClick="window.print()">Print Page </button><br></div>
                                    
                                    </center>

                                        </div>
  </main>
   
 

     <footer class="app-footer">

            <ul>
                <li>
                    <a href="./index.html"><i class="fa fa-home"></i></a> 
                    Home
                </li>

                <li>
                    <a href="./index.html"><i class="fa fa-video-camera"></i></a>
                    Broadcast
                </li>

                <li>
        
                    <a href="./pay.php"><i class="fa fa-money"></i></a> 
                    Payment
                </li>               

                 <li>
                    <a href="./reciptam.php"><i class="fa fa-language"></i></a>
                    አማርኛ
                </li>
               

            </ul>
        </footer>



<?php
$i++;
}
?>

 <?php
}
else{
    echo "No result found";
}
?>
</body>
</html>