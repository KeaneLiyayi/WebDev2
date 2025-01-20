<?php
$servername = "localhost";
$username = "Keane";
$password = "Keane123";

$dbname = "nba";

$connect = mysqli_connect($servername, $username, $password, $dbname);

if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}




$f_name = $_POST['f_name'];
$l_name = $_POST['l_name'];
$position = $_POST['position'];
$gender = $_POST['gender'];
$weight = $_POST['weight'];
$height = $_POST['height'];
$dob  = $_POST['dob'];
$team = $_POST['teamName'];
$years = $_POST['yearsInLeague'];
$l_name = $_POST['l_name'];
$nationality = $_POST['nationality'];


$sql = "INSERT INTO nba_players (first_name, last_name, gender, height, team_name, position, weight, date_of_birth, nationality, years_in_league)VALUES ('$f_name', '$l_name', '$gender', '$height', '$team', '$position', '$weight', '$dob', '$nationality', '$years')";


if (mysqli_query($connect, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
