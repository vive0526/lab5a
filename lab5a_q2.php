<!DOCTYPE html>
<html>
<head>
    <title>Student Table</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
            margin: 20px auto;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
            text-align: center;
        }
    </style>
</head>
<body>

<?php

$students = [
    [
      "Name" => "VIVETHAN MURUGAN",
      "Program" => "BIW",
      "Age" => 24
   ],
    [
      "Name" => "YUVANESH SHANMUGAM",
      "Program" => "BIW",
      "Age" => 23
   ],
    [
      "Name" => "VIKNESHWAREN CHANDRAN",
      "Program" => "BIT",
      "Age" => 23
    ]
];
?>

<h1 style="text-align: center;">Student Information</h1>
<table>
    <tr>
        <th>Name</th>
        <th>Program</th>
        <th>Age</th>
    </tr>
    <?php foreach ($students as $student): ?>
    <tr>
        <td><?php echo $student["Name"]; ?></td>
        <td><?php echo $student["Program"]; ?></td>
        <td><?php echo $student["Age"]; ?></td>
    </tr>
    <?php endforeach; ?>
</table>

</body>
</html>
