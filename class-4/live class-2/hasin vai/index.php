<?php

// // even and odd condition1......

// $number = 21;

// $remainder = $number % 2;
// if($remainder == 0){
//     echo "The number $number is even.";
// }else{
//     echo "The number $number is odd.";
// }



// // even and odd condition2......

// $number = 21;

// $remainder = $number % 2;

// if($remainder == 0){
//     echo "The number $number is zero.";
// }else if($remainder == 0){
//     echo "The number $number is even.";
// }else{
//     echo "The number $number is odd.";
// }




// // switch case condition3......


// $number = 17;

// $remainder = $number % 2;

// switch ($remainder){
//     case 0:
//         echo "{$number} is an even number";
//         break;

//     case 1:
//         echo "{$number} is an odd number";
//         break;

//     default:
//         echo "{$number} is not a whole number";


// }


// //match condition4......


// $number = 17;

// $remainder = $number % 2;

// $result = match($remainder){
//     0 => "Even",
//     1 => "Odd"

// };

// echo "Number $number is $result";



// //color condition5.......

// $color = "yellow";

// if($color == "red"){
//     echo "Primary Color";
// }else if($color == "green"){
//     echo "Secondary Color";
// }else if($color == "blue"){
//     echo "Primary Color";
// }else if($color == "yellow"){
//     echo "Primary Color";
// }else{
//     echo "Other Color";
// }


// //color condition6.......

// $color = "yellow";

// if($color == "red" || $color == "blue" || $color == "yellow"){
//     echo "Primary Color";
// }else if ($color == "green" || $color == "orange" || $color == "purple"){
//     echo "Secondary Color";
// }else{
//     echo "Other Color";
// }



// //color condition7.......

// $color = "yellow";

// $dress = "shirt";

// if($color == "yellow" && $color == "shirt"){
//     echo "oh I love It!";
// }else if ($color == "yellow" || $dress == "pant"){
//     echo "I don't like it!";
// }



// //color condition8.......

// $color = "yellow";

// $result =match($color){
//     "red" => "Primary Color",
//     "green" => "Secondary Color",
//     "blue" => "Primary Color",
//     "yellow" => "Primary Color",
//     default => "Other Color"
// };

// echo $result;



// //ternary operator condition9..........

// $number = 16;
// $remainder = $number % 2;
// $result = ($remainder == 0) ? "Even Number" : "Odd Number";

// echo $result;



// //ternary operator condition10..........

// $number = 0;
// $remainder = $number % 2;
// $result = ($number == 0) ? "zero" : (($remainder == 0) ? "Even Number" : "Odd Number");

// echo $result;


// //ternary operator condition11..........

// $marks = 90;

// $result = $marks >= 90 ? "A+" :($marks >=80 ? "A" : ($marks >= 70 ? "A-" :($marks >= 60 ? "B" : ($marks >= 50 ? "C" : ($marks >= 40 ? "D" : "F"))) ));

// echo $result;


//if-else condition12..........

$marks = 80;

if ($marks >= 90) {
    $result = "A+";
} else if ($marks >= 80) {
    $result = "A";
} else if ($marks >= 70) {
    $result = "A-";
} else if ($marks >= 60) {
    $result = "B";
} else if ($marks >= 50) {
    $result = "C";
} else if ($marks >= 40) {
    $result = "D";
} else {
    $result = "F";
}

echo $result;