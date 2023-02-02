
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
$POETRY = $_POST['poetry_data'];
$POET_NAME = $_POST['poet_name'];

// decision 

$query = "INSERT INTO poetry(poetry_data,poet_name) Values ('$POETRY' , '$POET_NAME')";

$result = $connection->query($query);

if ($result == 1)
{
   $response = array("status"=>"1","message"=>"poet inserted sucess ");
}
else 
{
   $response = array("status"=>"0","message"=>" sorry poet is not inserted  " . $response.error_reporting);
}

echo json_encode($response);
echo "Thamk you ";



?>