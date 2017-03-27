<?php
	ob_start();
	include_once "db_connection.php";
	$conn = dbConnect();
	$reviewrating = $_POST['reviewrating'];
	$reviewname = $_POST['reviewname'];
	$reviewemail = $_POST['reviewemail'];
	$reviewcomment = $_POST['reviewcomment'];
	$resid = $_REQUEST['resid'];
	
	
	$account = $conn->prepare("INSERT INTO tblreviews (rating, name, email, comment, rid) VALUES ('$reviewrating','$reviewname','$reviewemail','$reviewcomment','$resid')");
	$account->execute();
	$result = $account->fetch(PDO::FETCH_ASSOC);
	if(count($result)>0)
	{
	header("Location: profile.php?rid=$resid");
	}else{
	header("Location: profile.php?rid=$resid");
	}

ob_end_flush();
?>