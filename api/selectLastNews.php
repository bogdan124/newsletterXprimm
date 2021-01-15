<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require ("../../_connection.php");
require ("../../_functions.php");

    $getnews=$_GET['news_number'];
    $id_to_compare=$_GET['compare_num'];
    $values =  $_POST["news"];  
    

       // $buildString=$buildString." 1=1";
        

   
   
    //$conn = new mysqli("localhost","root","","newletter");
    $idsec="121";
    $select="SELECT t.data,t.titlu,t.contor,t.ID_sec,t.ID_autor,t.ID_articol,t.lead, t.imagine_lead,b.idrus as idrus FROM site_articole t left join buletin b on t.ID_articol=b.iden where ID_sec in  ('$idsec') and vizibil=1 and arhivat=0   order by orderb";
    //echo $select;
    $result=get_results($select);
    
    foreach ($result as $key => $value) {
         $q_autori = "SELECT nume, email FROM $tabel_articole_autori
                                                     WHERE ID_autor IN (" . $value['ID_autor'] . ")";
         $autor=get_row($q_autori);                                           
         $result[$key]['autor']= $autor['nume']; 
         $result[$key]['lead']=strip_tags($value['lead']);
         $result[$key]['link']="http://www.xprimm.com/" . convert2URL ($value['titlu']) . "-articol-" . creaza_lista_sectiuni ($value["ID_sec"]) . "-" . $value["ID_articol"] . ".htm";                                          
      }  
   
    echo json_encode($result);
    


?>