<?php

$conn = mysqli_connect("localhost","root","","proje");
//$conn = mysqli_connect("localhost","121620191010","0xRBiLr40My","db_121620191010");



$result = mysqli_query($conn,"SELECT * FROM yorumlar");

$data = array();
while($row = mysqli_fetch_assoc($result))
{
    $data[]=$row;
}

echo json_encode($data);
?>