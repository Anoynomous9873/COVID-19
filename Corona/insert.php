<?php
$username = $_POST['first'];
$password = $_POST['last'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$phoneCode = $_POST['contact'];
$phone = $_POST['user'];
if (!empty($username) || !empty($password) || !empty($gender) || !empty($email) || !empty($phoneCode) || !empty($phone)) {
 $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "patient";
    //create connection
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } else {
     
     $INSERT = "INSERT Into patient_history (Patient, Age, Gender, Province, Country, Source) values(?, ?, ?, ?, ?, ?)";
     //Prepare statement
	 
	  $stmt = $conn->prepare($INSERT);
	  $stmt->bind_param("ssssss", $username, $password, $gender, $email, $phoneCode, $phone);
	  $stmt->execute();
	  echo "New record inserted sucessfully";
	 
	 $stmt->close();
	 $conn->close();
	}
} else {
 echo "All field are required";
 die();
}
?>