<?php

session_name('admin_account'); //for named sessions
session_start();

if(!isset($_SESSION['sess_admin_id']) /*|| (trim($_SESSION['sess_admin_id']) == ''*/) {
  header('Location: index.html');
  }else{

?>

<html>
  <head>
    <link rel="stylesheet" type="text/css" href="adminStyle.css">
    <title>VoteRPI Admin Page</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  </head>
  
  <body>

  <h1> Yolo!, <?php echo $_SESSION["sess_admin_name"] ?></h1>
    
    <ul class="vertical_menu">
      <li>
	<a href="dummy.html" title="Back to the home page">Home</a>
      </li>
      <li>
	<a href="dummy.html" title="The basics of dog nutrition">The basics</a>
      </li>
      <li>
	<a href="dummy.html" title="Articles on dog nutrition">Articles</a>
      </li>
      <li>
	<a href="dummy.html" title="Products we recommend">Products</a>
      </li>
      <li>
	<a href="dummy.html" title="Our bloggy nutrition updates">Blog</a>
      </li>
    </ul>
    
  </body>
  
</html>
<?php 
      }
?>