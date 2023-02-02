
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

$queryforget= "SELECT * FROM poetry ";

$result = $connection->query($queryforget);
 
$row = $result->fetch_all(MYSQLI_ASSOC);


IF (empty($row))
{
    $response = array("status"=>"0","message"=>"Record Empty ","data"=>$row);
}

else 
{
    $response = array("status"=>"1","message"=>"Records Available","data"=>$row);
}  

echo json_encode($response);

?>