<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Information</title>
</head>

<body>
    <h1>Employee Details</h1>
    <?php
    define("EMPLOYEE_CODE", "001");
    define("EMPLOYEE_NAME", "ABC");
    define("EMPLOYEE_SALARY", 25000);
    define("WORKING_HOURS", 7.5);

    echo "Employee Code: " . EMPLOYEE_CODE . "<br>";
    echo "Employee Name: " . EMPLOYEE_NAME . "<br>";
    echo "Employee Salary: $" . EMPLOYEE_SALARY . "<br>";
    echo "Working Hours: " . WORKING_HOURS . " hours<br>";
    ?>
</body>

</html>