<!DOCTYPE html>

<html>

<head>

<title>Student Details</title>

</head>

<body>

<?php

$name = $_POST["name"];

$course = $_POST["course"];

echo "<h2>Student Information</h2>";

echo "<p><b>Student Name:</b> " $name. "</p>";

echo "<p><b>Course:</b>".$course. "</p>";

echo "<p style='color: green; padding: 10px;'>

?>

Data processed successfully by PHP server.

</p>";

</body>

</html>