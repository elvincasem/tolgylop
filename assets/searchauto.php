<?php
include_once "dbconnect.php";
$conn = dbConnect();
//connect with the database

//get search term
$searchTerm = $_GET['term'];
//get matched data from skills table
$query = $db->query("SELECT * FROM tbluser WHERE firstname LIKE '%".$searchTerm."%' ORDER BY fisrtname ASC");
while ($row = $query->fetch_assoc()) {
    $data[] = $row['firstname'];
}
//return json data
echo json_encode($data);
?>