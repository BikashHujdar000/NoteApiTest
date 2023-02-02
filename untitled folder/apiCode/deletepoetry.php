
<?php
$servername ="localhost";
$username = "root";
$password = "";
$database= "poetrydb";
echo "Enserting now";
$connection= new mysqli($servername,$username,$password,$database);
if ($connection->connect_error) {
die("Connection failed: ".$connection->connect_error);
}

echo "Sucessfull connected in database";


// database created sucessfully now lets insert data through data query 
$POETRYID = $_POST['poetry_id'];

// decision 

$query = "DELETE FROM  poetry WHERE id =$POETRYID";

$result = $connection->query($query);

if ($result == 1)
{
   $response = array("status"=>"1","message"=>"delete sucess ");
}
else 
{
   $response = array("status"=>"0","message"=>" sorry not deleted " . $response.error_reporting);
}

echo json_encode($response);
echo "Thamk you ";



?>