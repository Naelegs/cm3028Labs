<?php
/**
 * Created by PhpStorm.
 * User: 1608354
 * Date: 17/10/2016
 * Time: 15:36
 */

include ("DBconnect.php");



$name = $_POST["name"];
$gender = $_POST["gender"];
$power = $_POST["power"];

$sql = "INSERT INTO superheroes"(name,)

echo "Hello {$name}|{$gender}|{$power}";




?>