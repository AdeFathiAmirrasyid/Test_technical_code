<?php 
$value = $_POST['num1'];
$num = [];
for($i=0;$i< $value;$i++){
  if($i % 2 == 1){
    array_push($num, $i);
  }
};

echo json_encode($num);