<?php
$servername = "localhost";
$user = "root";
$pass = "";

// Create connection
$conn = new mysqli($servername, $user, $pass);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// Create database
$sql = "CREATE DATABASE flophouse";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully<br/>";
    $db="flophouse";

    // Create connection
	$conn = new mysqli($servername, $user, $pass,$db);
	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}

	$count=0;
    $sql = "CREATE TABLE login(SAP varchar(11), user varchar(20), pass varchar(32))";
    if($conn->query($sql)==TRUE){
    	echo "Table Created Successfully.<br/>";
    	for($i=70021114000;$i<70021114100;$i++){
	    	$sql="insert into login values($i, $i, md5($i))";
	    	if($conn->query($sql)==TRUE){
				$count++;
			}	    
		}
		echo "Successfully inserted" . $count . "rows<br/>";
    }
    else{
    echo "Error creting table: " . $conn->error . "<br/>"; 
    }

} else {
    echo "Error creating database: " . $conn->error;
}

$conn->close();
?>
