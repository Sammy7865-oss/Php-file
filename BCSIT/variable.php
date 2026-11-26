<?php
// const a=5;
// echo a;
// const a=10;
// echo a;

// $a=10;//valid
// $a_=14;//valid
// $_a=15;//valid
// $@a=11;//invalid
// $full name="Samir Ansari";//invalid
// $full -name="BCSIT";//invalid

// local global variable
$a=5;
function hello(){
    echo "Hello, World!";
  global $a;
  echo $a;
}
hello();
?>