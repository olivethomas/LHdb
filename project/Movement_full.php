<?php
$servername = "localhost";
$user = "root";
$pass = "password";
$dbname="LHdb";

$conn = new mysqli($servername,$user,$pass,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM Movement"; 
$result = $conn->query($sql);
if($result->num_rows > 0)
{
	echo "<table>"; 
	while($row=$result->fetch_assoc())
	{  
		echo "<tr><td>" . $row['Student_RollNo'] . "</td><td>" . $row['Security_SecurityID'] . "</td></tr>". $row['Place'] . "</td></tr>". $row['TimeOut'] . "</td></tr>". $row['TimeIn'] . "</td></tr>". $row['EarlyPTime'] . "</td></tr>". $row['LatePTime'] . "</td></tr>". $row['Remarks'] . "</td></tr>";  
	}
	echo "</table>"; 
}
else


$conn->close();
?>