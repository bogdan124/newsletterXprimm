<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require ("../../_connection.php");
require ("../../_functions.php");


if (isset($_POST['articol'])) {
    $news=$_POST['articol'];
    foreach ($news as $key => $value) {
       echo $q_insert = "UPDATE buletin SET orderb=$key WHERE iden=$value";
       customQuery($q_insert);
    }
}

if (isset($_POST['idrus'])) {
    $id=(int)$_POST['id'];
    $idrus=$_POST['idrus'];
echo $q_insert = "UPDATE buletin SET idrus='$idrus' WHERE iden=$id";
customQuery($q_insert) ; 
}


if (isset($_POST['note'])) {
    $id=(int)$_POST['id'];
    $note=$_POST['note'];
 echo $q_insert = "UPDATE buletin SET note='$note' WHERE iden=$id";
customQuery($q_insert) ;  
}
   


?>