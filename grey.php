<?php
$servername = "localhost";
$username = "Keane";
$password = "Keane123";

$dbname = "grey";

$connect = mysqli_connect($servername, $username, $password, $dbname);

if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}




$date = $_POST['date'];
$idname = $_POST['idname'];
$reg = $_POST['reg'];
$course = $_POST['course'];
$yos = $_POST['yos'];
$gender = $_POST['gender'];
$best  = $_POST['best'];



$sql = "INSERT INTO grem(DATE_S,NAME_S,REG_NO,COURSE,YEAR_OF_STUDY,GENDER,BEST_PERFORMED)VALUES ('$date', '$idname', '$reg', '$course', '$yos', '$gender', '$best')";


if (mysqli_query($connect, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
