<?php  
echo "<h1>Arrays</h1>";
echo "<h3>Indexed Array Numerical Keys</h3>";


     //array holo ekta variable jar moddhe onk gula man rakha jay

     $name1 = "Ratna";
     $name2 = "Jannat";
     $name3 = "Fatema";

    //eta puraton poddhoti ja sob version e kora jay
     $names = array ("Ratna", "Jannat", "Fatema");

     /*eta new poddhoti  PHP version 5.4 ba 
     tarporer version gula te hoy*/

     $name = ["munia", "moni", "mukta"];

     //kivabe array theke data ber korbo

     echo $name[0]; 
     echo "<br>";
     echo $names[1];
     echo "<br>";

     //kivabe array er kono item change korte hoy
     $name[2] = "Tour e jabo";

     echo $name[2];

     //new value kivabe add korbo
     $name[] = "Shylet";

    //shese add hobe Shylet
     echo $name[3];

     unset($name3);

     //Function	
count($name);             //মোট কয়টা item আছে
array_values($name);            //শুধু values return করে
array_keys($name);            //index/key গুলো return করে
in_array("munia", $name);	    //munia আছে কিনা check করে
array_key_exists(1, $name);      //index/key 1 আছে কিনা check করে
    

//kivabe loop kore sob item show korano jay
//simple foreach with indexed array
/*foreache ($name as $names) {
    echo $names . "<br>";  eta error astache 
}*/

//associative array
$team = ["name" => "Nazmul", "age" => 26];
    foreach ($team as $key => $value) {

        echo "$key: $value <br>";
    }

//Associative array mane nijer  moto kore key dewa
$person = array(
    "name" => "Masud",
    "age" => 25,
    "team" => "Own"
);

echo $person["name"]; //Masud
    
?>
