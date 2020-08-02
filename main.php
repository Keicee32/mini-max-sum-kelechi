<?php
//given an array
$mini_max = array(11,12,13,14,15);

/**using simple array calculations using array keys
 * that is arrayToSum[0] etc
 */

 //summing everything except one
 $arrayOne = $mini_max[1] + $mini_max[2] + $mini_max[3] + $mini_max[4];

 //summing everthing except 2
 $arrayTwo = $mini_max[0] + $mini_max[2] + $mini_max[3] + $mini_max[4];

 //summing everthing except 3
 $arrayThree = $mini_max[0] + $mini_max[1] + $mini_max[3] + $mini_max[4];

 //summing everthing except 4
 $arrayFour = $mini_max[0] + $mini_max[1] + $mini_max[2] + $mini_max[4];

 //summing everthing except 5
 $arrayFive = $mini_max[0] + $mini_max[1] + $mini_max[2] + $mini_max[3];

 $mini_max_array = array($arrayOne, $arrayTwo, $arrayThree, $arrayFour, $arrayFive);

//  arsort($mini_max_array);


 echo $mini_max_array[4].' '.$mini_max_array[0];