

<?php

require ("../../_connection.php");
require ("../../_functions.php");
    $word=$_GET['search'];
   
    //$conn = new mysqli("localhost","root","","newletter");
    
    $select="SELECT ID_articol,titlu,lead,imagine_lead FROM site_articole WHERE titlu LIKE '%$word%' ORDER BY data Desc LIMIT 25 ";
    $result=get_results($select);
   
    echo json_encode($result);
    


?>