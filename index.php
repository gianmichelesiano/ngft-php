<?php 
# use PHP Version 8.1.2”;
function bagsclassification($input, $limitClassS = 20, $limitClassM = 30 , $limitClassL= 50 , $limitClassXL = 70) {
  $weight = (float)$input;
  $info = "The class for the weight <b>{$input}</b>  is: "; 
  
  if ($weight <= 0) {
     $retVal =   "{$info} weight could be > 0 <br>";
  } elseif (($weight > 0 ) && ($weight <= $limitClassS )){
      $retVal = "{$info} Class S <br>";
  } elseif (($weight > $limitClassS ) && ($weight <=  $limitClassM )){
      $retVal = "{$info} Class M <br>";
  } elseif (($weight >  $limitClassM ) && ($weight <= $limitClassL )){
      $retVal = "{$info} Class L <br>";
  } elseif (($weight > $limitClassL ) && ($weight <= $limitClassXL )){
      $retVal = "{$info} Class XL <br>";
  } elseif ($weight > $limitClassXL){
      $retVal = "{$info} Not allowed to be shipped by air travel <br>";
  } else {
      $retVal = "{$info} Not right value for bags weight";
  }
  return $retVal;
}

echo(bagsclassification(-2));
echo(bagsclassification(12));
echo(bagsclassification(23));
echo(bagsclassification(40));
echo(bagsclassification(75));
echo(bagsclassification("test"));

?>

</body>
</html>
