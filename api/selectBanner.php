<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require ("../../_connection.php");
require ("../../_functions.php");

    
    
    $select="SELECT * FROM news_sponsori_banner WHERE active=1 ORDER BY id DESC LIMIT 8";##and data > DATE_ADD(NOW(), INTERVAL -7 DAY)
   // echo $select;
   
    $results=get_results($select);
   
    json_encode($results);
    
?>