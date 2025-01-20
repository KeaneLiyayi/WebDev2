<?php
$fname = $_POST['fname'];
$lName = $_POST['lName'];
$employeeNo = $_POST['employeeNo'];
$jobGrp = $_POST['jobGrp'];
$RetainerSalary = $_POST['rSalary'];
$sales = $_POST['sales'];
$department = $_POST['department'];

// Calculate Commision
if ($sales >= 1000000) {
    $commission = $sales * 0.25;
} else if ($sales >= 500000) {
    $commission = $sales * 0.20;
} else if ($sales >= 100000) {
    $commission = $sales * 0.05;
} else {
    $commission = 0;
}

// Calculate Gross Salary
$grossSalary = $RetainerSalary + $commission;

// Calculate Tax

if ($grossSalary <= 100000) {
    $tax = $grossSalary * 0.10;
} else {
    $tax = $grossSalary * 0.30;
}

// Calculate Net Salary

$netSalary = $grossSalary - $tax;

// Display Results

echo "First Name: " . $fname . "<br>";
echo "Last Name: " . $lName . "<br>";
echo "Employee Number: " . $employeeNo . "<br>";
echo "Job Group: " . $jobGrp . "<br>";
echo "Retainer Salary: " . $RetainerSalary . "<br>";

echo "Sales: " . $sales . "<br>";

echo "Department: " . $department . "<br>";

echo "Commission: " . $commission . "<br>";

echo "Gross Salary: " . $grossSalary . "<br>";

echo "Tax: " . $tax . "<br>";

echo "Net Salary: " . $netSalary . "<br>";
