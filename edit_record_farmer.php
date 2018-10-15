<?php
require 'db.php';
if (isset($_POST)) {

    if (isset($_POST['time'])) {

        $time = $_POST['time'];
        $type = $_POST['type'];

        $quentity = $_POST['quentity'];

        $time_result = $mysqli->query("select * from farmer_requests where time= '$time'");



            if ($time_result->num_rows > 0) {
                $time_result_array = $time_result->fetch_assoc();
                $time = $time_result_array['time'];
                $sql = "UPDATE `farmer_requests` SET `type` = '$type', `quantity` = '$quentity', `active_status` = b'1' WHERE farmer_requests`.`time` = '$time'";
                if ($mysqli->query($sql)) {
                    header("Location: {$_REQUEST["destination"]}");
                } else {

                    $_SESSION['message'] = "Sorry.Update action could't be completed.";
                    header("location: error.php");
                    die();

                }


            } else {
                $_SESSION['message'] = "Sorry.Data couldn't be found on database.";
                header("location: error.php");
                die();
            }
     }}
else {
    $_SESSION['message'] = "Inavalid Request";
    header("location: error.php");
    die();
}

        ?>