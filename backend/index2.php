<?php 
$value = $_POST['num1'];
$num = [];
for($i=1;$i< $value;$i++){
  array_push($num, $i);
};

echo json_encode($num);