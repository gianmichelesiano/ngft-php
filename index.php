<!DOCTYPE html>
<html>
<body>

<?php 
# use PHP Version 8.1.2”;
function bagsclassification($input, $limitClassS = 20, $limitClassM = 30 , $limitClassL= 50 , $limitClassXL = 70) {
  $weight = (float)$input;
  $info = "The class for the weight <b>{$input}</b>  is: "; 
  
  if ($weight <= 0) {
      echo "{$info} weight could be > 0 <br>";
  } elseif (($weight > 0 ) && ($weight <= $limitClassS )){
      echo "{$info} Class S <br>";
  } elseif (($weight > $limitClassS ) && ($weight <=  $limitClassM )){
      echo "{$info} Class M <br>";
  } elseif (($weight >  $limitClassM ) && ($weight <= $limitClassL )){
      echo "{$info} Class L <br>";
  } elseif (($weight > $limitClassL ) && ($weight <= $limitClassXL )){
      echo "{$info} Class XL <br>";
  } elseif ($weight > $limitClassXL){
      echo "{$info} Not allowed to be shipped by air travel <br>";
  } else {
      echo "{$info} Not right value for bags weight";
  }
}

bagsclassification(-2);
bagsclassification(12);
bagsclassification(23);
bagsclassification(44);
bagsclassification(70);
bagsclassification(75);
bagsclassification('test');
?>

</body>
</html>