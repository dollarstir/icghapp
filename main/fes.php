
<?php

include 'fragement/adapter.php';
include 'fragement/send.php';
extract($_POST);

    $sql = 'SELECT * FROM fees  WHERE id = 1 ';

    $result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row[] = $result->fetch_assoc()) {
        $item = $row;

        $json = json_encode($item, JSON_NUMERIC_CHECK);
    }
} else {
    echo 'No Data Found.';
}
echo $json;
$conn->close();

?>