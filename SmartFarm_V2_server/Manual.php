<?php
    include("connect.php");
    $switchState1 = 0;
    $switchState2 = 0;

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['switchState1'])) {
            $switchState1 = $_POST['switchState1'];
        }
        if (isset($_POST['switchState2'])) {
            $switchState2 = $_POST['switchState2'];
        }
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if ($switchState1 == 1) {
            // echo "Switch 1 is checked.";
            $sql = "UPDATE data_switch SET SW_1=1 WHERE ID=1";
            mysqli_query($conn, $sql);
        } else {
            // echo "Switch 1 is not checked.";
            $sql = "UPDATE data_switch SET SW_1=0 WHERE ID=1";
            mysqli_query($conn, $sql);
        }
        // echo "<br>";

        if ($switchState2 == 1) {
            // echo "Switch 2 is checked.";
            $sql = "UPDATE data_switch SET SW_2=1 WHERE ID=1";
            mysqli_query($conn, $sql);
        } else {
            // echo "Switch 2 is not checked.";
            $sql = "UPDATE data_switch SET SW_2=0 WHERE ID=1";
            mysqli_query($conn, $sql);
        }
        mysqli_close($conn);
    }
include("connect.php");
$sql = "UPDATE data_mode SET mode=4 WHERE ID=1";
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
    <title>Manual</title>
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
        <h3>Manual</h3>
    </center>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <center>
            <table style="width: 50%;">
                <thead>
                    <tr>
                        <th>FAN</th>
                        <th>PUM</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <!-- switch 1 -->
                            <label class="switch">
                                <input type="hidden" name="switchState1" value="0">
                                <input type="checkbox" name="switchState1" value="1" onchange="this.form.submit()"
                                    <?php if ($switchState1 == 1) {
                                                                                                                        echo "checked";
                                                                                                                    } ?>>
                                <span class="slider round"></span>
                            </label>
                        </td>
                        <td>
                            <!-- switch 2 -->
                            <label class="switch">
                                <input type="hidden" name="switchState2" value="0">
                                <input type="checkbox" name="switchState2" value="1" onchange="this.form.submit()"
                                    <?php if ($switchState2 == 1) {
                                                                                                                        echo "checked";
                                                                                                                    } ?>>
                                <span class="slider round"></span>
                        </td>
                    </tr>

                    </tr>
                </tbody>
            </table>
        </center>
    </form>

</body>

</html>