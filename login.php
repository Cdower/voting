<?php
//ini_set('display_startup_errors',1);
//ini_set('display_errors',1);
//error_reporting(-1);

//ob_start();
session_name('admin_account');
session_start();

$myrin = $_POST['rin'];
$myname_last = $_POST['name_last'];
$myname_last = ucwords($myname_last);

$db = new mysqli('localhost', 'root', 'damnproud', 'voting');

if($db->connect_errno > 0){
  die('Unable to conncet to database['.$db->connect_errno . ']');
}

$myrin = 0 + $myrin;
$myname_last = $db->real_escape_string($myname_last);

$query = "SELECT * 
  FROM Students
  WHERE rin = '$myrin';";

$result = $db->query($query);

if($result->num_rows == 0){
  Echo '<script language="javascript"> alert("Please check RIN") </script>';
  header('Location: index.html');
}

$userData = mysqli_fetch_array($result, MYSQL_ASSOC);

if($userData['name_last'] != $myname_last){
  Echo '<script language="javascript"> alert("RIN and last name did not match, login fail") </script>';
  header('Location: index.html');
}

elseif(($userData['admin'] != 'Y' && $userData['power_user'] != 'Y') ){
  Echo "<script language='javascript'>";
  Echo "alert('You do not have sufficient privlaes to start a session.\nSpeak to a senate vote rep.')";
  Echo "</script>";
  
  header('Location: index.html');
}
else{
  if($userData['name_last'] == $myname_last){
    session_regenerate_id();
    $_SESSION['sess_admin_id'] = $userData['id'];
    $_SESSION['sess_admin_RIN'] = $userData['rin'];
    $_SESSION['sess_admin_name'] = $userData['name_first'].' '.$userData['name_last'];
    session_write_close();
    header('Location: admin.php');
  }
}

$result->free();
//ob_flush();
?>