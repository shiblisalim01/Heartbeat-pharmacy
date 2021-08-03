  
<?php
	$name = $_POST['name'];
	$email = $_POST['email'];
	$age = $_POST['age'];
	$number = $_POST['number'];
	$password = $_POST['password'];

	// Database connection
	$conn = new mysqli('localhost','root',' ','heartbeat');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into registration(name, email, age, number, password) values(?, ?, ?, ?, ?)");
		$stmt->bind_param("sssssi", $name, $email, $age, $number, $password);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}
?>