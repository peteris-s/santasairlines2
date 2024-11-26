<?php

echo"✈";

$connection = new mysqli("localhost", "root", "", "sipols");
$result = $connection->query("SELECT * FROM users");


$data = $result->fetch_assoc();

var_dump($data);

echo "<form method='POST'>";
echo "<label>Lietotajvards: <input name='username' /></label><br>";
echo "<label> Parole: <input name='password' type='password' /></label><br>";
echo "input type='submit' value='Registreties' />";
echo "</form>";






















?>