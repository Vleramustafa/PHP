<?php
 $sports=array('Football','Basketball','Handball','Volleyball');

 $sport=['Football','Basketball','Handball','Volleyball'];

 //echo $sport[2];
 //echo end($sport);
 //echo count($sport);

 /*for($i=0;$i<4;$i++){
    echo $sport[$i]. "<br>";
 }
 */

 /*$leng=count($sport);
 for($i=0;$i<$leng;$i++){
    echo $sport[$i]. "<br>";
}
*/

/*array_push($sport,'Golf'); //e shton elementin $value ne fund te arrayit
var_dump($sport);
*/

array_pop($sport); //e hek elementin e shtuar ne array

array_unshift($sport,'Golf');//e shton elementin ne fillim te komentit

array_shift($sport);//e hek elementin e pare ne array(ata qe eshte e vendosum ne array e jo ajo qe e shtuam ma heret)

/*$output=array_slice($sport,2);//i merr elementet prej elementit te 3 deri ne fund
$output1=array_slice($sport,-2,1);//i merr elementet prej -2 dhe prej tyre vetem nje
$output2=array_slice($sport,0,3);//i merr elemntet prej 0 dhe i merr tre prej tyre qe jan ne vazhdim
var_dump($output2);
*/

/*$myvalue=[12,45,62,3];
$average=array_sum($myvalue)/7;
var_dump($average);
*/
$dogs=array(
    array('Chiuahua','Mexico',20),
    array('Husky','Siberia',15),
    array('Bulldog','england',10)
);

echo $dogs [0] [0] . "Origin: " .$dogs [0] [1] . "Life span:" .$dogs [0] [2];
?>