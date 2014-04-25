<?php
session_name('admin_account')
;session_start();
unset($_SESSION['sess_admin_id']);
unset($_SESSION['sess_admin_name']);
unset($_SESSION['sess_admin_RIN']);  // where $_SESSION["nome"] is your own variable. if you do not have one use only this as follow **session_unset();**

header("Location: index.html");
?>