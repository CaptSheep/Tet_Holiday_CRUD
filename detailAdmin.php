<?php
include "Class/Admin.php";
 if (isset($_REQUEST["id"])){
     $admin = $_SESSION["admin"][$_REQUEST["id"]];
     print_r($admin);
 }