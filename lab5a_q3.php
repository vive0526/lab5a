<!DOCTYPE html>
<html>
<head>
    <title>Calculate Area of a Rectangle</title>
</head>
<body>

<h1>Rectangle Area Calculator</h1>
<form method="post">
    <label for="width">Width:</label>
    <input type="number" name="width" id="width" required>
    <br><br>
    <label for="height">Height:</label>
    <input type="number" name="height" id="height" required>
    <br><br>
    <button type="submit">Calculate</button>
</form>

<?php

function calculateArea($width, $height) {
    return $width * $height;
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Retrieve user input
    $width = $_POST['width'];
    $height = $_POST['height'];

    $area = calculateArea($width, $height);

    echo "<h2>Results:</h2>";
    echo "The area of the rectangle with a width of $width and a height of $height is <strong>$area</strong>.";
}
?>

</body>
</html>
