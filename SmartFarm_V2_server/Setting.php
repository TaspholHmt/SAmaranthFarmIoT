<?php
include('connect.php');
$sql = "UPDATE data_mode SET mode=2 WHERE ID=1";
if (mysqli_query($conn, $sql)) {
    // echo "Record updated successfully";
} else {
    echo "Error updating record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <style>
    .btn-text-right {
        text-align: right;
    }
    </style>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- https://www.quackit.com/javascript/javascript_refresh_page.cfm -->
    <!-- <script>
    function timedRefresh(timeoutPeriod) {
        setTimeout("location.reload(true);", timeoutPeriod);
    }
    window.onload = timedRefresh(5000);
    </script> -->
    <link rel="stylesheet" href="styles.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Setting</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="http://www2.yothinburana.ac.th/website/">Yothinburana</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Setting.php">Setting</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Status.php">Status</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Manual.php">Manual</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <center>
        <h3>Setting</h3>
    </center>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <center>
            <table style="width: 70%;">
                <tbody>
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Min</th>
                            <th>Max</th>
                        </tr>
                    </thead>
                    <tr>
                        <th scope="row" style="width: 10%;">TEMPERATURE</th>
                        <td>
                            <center>
                                <input type="range" class="form-range" min="0" max="100" step="1" name="rangeValue1">
                                <!-- <input type="range" class="form-range" min="0" max="100" step="1" id="customRange1"> -->
                                <p id="output1"></p>
                            </center>
                        </td>
                        <td>
                            <center>
                                <input type="range" class="form-range" min="0" max="100" step="1" name="rangeValue2">
                                <!-- <input type="range" class="form-range" min="0" max="100" step="1" id="customRange2"> -->
                                <p id="output2"></p>
                            </center>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row" style="width: 30%;">HUMIDITY</th>
                        <td style="background-color: white">
                            <center>
                                <input type="range" class="form-range" min="0" max="100" step="1" name="rangeValue3">
                                <!-- <input type="range" class="form-range" min="0" max="100" step="1" id="customRange3"> -->
                                <p id="output3"></p>
                            </center>
                        </td>
                        <td style="background-color: white">
                            <center>
                                <input type="range" class="form-range" min="0" max="100" step="1" name="rangeValue4">
                                <!-- <input type="range" class="form-range" min="0" max="100" step="1" id="customRange4"> -->
                                <p id="output4"></p>
                            </center>
                        </td>
                        <!-- <script src="script.js"></script> -->
                    </tr>
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>CurrentTime</th>
                            <th>Time</th>
                        </tr>
                    </thead>
                    <tr>
                        <th scope="row" style="width: 30%;">Set Time</th>
                        <td style="background-color: white">
                        <?php
                            date_default_timezone_set("Asia/Bangkok"); 
                            $currentTimestamp = time(); // Get the current timestamp in seconds
                            $hours = date('H', $currentTimestamp);
                            $minutes = date('i', $currentTimestamp);
                            $seconds = date('s', $currentTimestamp);

                            echo "<h6>$hours:$minutes:$seconds</h6>";
                        ?>
                        </td>
                        <td>
                        <form method="POST">
                            <select class="form-select" name="selectedOption" id="mySelect" aria-label="Default select example">
                                <option selected>select time</option>
                                <option value="6">06:00</option>
                                <option value="7">07:00</option>
                                <option value="8">08:00</option>
                                <option value="9">09:00</option>
                                <option value="10">10:00</option>
                                <option value="11">11:00</option>
                                <option value="12">12:00</option>
                                <option value="13">13:00</option>
                                <option value="14">14:00</option>
                                <option value="15">15:00</option>
                                <option value="16">16:00</option>
                                <option value="17">17:00</option>
                                <option value="18">18:00</option>
                                <option value="19">19:00</option>
                            </select>
                        </form>
                        </td>
                        <!-- <script src="script.js"></script> -->
                    </tr>
                    <tr>
                        <td style="background-color: white"></td>
                        <td style="background-color: white"></td>
                        <td style="background-color: white">
                            <div class="btn-text-right">
                                <button type="submit" class="btn btn-outline-primary">SaveValues</button>
                            </div>
                        </td>
                    </tr>
                </tbody>

            </table>
        </center>
        <!-- <button type="submit">Save Values</button> -->
    </form>

    <script>
    const rangeInputs = document.querySelectorAll(".form-range");
    const outputElements = document.querySelectorAll("p[id^='output']");

    // Retrieve the saved values from the PHP script if they exist
    window.onload = function() {
        const xhr = new XMLHttpRequest();
        xhr.open("GET", "<?php echo $_SERVER['PHP_SELF']; ?>", true);
        xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
        xhr.onreadystatechange = function() {
            if (xhr.readyState === 4 && xhr.status === 200) {
                const savedValues = JSON.parse(xhr.responseText);
                rangeInputs.forEach((rangeInput, index) => {
                    const savedValue = savedValues[`rangeValue${index + 1}`];
                    if (savedValue) {
                        rangeInput.value = savedValue;
                        outputElements[index].textContent = savedValue;
                    }
                });
            }
        };
        xhr.send();
    };

    // Update the output and send the values when the input changes
    rangeInputs.forEach((rangeInput, index) => {
        rangeInput.addEventListener("input", function() {
            const value = rangeInput.value;
            outputElements[index].textContent = value;

            const xhr = new XMLHttpRequest();
            xhr.open("POST", "<?php echo $_SERVER['PHP_SELF']; ?>", true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
            xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
            xhr.send(`rangeValue${index + 1}=${encodeURIComponent(value)}`);
        });
    });
    // Save the values to localStorage when the page is unloaded
    window.addEventListener("beforeunload", function() {
        rangeInputs.forEach((rangeInput, index) => {
            const value = rangeInput.value;
            localStorage.setItem(`rangeValue${index + 1}`, value);
        });
    });

    // Retrieve the saved values from localStorage if they exist
    window.addEventListener("load", function() {
        rangeInputs.forEach((rangeInput, index) => {
            const savedValue = localStorage.getItem(`rangeValue${index + 1}`);
            if (savedValue) {
                rangeInput.value = savedValue;
                outputElements[index].textContent = savedValue;
            }

            rangeInput.addEventListener("input", function() {
                const value = rangeInput.value;
                outputElements[index].textContent = value;

                localStorage.setItem(`rangeValue${index + 1}`, value);
            });
        });
    });

      // Get the select element
  var selectElement = document.getElementById("mySelect");

    // Add an event listener to the select element
    selectElement.addEventListener("change", function () {
        // Get the selected option value
        var selectedValue = selectElement.value;

        // Store the selected value in localStorage
        localStorage.setItem("selectedValue", selectedValue);
    });

    // Check if a value was previously selected and saved in localStorage
    var savedValue = localStorage.getItem("selectedValue");
    if (savedValue) {
        // Set the select element's value to the saved value
        selectElement.value = savedValue;
    }
    </script>
    <?php
    // Check if the form has been submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $range1Value = $_POST['rangeValue1'];
    $range2Value = $_POST['rangeValue2'];
    $range3Value = $_POST['rangeValue3'];
    $range4Value = $_POST['rangeValue4'];
    $selectedValue = $_POST["selectedOption"];
    // echo $selectedValue;
    // echo "value 1 : ".$range1Value."<br>"."value 2 : ".$range2Value."<br>"."value 3 : ".$range3Value."<br>"."value 4 : ".$range4Value."<br>";

    echo '<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
        <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
            <path
                d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
        </symbol>
        <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
            <path
                d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z" />
        </symbol>
        <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
            <path
                d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
        </symbol>
    </svg>';

    if($range1Value>=$range2Value || $range3Value >=$range4Value){
        // JavaScript code to display the alert
        // echo '<script>alert("Max > min");</script>';
        echo '<div class="alert alert-danger d-flex align-items-center" role="alert">
                <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:">
                    <use xlink:href="#exclamation-triangle-fill" />
                </svg>
                <div>
                    An error occurred while submitting the sketch <strong>Max must be greater than min</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </div>';
    
    }
    else{
        echo '<div class="alert alert-success d-flex align-items-center" role="alert">
        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:">
            <use xlink:href="#check-circle-fill" />
        </svg>
        <div>
            Successfully
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    </div>';
        include('connect.php');
        $sql = "UPDATE data_setting SET set_temp_min=$range1Value,set_temp_max=$range2Value,set_hum_min=$range3Value,set_hum_max=$range4Value,set_time=$selectedValue WHERE ID=1";
        if (mysqli_query($conn, $sql)) {
            // echo "Record updated successfully";
        } else {
            echo "Error updating record: " . mysqli_error($conn);
        }
        mysqli_close($conn);

        // Perform any desired operations with the values
        // ...

        // Send a response if necessary
        // ...
    }
}
    ?>
</body>

</html>