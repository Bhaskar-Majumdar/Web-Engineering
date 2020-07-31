<?php 
                 session_start();
	$db = new mysqli('localhost', 'root', '', 'practice-crud');

	// initialize variables
	             $id = 0;
                 $fname = "";
                 $lname = "";
                 $address = "";

	if (isset($_POST['save'])) {
		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$address = $_POST['address'];
		$save = $db->query("INSERT INTO info (fname, lname, address) VALUES ('$fname','$lname','$address')"); 
		$_SESSION['message'] = "Address saved sucessfully!"; 
		header('location: index.php');
	}
	$results = $db->query("SELECT * FROM info");


?>