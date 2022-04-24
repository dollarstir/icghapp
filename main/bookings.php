
<?php

$conn = mysqli_connect("localhost","tucevmlk_test","Teamwork@2020","tucevmlk_test") or die ("fail to connect");
extract($_POST);

	$sql = "SELECT * FROM bookings WHERE userid ='$userid' ORDER BY id DESC";
	 
	$result = $conn->query($sql);
 
if ($result->num_rows >0) {
 
	 while($row[] = $result->fetch_assoc()) {
	 
	 $item = $row;
	 
	 $json = json_encode($item, JSON_NUMERIC_CHECK);
	 
 }
 
} else {
	echo "No Data Found.";
}
echo $json;
$conn->close();


?>