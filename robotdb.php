<?php
/*connect to the base database*/
$conn= new mysqli("localhost","root","","basecontroller");
if($conn->connect_error){
  die('connection failed :'.$conn->connect_error);
}else{
if(isset($_POST['forward'])){
      $forward='forward';
      $empty=" ";
      $stmt = $conn->prepare("INSERT INTO `robotbase`(`forward`, `backward`, `left`, `right`, `stop`)
      VALUES (?,?,?,?,?)");
      $stmt->bind_param("sssss",$forward,$empty,$empty,$empty,$empty);
      $stmt->execute();
    header("Location:http://localhost/robotControlPanel.html");
    }
    elseif(isset($_POST['left'])){
          $left='left';
          $empty=" ";
          $stmt = $conn->prepare("INSERT INTO `robotbase`(`forward`, `backward`, `left`, `right`, `stop`)
          VALUES (?,?,?,?,?)");
          $stmt->bind_param("sssss",$empty,$empty,$left,$empty,$empty);
          $stmt->execute();
        header("Location:http://localhost/robotControlPanel.html");
        }
        elseif(isset($_POST['Stop'])){
              $Stop='Stop';
              $empty=" ";
              $stmt = $conn->prepare("INSERT INTO `robotbase`(`forward`, `backward`, `left`, `right`, `stop`)
              VALUES (?,?,?,?,?)");
              $stmt->bind_param("sssss",$empty,$empty,$empty,$empty,$Stop);
              $stmt->execute();
            header("Location:http://localhost/robotControlPanel.html");
            }
            elseif(isset($_POST['right'])){
                  $right='right';
                  $empty=" ";
                  $stmt = $conn->prepare("INSERT INTO `robotbase`(`forward`, `backward`, `left`, `right`, `stop`)
                  VALUES (?,?,?,?,?)");
                  $stmt->bind_param("sssss",$empty,$empty,$empty,$right,$empty);
                  $stmt->execute();
                header("Location:http://localhost/robotControlPanel.html");
                }
                elseif(isset($_POST['backward'])){
                      $backward='backward';
                      $empty=" ";
                      $stmt = $conn->prepare("INSERT INTO `robotbase`(`forward`, `backward`, `left`, `right`, `stop`)
                      VALUES (?,?,?,?,?)");
                      $stmt->bind_param("sssss",$empty,$backward,$empty,$empty,$empty);
                      $stmt->execute();
                    header("Location:http://localhost/robotControlPanel.html");
                    }
                    else{
                      echo "error";
                    }



}
/*connect to the arm database*/
$servo1=$_POST['servo1'];
$servo2=$_POST['servo2'];
$servo3=$_POST['servo3'];
$servo4=$_POST['servo4'];
$servo5=$_POST['servo5'];
$servo6=$_POST['servo6'];
$power= "ON";


$conn2= new mysqli("localhost","root","","robotcontroller");
if($conn2->connect_error){
  die('connection failed :'.$conn2->connect_error);
}else{

$stmt2 = $conn2->prepare("INSERT INTO `controller`(`servo1`, `servo2`, `servo3`, `servo4`, `servo5`, `servo6`,`power`)
VALUES (?,?,?,?,?,?,?)");
$stmt2->bind_param("iiiiiis",$servo1,$servo2,$servo3,$servo4,$servo5,$servo6,$power);
$stmt2->execute();
header("Location:http://localhost/robotControlPanel.html");
}

 ?>
