<?php
 
 //1.integer
 $a =10;
 var_dump($a);
 echo"<br>";


 $b = -10;
 var_dump($b);
 echo "<br>";

$c = 12.56;
var_dump($c);
echo "<br>";

$d = 10.2e4;
var_dump($d);
echo "<br>";

 //2.strings
 $text1="hello world";
 echo $text1;
 echo "<br>";
 

 //3.boolean
 $is_married = false;
 var_dump($is_married);
 echo "<br>";

 //4.arrays
  //4.1 normal array
  $fruits = array('bannana','mango','orange');
  print_r($fruits);
  echo "<br>";

//4.2 associative array
$trainers=array(
    "fullstack" => "jacob dennis",
    "pml" => "reetesh",
    "robotics" => "shiva"
    
);
  print_r($trainers);
  echo"<br>";

  //assignment operator
  $a = 0;

  // comparision operator
  // ==
  // !=
  // ===
  // !==
  // <
  // <=
  // >
  // >=

  $a<=10;

  //mathematical operators
  // +
  // -
  // *
  // /
  // %
  // .

  $text1="hello";
  $text2="world";

  echo $text1." to this ".$text2;
  echo"<br>" ;
  
  $a=10;
   if($a<=10){
     echo"value is lesser or equal";
   }else{
     echo"value is greater or not equal";
   }
   echo"<br>";

   // switch staement
   $case_variable = 6;

   switch($case_variable){
 case 1 : echo "its a one";
 break;
 case 2 : echo "its a two";
 break;
 case 3 : echo "its a three";
 break;
 case 4 : echo "its a four";
 break;
 case 5 : echo "its a five";
 break;
 default : echo "invalid input";
 break;
   }

   // for loop
   echo"<br>";
   for($i=0;$i<=10;$i++){
     echo $i. "<br>";
   }
   //dowhile loop
   $i=0;
   do{
     echo $i."<br>";
     $i++;
   }while($i<=10)

   
   ?>