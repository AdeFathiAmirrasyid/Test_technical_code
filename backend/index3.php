<?php 
$value = $_POST['num1'];


for($i=0;$i< strlen($value);$i++){
  for ($j=0; $j < $i; $j++) { 
    echo $i;
  }
  
  echo "<br>";
};
