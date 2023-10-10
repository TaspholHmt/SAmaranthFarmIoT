<?php
include('connect.php');
$sql = "SELECT mode FROM data_mode WHERE ID=1";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while ($row = mysqli_fetch_assoc($result)) {
        // echo "SW_1 > " . $row["SW_1"] . "<br>SW_2 > " . $row["SW_2"];
        echo $row["mode"] . "_";
    }
}