<?php
include_once 'db_conn.php';
$result = mysqli_query($conn,"SELECT * FROM sene ORDER BY id DESC LIMIT 1");
?>


<!DOCTYPE html>
<html>
 <head>

    <meta charset="utf-8">
    
    <title>invoice order receipt</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>

    <link href="https://netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" media="screen">

    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Rock+Salt&display=swap" rel="stylesheet" media="screen">

    <script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

 <title> Retrive data</title>
 </head>
<body>
    
    
<?php
if (mysqli_num_rows($result) > 0) {
?>
  
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>




<div class="container">
<div class="row">
                    <!-- BEGIN INVOICE -->
                    <div class="col-xs-12">
                        <div class="grid invoice">
                            <div class="grid-body">
                                <div class="invoice-title">
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <h1 style="color:#8686BF;font-family: 'Rock Salt', cursive;">ሰኔ<span style="color:#FF7F2A;font-family: 'Rock Salt', cursive;">፴</span></h1>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <h2 style="text-align: right;">የክፍያ ማረጋገጫ<br>
                                            <span class="small" style="color:red;">ተከፍሏል</span></h2>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-xs-6">
                                        <address>
                                            <strong>የክፍያ ተቀባይ መረጃ:</strong><br>

                                            <span style="color:#8686BF;">ሰኔ<span style="color:#FF7F2A;">፴</span></span><br>

                                            <span style="color: #6bbfcd;">አድራሻ: </span>አዲስ አበባ, ወ06<br>
                                            <abbr style="color: #6bbfcd;" >ስልክ:</abbr> (+251) 113 49 00 00
                                        </address>
                                    </div>
                                    <div class="col-xs-6 text-right">
                                        <address>
                                            <strong>የክፍያ መረጃ:</strong><br>
                                            <span style="color: #6bbfcd;"> የInvoice ቁጥር: </span> <?php
                                    $today=date('sIsyI');

                                        echo $today;                                    
                                    ?><br>
                                            <span style="color: #6bbfcd;"> የInvoice ቀን: </span> <?php echo $row["date"]; ?><br>



                                        

                                        </address>
                                    </div>
                                </div>
                                <div class="row">
                               
                                    <div class="col-xs-6 text-right">
                                        <address>
                                            <strong>የከፋይ መረጃ:</strong><br>
                                            <span style="color: #6bbfcd;">Name: </span> <?php echo $row["name"]; ?><br>

                                             <span style="color: #6bbfcd;">Txn ID: </span> <?php echo $row["txnid"]; ?><br>

                                             <span style="color: #6bbfcd;"> Reason: </span> +<?php echo $row["reason"]; ?><br>
                                                                                  
                                        </address>

                                    </div>
                                </div>
             


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