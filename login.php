<?php
$myrin = $_POST['rin'];
$myname_last = $_POST['name_last'];
$myname_last = ucwords($myname_last);

$db = new mysqli('localhost', 'root', 'damnproud', 'voting');

if($db->connect_errno > 0){
  die('Unable to conncet to database['.$db->connect_errno . ']');
}

$myrin = 0 + $myrin;

$query = "SELECT * 
  FROM Students
  WHERE rin = '$myrin';";

$result = $db->query($query);

if($result->num_rows == 0){
  echo '<script type="text/javascript"> alert("please check RIN") </script>';
  header('Location: index.html');
}

$userData = mysqli_fetch_array($result, MYSQL_ASSOC);

if($userData['name_last'] != $myname_last){
  echo '<script type="text/javascript"> alert("RIN and last name did not match, login fail") </script>';
  header('Location: index.html');
}

if(($userData['admin'] != 'Y' && $userData['power_user'] != 'Y') ){
  echo '<script type="text/javascript">';
  echo 'alert("You do not have sufficient privlaes to start a session.\nSpeak to a senate vote rep.")';
  echo '</script>';
  header('Location: index.html');
}

else{
  if($userData['name_last'] == $myname_last){
    header('Location: voting.html');
  }
}

$result->free();
$db->close();

?>