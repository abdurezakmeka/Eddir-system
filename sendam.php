<?php  

		

if (isset($_POST['name']) && isset($_POST['txnid']) && isset($_POST['reason'])) {
	include 'db_conn.php';

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}
	$name = validate($_POST['name']);
	$txnid = validate($_POST['txnid']);
	$reason = validate($_POST['reason']);



	if (empty($name) || empty($txnid) || empty($reason)) {
		header("Location: index.html");
	}else {

		$sql = "INSERT INTO sene30(name, txnid, reason) VALUES('$name', '$txnid', '$reason')";
		$res = mysqli_query($conn, $sql);

		if ($res) {
			echo 
			'<script type="text/javascript">
           window.location = "reciptam.php"
      </script>';
		}else {
			echo "Your message could not be sent!";
		}
	}

}else {
	header("Location: index.html");
}