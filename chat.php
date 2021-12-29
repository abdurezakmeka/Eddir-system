<?php 
session_start();

    include("connection.php");

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
</head>
<body>
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
               <h4>Please select your account</h4>
                </div>

                <div class="modal-body">
                <?php 
                $Users = mysql_query($connect, "SELECT * FROM Users")
                or die("Failed to query database". mysql_error());
                while($User = mysqli_fetch_assoc($Users))
                {
                    echo '<li>
                    <a href="chat.php?userId='.$User["Id"].'">'.$User["User"].'</a>
                    </li>'

                }                
            </div>
            
        </div>
        
    </div>
</body>
</html>