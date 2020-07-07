<?php
ob_start();

$db = new mysqli("localhost","root","", "ONLINEPOLL");
if($db->connect_errno > 0){
    die('Unable to connect to database [' . $db->connect_error . ']');  }

/*$db->query("CREATE DATABASE IF NOT EXISTS `ONLINEPOLL`");

mysqli_select_db($db,"ONLINEPOLL");


$stableR="CREATE TABLE IF NOT EXISTS Results (id int(11) NOT NULL auto_increment,
                 Department varchar(1000)NOT NULL,
                 Party varchar(30)NOT NULL,
                 Date Varchar(300)NOT NULL,
                 MAC Varchar(30)NOT NULL,PRIMARY KEY(id) )";
$db->query($stableR);
*/

?>

   
                              
                                         
                                        
    