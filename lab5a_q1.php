<!DOCTYPE html>
<html>
<head>
    <title>Details Table</title>
</head>
<body>

<?php

$name = "Vivethan Murugan";
$matricNumber = "CI230090";
$course = "BIW";
$yearOfStudy = "3";
$address = "NO 16 JALAN PUSING 24 31550 PUSING PERAK";
?>

<h1>Student Details</h1>
<table border="1" cellpadding="5" cellspacing="0">
    <tr>
        <th>Field</th>
        <th>Details</th>
    </tr>
    <tr>
        <td>Name</td>
        <td><?php echo $name; ?></td>
    </tr>
    <tr>
        <td>Matric Number</td>
        <td><?php echo $matricNumber; ?></td>
    </tr>
    <tr>
        <td>Course</td>
        <td><?php echo $course; ?></td>
    </tr>
    <tr>
        <td>Year of Study</td>
        <td><?php echo $yearOfStudy; ?></td>
    </tr>
    <tr>
        <td>Address</td>
        <td><?php echo $address; ?></td>
    </tr>
</table>

</body>
</html>
