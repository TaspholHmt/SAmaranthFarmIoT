<?php
include('connect.php');
$sql = "SELECT set_temp_min, set_temp_max,set_hum_min,set_hum_max,set_time FROM data_setting WHERE ID=1";

$result = mysqli_query($conn, $sql);
date_default_timezone_set("Asia/Bangkok"); 
$currentTimestamp = time(); // Get the current timestamp in seconds

// Convert the timestamp into hours, minutes, and seconds
$hours = date('H', $currentTimestamp);
$minutes = date('i', $currentTimestamp);
$seconds = date('s', $currentTimestamp);

// echo "Current Time: $hours hours, $minutes minutes, $seconds seconds";


if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while ($row = mysqli_fetch_assoc($result)) {
        // echo "SW_1 > " . $row["SW_1"] . "<br>SW_2 > " . $row["SW_2"];
        if (($row["set_time"] == $hours) && ($minutes == 0) && (0 < $seconds && $seconds < 30)){
            $doItNow = 1;
        }
        else{
            $doItNow = 0;
        }

        echo $row["set_temp_min"] . "_" . $row["set_temp_max"] . "_".$row["set_hum_min"] . "_" . $row["set_hum_max"] . "_".$doItNow. "_";
    }
}
