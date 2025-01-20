<?php
$user_id = "CIT-223-054/2022";
$user_name = "Keane";
$user_password = "Keane";

setcookie("user_id", $user_id, time() + 3600, "/");
setcookie("user_name", $user_name, time() + 3600, "/");
setcookie("user_password", $user_password, time() + 3600, "/");
