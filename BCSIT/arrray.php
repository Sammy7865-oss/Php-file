<?php
//array
// $arr =[ 2, "Ram","Kathmandu",];
 // echo $arr[0]."<br>";
 // echo $arr[1]."<br>";
// echo $arr[2]."<br>";
// rsort($arr);
// print_r($arr);

//  $arr1=[1,"Banana","Mango"];
// foreach($arr1 as $value){
//     echo "$value <br>";
// }

//types of array 
// 1. Indexed array
// 2. Associative array
// 3. Multidimensional array
  

//1. Indexed array

// $Fruits = ["Mango", "Banana","Apple"];
//    $Fruits[]="orange";
//    array_push($Fruits,"Pineapple");//add element at the end of the array
//    array_unshift($Fruits,"Grapes");//add element at the beginning of the array
//    array_pop($Fruits);//remove element from the end of the array
//    array_shift($Fruits);//remove element from the beginning of the array
 //    sort($Fruits);//sort the array in ascending order
//    rsort($Fruits);//sort the array in descending order
//    print_r($Fruits);
//    echo count($Fruits)."<br>";

   // traverse using loop 
//    echo "\na. Using for loop <br>";
//    for($i=0;$i<count($Fruits);$i++){
//     echo "Index $i=> $Fruits[$i] <br>";
//    }
//    // for each loop 
//    echo "\nb. Using foreach loop <br>";
//    foreach($Fruits as $index=>$value){
//     echo "Index $index=> $value <br>";
//    }

//    //8. search 
//    echo "\nc.Is 'Mango' in array?";
//    echo in_array("Mango",$Fruits) ? "Yes" : "No";
//    echo "\n Position of 'Mango' in array: ".array_search("Mango",$Fruits)."\n";

//find banana 
// $key=array_search("Banana",$Fruits);
// if($key!==false){
//     $Fruits [$key]="Grapes";
// }
// $Fruits =str_replace("Banana","Grapes",$Fruits);
// print_r($Fruits);

//2. Associative array
//Create Associative array
$students = [
    "Name" => "Samir Ansari",
    "Age" => 20,
    "City" => "Kathmandu"
];
echo "1.create array : <br>";
print_r($students);
echo "<br>";
// access
echo "\2. Name of student: ".$students["Name"]."<br>";

//3.update
$students["Age"]=21;
echo "\3. Updating Age of student: ".$students["Age"]."<br>";
print_r($students);
echo "<br>";

//4. add NEW KEY-VALUE PAIR
$student ["Country"]="Nepal";
$students["Gender"]="Male";
echo "\4. Adding new key-value pairs: <br>";
print_r($students);
echo "<br>";

// 5. Remove A PAIRS
unset($students["City"]);
echo "\n5. After removing City: <br>";
print_r($students);