<?php  
echo "<h1>Arrays</h1>";
echo "<h3>Indexed Array (Numerical Keys)</h3>";
$colors = array("red", "green", "blue");



echo "<h3>Associative Array (Named Keys)</h3>";
$person = array("name" => "Ratna", "age" => 26, "city" => "New York");


echo "<h3>Multidimensional Array (Arrays within Arrays)</h3>";

$users = array(
    array("name" => "Alice", "email" => "alice@example.com"),
    array("name" => "Bob", "email" => "bob@example.com")
);

   echo "<h3>Using array function</h3>";

    $fruits = array("apple", "banana", "cherry");

    $fruits = array("apple", "banana", "cherry");

     echo $fruits[0]; //apple
     echo $person['name'];  //Ratna
     echo $users[1]['email'];  //ratna@gmail.com

     //array holo ekta variable jar moddhe onk gula man rakha jay

     $name1 = "Ratna"
     $name1 = "Jannat"
     $name1 = "Fatema"

    //eta puraton poddhoti ja sob version e kora jay
     $names = array ("Ratna", "Jannat", "Fatema");

     /*eta new poddhoti  PHP version 5.4 ba 
     tarporer version gula te hoy*/

     $name2 = ["munia", "moni", "mukta"]
     


    
?>
