<?php
// $a=0;
// if($a>0){
//     echo "a is positive";
// }
// else if($a<0){
//     echo "a is negative";
// }
// else{
//     echo "a is zero";
// }
//greater of three numbers
// $a=10;
// $b=15;
// $c=5;
// if($a>$b && $a>$c){
//     echo "a is greater";
// }
// else if($b>$a && $b>$c){
//     echo "b is greater";
// }
// else{
//     echo "c is greater";
// }

// ternary operator
// $a=10;
// $b=15;
// $c=5;
// echo ($a>$b && $a>$c) ? "a is greater" : (($b>$a && $b>$c) ? "b is greater" : "c is greater");

//Switch Statement
$day=7; 
switch($day){
    case 1:
        echo "Monday";
        break;
    case 2:
        echo "Tuesday";
        break;
    case 3:
        echo "Wednesday";
        break;
    case 4:
        echo "Thursday";
        break;
    case 5:
        echo "Friday";
        break;
    case 6:
        echo "Saturday";
        break;
    case 7:
        echo "Sunday";
        break;
    default:
        echo "Invalid day";
}

$b=2;
switch($b){
    case 1:
        if ($a==1){
            echo "a is negative";
        }
            else{
                echo "a is positive";
            }
        
            break;
        
        case 2:
            $a=10;
            $c=20;
            if($a>$c){
                echo "a is greater";
            }
            else{
                echo "c is greater";
            }
            break;
}
?>