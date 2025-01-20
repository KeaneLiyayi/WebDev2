<?php
session_start();

if (isset($_SESSION["visitor_count"])) {
    $_SESSION["visitor_count"] += 1;
} else {
    $_SESSION["visitor_count"] = 1;
}

echo "Total visitors: " . $_SESSION["visitor_count"];
