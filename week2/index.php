<?php
/**
 * Created by PhpStorm.
 * User: 1608354
 * Date: 03/10/2016
 * Time: 15:05
 */

echo "Hello World";
echo "\r\n";
$myname = "Bilbo Baggins";
$myage = 111;
echo "My name is" . $myname . "and i am " . $myage;

echo "<html>One line \r\n Second line</html>";

$name = "Jamie";
print $name;

if ($name == "John"){
    print "I know you";

}
else {
    print "Who are you?";
}

$numberofhobbits = 2;

switch ($numberofhobbits){
    case 1:
        echo "1 sad hobbit :(";
        break;
    case 2:
        echo "2 happy hobbits :)";
        break;
    case 3:
        echo "3 hobbits are a crowd :D";
        break;
    default:
        echo "All the hobbits have gone home";

}
$myArray = array("do","re","mi");
    echo $myArray[0];
    $myArray[1] = "La";
    echo $myArray[1];
    unset($myArray[2]);

$lol = array("Specs","Mugs","Sausage Rolls");
$lol[1] = "Hugs";
unset($lol[2]);
    foreach($lol as $x){
        print "<p>$x</p>";
    }

for ($i = 1; $i < 10; $i ++){
    $counter = 0;
    print "I can count to " . $counter;
        $counter ++;
}



