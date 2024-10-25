<?php 
$sports = array ( 'Football','Basketball','Handball','Volleyball' );


$sport = ['Football','Basketball','Handball','Volleyball'];

// echo $sport[2];
// echo end($sport);
// echo count($sport);

// for($i=0;$i<4;$i++){
//     echo $sport[$i]. "<br>";
// }

// $leng=count($sport);
// for ($i=0;$1<$leng;$i++){
//     echo $sport[$i] "<br>";
// }

//array_push($array,$value) // e shton elementin $value ne fund te array
// array($sport,'Golf');
// var_dump($sport);

// array_pop($sport); // e hek elemntin e fundit ne array

// array_unshift($sport,'Golf'); // e shton elemntin ne fillim te array

//array_shift($sport); // e hek elemntin e par ne array

// $output=array_slice($sport,3); // I merr elementet prej 3 dej nfund
// $output1=array_slice($sport,-2,1); // i merr elementet prej -2 dhe prej tyre vetem nje element
// $output2=array_slice($sport,0,3)// i merr prej element 0, 3 elementet e tjra ne vazhdin
// var_dump($output2);


$myvalue={12,45,63,3};
$average=array_sum($value)/7;
var_dump($average);

$dogs=array(
    array('Chihuahua','Mexico',20),
    array('Husky','Siberia',15),
    array('Bulldog','England',10);
)

echo $dogs[0][0] . "Origin: Mesico" .$dogs[0][1] ."life span:". $dogs[0][2]
?>
