<?php
session_start();

$_SESSION['name'] = $_POST['name'];
$_SESSION['email'] = $_POST['email'];

echo "Value saved in session: " . $_SESSION['name'] . "<br>";

echo "Name: " . $_POST['name'] . "<br>";
echo "Email: " . $_POST['email'] . "<br>";
echo "Password: " . $_POST['pass'] . "<br>";
echo "Gender: " . $_POST['gender'] . "<br>";
echo "Pokemon starter: " . $_POST['pokemon'] . "<br>";

?>

