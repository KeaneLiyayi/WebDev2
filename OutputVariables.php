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
    $employee_code = "001";
    $employee_name = "ABC";
    $employee_salary = 25000;
    $working_hours = 7.5;

    echo "Employee Code: " . $employee_code . "<br>";
    echo "Employee Name: " . $employee_name . "<br>";
    echo "Employee Salary: $" . $employee_salary . "<br>";
    echo "Working Hours: " . $working_hours . " hours<br>";
    ?>
</body>

</html>