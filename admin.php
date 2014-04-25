<?php

session_name('admin_account'); //for named sessions
session_start();

if(!isset($_SESSION['sess_admin_id']) /*|| (trim($_SESSION['sess_admin_id']) == ""*/) {
  header('Location: index.html');
  }else{
  //Echo $_SESSION['sess_admin_name'];
?>

<html>
  <head>
    <link rel="stylesheet" type="text/css" href="adminStyle.css">
    <title>VoteRPI Admin Page</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  </head>
  
  <body>

  <h1> Hello, <?php Echo $_SESSION['sess_admin_name'] ?></h1>
    
    <ul class="vertical_menu">
      <li>
	<a href="dummy.html" title="Back to the home page">Home</a>
      </li>
      <li>
	<a href="dummy.html" title="Upload CSV of students, their year, and RINs">Upload CSV</a>
      </li>
      <li>
	<a href="dummy.html" title="Articles on dog nutrition">Edit Positions</a>
      </li>
      <li>
	<a href="dummy.html" title="Products we recommend">Edit Candidates</a>
      </li>
      <li>
	<a href="dummy.html" title="Our bloggy nutrition updates">View Results</a>
      </li>
      <li>
	<a href="dummy.html" title="Our bloggy nutrition updates">Start Voting</a>
      </li>
      <li>
	<a href="logout.php" title="Logout Here">Logout</a>
      </li>
    </ul>
    
  </body>
  
</html>
<?php 
      }
?>