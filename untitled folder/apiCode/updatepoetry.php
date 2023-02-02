<?php

$servername = "localhost";
$username = "root";
$password = "";
$database ="poetrydb";

$conn = new mysqli($servername,$username,$password,$database);

if ($conn->connect_error) {

	die("Connection faileed" . $conn->connect_error);

}
else 
{
	echo "database changed sucessfully";

}



// request complete 
$POETRY=$_POST['updated_data'];
$ID = $_POST['id'];

$query = "UPDATE poetry SET poetry_data = '$POETRY' WHERE  id ='$ID'  ";

$result = $conn->query($query);

if ($result == 1)
{
   $response = array("status"=>"1","message"=>"poet updated Sucessfully ");
}
else 
{
   $response = array("status"=>"0","message"=>" sorry poet is not updated  " . $response.error_reporting);
}

echo json_encode($response);
echo "Thamk you ";



?>

