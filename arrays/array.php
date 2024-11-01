<?php

// $dogs=array(
//     array('Chihuahua','Mexico',20),
//     array('Husky','Siberia',15),
//     array('Bulldog','England',10)

    
// );

// echo $dogs[0][0] . ": Origin:" . $dogs [0][1] . ", Life Span: " . $dogs[0][2];

// for($row=0;$row<3;$row++){
//     echo  "<p> <b> Row number $row </b> </p>";
//   echo "<ul>";
//    for($col=0;$col<3;$col++){
//       echo "<li>" . $dogs [$row][$col] . "</li>";
//    }
//   echo "</ul>";
// }


// $arrays=array(
//     array(1,2,3),
//     array(1,2,3),
//     array(1,2,3)
// );

// for($i=1;$i<4;$i++){
//  for($j=1;$j<4;$j++){
//     echo "Array: $i Element $j <br>";
//  }
// }

// for($i=1;$i<5;$i++){
//     for($j=1;$j<=$i;$j++){
//         echo '*';
//     }
//     echo '<br>';
// }

$grade=array( 'Math'=> '4' , 'Art'=> '5' , 'History'=> '5' , 'Music'=> '/' , );

// echo "Math grade is " . $grade['Math'];

foreach($grade as $subject=>$grade) {
    echo "Subject" . $subject . ", Grade:" . $grade;
    echo "<br>";
}
?>