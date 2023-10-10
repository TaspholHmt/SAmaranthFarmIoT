<!-- BackEnd -->
<!-- 1.get data from esp -->
<!-- 2.send data to database -->
<!-- http://localhost:3000/yothineiei/back_end.php?temp=35.8&humidity=72.5 -->
<!-- https://www.w3schools.com/php/php_mysql_update.asp -->
<?php
echo "<center><h1>This is Back End</h1></center><br>";
// 1.get data from esp
$temp = $_GET['temp'];
$humidity = $_GET['humidity'];
$humidity_dir = $_GET['humidity_dir'];
echo "temp = $temp<br>humidity = $humidity<br>humidity_dir = $humidity_dir<br>";

// 2.send data to database
include('connect.php');
$sql = "UPDATE data_status_now SET temp_now=$temp,hum_now=$humidity,hum_dir_now=$humidity_dir WHERE ID=1";
// Procedural
// mysqli_query($conn, $sql)
if (mysqli_query($conn, $sql)) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . mysqli_error($conn);
}
mysqli_close($conn);


// // Prepare statement
// $stmt = $conn->prepare($sql);

// // execute the query
// $stmt->execute();

// // echo a message to say the UPDATE succeeded
// echo "<br>" . $stmt->rowCount() . " records UPDATED successfully";
?>