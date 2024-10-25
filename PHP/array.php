<?php
$sports=array('football','basketball','handball');

$sport=['football','basketball','handball','voleyball','tenis'];

// echo $sport[0];
// echo end($sport);
// echo count(sport);

// for($i=0;$i<4;$i++){
// echo $sport[$i]. "<br>";
// }

// $leng=count($sport);
// for($i=0;$i<$leng;$i++){
//     echo $sport[$i]. "<br>";
// }


// array_push($sport,$value) //eshtonn elementin $value ne fund
// array_push($sport,$'Golf');
// var_dump($sport);

// array_pop($sport);// e hek elementin e fundit
// var_dump($sport);

// array_unshift($sport,'golf'); //eshton elementin ne fillim

// array_shift($sport); //ehek elementin e pare ne array

// $output=array_slice($sport,2);//imerr elementet prej elementit te 3 deri ne fund
// $output1=array_slice($sport,-2,1);//prej -2 dhe prej tyre vetem nje element
// $output2=array_slice($sport,0,3);//prej elementit 0,3 elementet etjera ne vayhdim
// var_dump($output2);

// $myvalue=[12,45,62,3];
// $average=array_sum($myvalue)/7;
// var_dump($average);

$dogs=array(
    array('chihuahua','mesico',20),
    array('husky','siberia',15),
    array('bulldog','england',10)
);

echo $dogs[0][0]. " origin: " .$dogs[0][1]. " life span: " .$dogs[0][2];

?>