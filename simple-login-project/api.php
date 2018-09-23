<?php
 
$conn = new mysqli("mysqldb", "root", "root", "vuejs", "3306");
 
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
 
$out = array('error' => false);
 
$crud = 'read';
 
if(isset($_GET['vuejs'])){
	$crud = $_GET['vuejs'];
}
 
 
if($crud = 'read'){
	$sql = "select * from employees";
	$query = $conn->query($sql);
	$employees = array();
 
	while($row = $query->fetch_array()){
		array_push($employees, $row);
	}
 
	$out['employees'] = $employees;
}
 
 
$conn->close();
header("Access-Control-Allow-Origin: *");
header("Content-type: application/json");
echo json_encode($out);
die();
 
 
?>