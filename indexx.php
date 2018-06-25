<?php
$servername = "localhost";
$username = "id6274026_bikes";
$password = "royalbrothers";
$dbname = "id6274026_bikes";

if($_POST){
	
	$conn = new mysqli($servername, $username, $password, $dbname);

	if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
	} 
	
	if(isset($_POST[BikeModel])){
	
		$image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
		
		$sql = "INSERT INTO Bikes (BikeID, BikeModel, BikeNos, image) VALUES ($_POST[BikeID],'$_POST[BikeModel]',$_POST[BikeNos],'{$image}')";

		if ($conn->query($sql) === TRUE) {
			echo "New record created successfully";
		} else {
			echo "Error: " . $sql . "<br>" . $conn->error;
		}
	}
	
	if(isset($_POST[Bid])){
		$sql = "UPDATE Bikes SET BikeNos=BikeNos+$_POST[BikeNos] where BikeID=$_POST[Bid]";
		if ($conn->query($sql) === TRUE) {
			echo "New record created successfully";
		} else {
			echo "Error: " . $sql . "<br>" . $conn->error;
		}
	}
	
	$conn->close();
}

?> 