<!doctype html>
<html lang="en">
<style>
.center {
margin: auto;
width: 60%;
border: 3px solid #73AD21;
padding: 100px;
}
</style>

<head>
    <title>Edit My Request</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <style>
        <?php include "Agri/bootstrap.min.css";
            include "Agri/bootstrap.css";
            include "Agri/_variables.scss";
            include "Agri/_bootswatch.scss"
        ?>
    </style>

</head>

<body>
<?php include 'Agri/Nav_bar.php';?>
<!--<div class="container-fluid" style="margin:0 ;">-->
<!--    <div class="row">-->
<!--        <div class="col-sm-2" style="background-color:lavender;">--><?php //include 'Agri/side.php'; ?><!-- </div>-->
<!--        <div class="col-sm-10" style="background-color:lavenderblush;"> </div>-->
<!--    </div>-->
<!--</div>-->
<?php

if(isset($_GET['time'])){
$time=$_GET['time'];
}else{
//user was not passed, so print a error or just exit(0);
    $_SESSION['message'] = "Sorry.Invali Request";
    header("location: error.php"); // error
    die();
}
?>
<div class='center'>

    <h1>Edit My Request</h1>
    <br><br>
    <form action="edit_record_farmer.php" method="post" enctype="multipart/form-data">
        <div class="field-wrap">
            Type of Vegitable       :<br><br>
            <input type="text" name="type"   required>
            <br><br>
            Quentity                :<br><br>
            <input type="number" name = "quentity"  required>
            <br>
            <br>

            <input type="hidden" value="<?php $time?>" name="time">
            <input type="hidden" name="destination" value="<?php echo $_SERVER["REQUEST_URI"]; ?>"/>
            <input class='button button-block' type="submit" value="Submit">
        </div>

    </form>

</div>



</body>

</html>