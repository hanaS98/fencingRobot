<?php
$conn= new mysqli("localhost","root","","basecontroller");
if($conn->connect_error){
  die('connection failed :'.$conn->connect_error);
}else{

$sql = mysqli_query($conn,"SELECT * FROM `robotbase` ORDER BY ID DESC LIMIT 1");
$data=mysqli_fetch_row($sql);
if($data[1]!=" "){
  echo $data[1];
}elseif($data[2]!=" "){
  echo $data[2];
}elseif($data[3]!=" "){
  echo $data[3];
}elseif($data[4]!=" "){
  echo $data[4];
}elseif($data[5]!=" "){
  echo $data[5];
}else{
  echo "Empty";
}

$conn->close();
}
 ?>
