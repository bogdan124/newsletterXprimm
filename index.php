<?php
/*ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);*/
require ("../_connection.php");
require ("../_functions.php");
// Sectiuni
$tabel_sectiuni       = "site_sectiuni";   

?>
<html><head>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=2, user-scalable=no">
    <meta name="description" content="Semantic-UI-Forest, collection of design, themes and templates for Semantic-UI.">
    <meta name="keywords" content="Semantic-UI, Theme, Design, Template">
    <meta name="author" content="PPType">
    <meta name="theme-color" content="#ffffff">
    <title>Dashboard </title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css" type="text/css">
    <style type="text/css">
      body {
        -webkit-font-smoothing: antialiased;
        -moz-font-smoothing: grayscale;
      }

      #sidebar {
        position: fixed;
        height: 100vh;
        background-color: #f5f5f5;
        padding-top: 68px;
        padding-left: 0;
        padding-right: 0;
        box-shadow: 1px 0px 2px 1px rgba(0, 0, 255, .2);
      }

      #sidebar .ui.menu > a.item {
        padding: 10px 20px;
        line-height: 20px;
        color: #337ab7;
        border-radius: 0 !important;
        margin-top: 0;
        margin-bottom: 0;
      }

      #sidebar .ui.menu > a.item.active {
        background-color: #337ab7;
        color: white;
        border: none !important;
      }

      #sidebar .ui.menu > a.item:hover {
        background-color: #eee;
        color: #23527c;
      }

      #content_append_data {
        padding-top: 56px;
        padding-left: 20px;
        padding-right: 20px;
      }

      #content_append_data h1 {
        font-size: 36px;
      }

      #content_append_data .ui.dividing.header {
        width: 100%;
      }

      .ui.centered.small.circular.image {
        margin-top: 14px;
        margin-bottom: 14px;
      }

      .ui.borderless.menu {
        box-shadow: none;
        flex-wrap: wrap;
        border: none;
        padding-left: 0;
        padding-right: 0;
        
      }

      .ui.mobile.only.grid .ui.menu .ui.vertical.menu {
        display: none;
      }
      li.content_news__.ui-state-default {
          list-style-type: none;
      }
      li.content_news__.ui-state-default {
          background-color: white;
          /* box-shadow: 5px 10px #888888; */
          box-shadow: 1px 0px 2px 1px rgba(0, 0, 255, .2);
          margin-top: 20px;
          padding: 16px;
          width: 99%;
      }
      ul#content_append {
       overflow: auto !important;
       width: 120%;
     }

    </style>
      <script async="" src="//www.google-analytics.com/analytics.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.js"></script>
  </head>

  <body id="root">
    <div class="ui tablet computer only padded grid">
      <div class="ui inverted borderless top fixed fluid menu">
        <a class="header item">NewsLetter</a>
        <div class="right menu">
        
          <a id="saveDataNewsletter" class="item" onclick="window.location.reload()" >Save</a> 
          <!-- <a class="item" id="saveDataNewsletter" >Save</a>  -->
        </div>
      </div>
    </div>
    <div class="ui mobile only padded grid">
      <div class="ui top fixed borderless fluid inverted menu">
        <a class="header item">NewsLetter</a>
        <div class="right menu">
          <div class="item">
            <button class="ui icon toggle basic inverted button">
              <i class="content icon"></i>
            </button>
          </div>
        </div>
      
      </div>
    </div>
    <div class="ui padded grid">
      <div class="three wide tablet only three wide computer only column" id="sidebar">
        <div class="ui vertical borderless fluid text menu">
         
          <div class="ui hidden divider"></div>
          <a class="item" href="?s=interviu" >Interviu</a>
          <a class="item" href="?s=top_news">Top News</a> 
          <a class="item" href="?s=ont_the_move">On the Move</a> 
          <a class="item" href="?s=corona">Coronavirus</a>
          <a class="item" href="?s=stats">Statistici</a>
          <a class="item" href="?s=market_trends"> Markets and Trends</a>
          <a class="item" href="?s=evenimente"> Evenimente</a>
          <div class="ui hidden divider"></div>
          <a class="item" target="_blank" href="/news/template.html"> Builder</a>  
      
        </div>
      </div>
     
      <div class="sixteen wide mobile thirteen wide tablet thirteen wide computer right floated column" id="content_append_data">

<?php


if (isset($_GET['s'])) {
   switch ($_GET['s']) {
     case 'interviu':
        $idsec="121";
        $and=" ";
      break;

      case 'evenimente':
        $idsec="50";
        $and=" ";
      break;

      case 'top_news':
       
        $idsec="8,124,11,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,46,39,30,47,32,40,31,33,48,49,34,35,118,140,141,149,163 ";
        $and="and titlu not like '<!--om-->%' and titlu not like '%TATISTICS:%' ";

      break;

      case 'ont_the_move':
        $idsec="8,124,11,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,46,39,30,47,32,40,31,33,48,49,34,35,118,140,141,149,163  ";
         $and=" and titlu  like '<!--om-->%' ";
      break;

      case 'stats':
        $idsec="8,124,11,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,46,39,30,47,32,40,31,33,48,49,34,35,118,140,141,149,163  ";
        $and=" and titlu not like '<!--pc-->%' and titlu like '%TATISTICS:%' ";
        
      break;
     
     default:
       $idsec="8,124,11,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,46,39,30,47,32,40,31,33,48,49,34,35,118,140,141,149,121,163";
       $and="";
       break;
   }
  
   
}


 
$listNews= "(".$idsec.") ".$and;

 $select="SELECT t.data,t.titlu,t.contor,t.ID_sec,t.ID_autor,t.ID_articol,t.lead, t.imagine_lead,b.idrus as idrus FROM site_articole t left join buletin b on t.ID_articol=b.iden where ID_sec in $listNews and vizibil=1 and arhivat=0  and data > DATE_ADD(NOW(), INTERVAL -7 DAY) order by orderb";


   
    $results=get_results($select);
 foreach ($results as $key => $value) {
     $q_autori = "SELECT nume, email FROM 1asig.site_articole_autori
                                                     WHERE ID_autor IN (" . $value['ID_autor'] . ")";
        
         $autor=get_row($q_autori);  
         $results[$key]['autor']= $autor['nume']; 
         $results[$key]['lead']=strip_tags($value['lead']);
         $results[$key]['link']="http://www.xprimm.com/" . convert2URL ($value['titlu']) . "-articol-" . creaza_lista_sectiuni ($value["ID_sec"]) . "-" . $value["ID_articol"] . ".htm";   
                                               
        
       }

?>

<div class="ui padded grid">
    <div class="ui row"><h3><?=strtoupper($_GET['s'])?></h3>
       </div>
    
 

      <div class="ui grid">
        
        <div class="one row">
          <div class="column"><ul class="add_news ui-sortable" id="content_append">
          <?php foreach ($results as $key => $result) { 
            $q_buletin="INSERT IGNORE INTO buletin (iden) values (".$result["ID_articol"].")";
            customQuery($q_buletin);
            
            $q_buletin = "SELECT * FROM buletin WHERE iden=".$result["ID_articol"];
            $bul=get_row($q_buletin);
           
          ?>
           
          
            <li class="content_news__ ui-state-default" id="articol_<?=$result['ID_articol']?>"
          data-idarticol=<?=$result['ID_articol']?>>
          <div class="row">
            <div class="col-md-2">
            <span class="ui-icon ui-icon-arrowthick-2-n-s"></span>
            <img class="imagine_news" src="<?=$result['imagine_lead']?>"/>
            </div>
            <div class="col-md-10">
            <p class="content_news"><b><?=$result['titlu']?></b></p>
            
           <input class="idrus<?=$result['ID_articol']?>" type='text' name='idrus' placeholder='russian link' value="<?=$bul['idrus']?>" />

           <input class="note<?=$result['ID_articol']?>" type='text' name='note' placeholder='note' value="<?=$bul['note']?>" />
            </div>
          
          </div>
          </li>
<script>
    $('.idrus<?=$result["ID_articol"]?>').change(function() {

      $.ajax({
        type: "POST",
        url: '/news/api/orderNews.php',
        data: {id:<?=$result["ID_articol"]?>,idrus:this.value},
        success: function (result) {
                  $('.idrus<?=$result["ID_articol"]?>').css({'color' : 'green'});
                  $('.idrus<?=$result["ID_articol"]?>').css({'border-color' : 'green'});
            }
      });

    });

    $('.note<?=$result["ID_articol"]?>').change(function() {

      $.ajax({
        type: "POST",
        url: '/news/api/orderNews.php',
        data: {id:<?=$result["ID_articol"]?>,note:this.value},
        success: function (result) {
                  $('.note<?=$result["ID_articol"]?>').css({'color' : 'green'});
                  $('.note<?=$result["ID_articol"]?>').css({'border-color' : 'green'});
            }
      });

    });
  </script>


            <?php } ?>  
          </ul></div>
        
        </div>
      </div>
    

 
 
  
</div>

 <script src="/news/js/generateTemplate.js?v=<?=rand(0,999)?>"></script>

    <script>
      localStorage.removeItem("data-to-send");
      GlobalObject={};
      SecondGlobalObject={};

<?php
$sectiuni=array("interviu","evenimente","top_news","ont_the_move","stats");

foreach ($sectiuni as $key => $sec) {
 $jsr="";
 $listNews="";
  switch ($sec) {
     case 'interviu':
        $idsec="121";
        $and=" ";
      break;

      case 'evenimente':
        $idsec="50";
        $and=" ";
      break;

      case 'top_news':
       
        $idsec="8,124,11,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,46,39,30,47,32,40,31,33,48,49,34,35,118,140,141,149,163 ";
        $and="and titlu not like '<!--om-->%' and titlu not like '%TATISTICS:%' ";

      break;

      case 'ont_the_move':
        $idsec="8,124,11,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,46,39,30,47,32,40,31,33,48,49,34,35,118,140,141,149,163  ";
         $and=" and titlu  like '<!--om-->%' ";
      break;

      case 'stats':
        $idsec="8,124,11,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,46,39,30,47,32,40,31,33,48,49,34,35,118,140,141,149,163  ";
        $and=" and titlu not like '<!--pc-->%' and titlu like '%TATISTICS:%' ";
        
      break;
      

    
   }
$listNews= "(".$idsec.") ".$and;

 $select="SELECT t.data,t.titlu,t.contor,t.ID_sec,t.ID_autor,t.ID_articol,t.lead, t.imagine_lead,b.idrus as idrus FROM site_articole t left join buletin b on t.ID_articol=b.iden where ID_sec in $listNews and vizibil=1 and arhivat=0  and data > DATE_ADD(NOW(), INTERVAL -7 DAY) order by orderb";

 

   if ($sec=='evenimente') {
      $results[]=array('lead'=>genereaza_evenimente(50));
       $jsr=json_encode($results);
      
   } else {
    $results=get_results($select);
    foreach ($results as $key => $value) {
     $q_autori = "SELECT nume, email FROM 1asig.site_articole_autori
                                                     WHERE ID_autor IN (" . $value['ID_autor'] . ")";
         $autor=get_row($q_autori);                                           
         $results[$key]['autor']= $autor['nume'];
        $results[$key]['imagine_lead']= $value['imagine_lead'];
         $results[$key]['autor']= $autor['nume']; 
         $results[$key]['lead']=strip_tags($value['lead']);
         $results[$key]['link']="http://www.xprimm.com/" . convert2URL ($value['titlu']) . "-articol-" . creaza_lista_sectiuni ($value["ID_sec"]) . "-" . $value["ID_articol"] . ".htm";  
       }

    $jsr=json_encode($results);
   }

  
  ?>
    GlobalObject['<?=$sec?>']=<?=$jsr?>;
     
       
<?php } ?>

 //console.log(GlobalObject);
 clickBuildTemplate(GlobalObject);   

    </script>
  
 
   
   
    <script>        
      
$( "#content_append" ).sortable({
  scroll: false, scrollSensitivity: 100, scrollSpeed: 100,
  update: function (event, ui) {
        var data = $(this).sortable('serialize');
        //console.log($(this).sortable('serialize'));
        // POST to server using $.post or $.ajax
        $.ajax({
            data: data,
            type: 'POST',
            url: '/news/api/orderNews.php'
        });
    }

});
$( "#content_append" ).disableSelection();

      $(document).ready(function() {
        $(".ui.toggle.button").click(function() {
          $(".mobile.only.grid .ui.vertical.menu").toggle(100);
        });
      });
      $("#saveDataNewsletter").click(function() {
       var dataSave= localStorage.getItem('data-to-send');

        
        // salvam mjmm;
        $.ajax({
          url: "api/uploadMjml.php", 
          type:"POST",
          data:{mtext:JSON.stringify({"mjml":dataSave})},
          success: function(result){
            console.log(result)
          }
            
        });


 
      });





    </script>
  
 <div id="appened_data"></div> 
  

</body>
</html>
<?php


function genereaza_evenimente($idsec){
global $tabel_articole, $tabel_articole_autori;
        $q_asigurari = "SELECT ID_autor, ID_articol, ID_sec, titlu, lead, imagine_lead, data, ora_adaugarii
                FROM site_articole
                WHERE ID_sec = $idsec
                AND vizibil = 1
                AND arhivat = 0
                AND data_expirarii >= NOW()
                ORDER BY data_expirarii ASC";
                  
        $r_asigurari = get_results($q_asigurari);

$asig="";
                      foreach ($r_asigurari as $key => $stire_asigurari) {
                      
                     
                        $titlu = str_replace ("[###]", "", $stire_asigurari["titlu"]);
                        $titlu = str_replace ("<!--icar2009-->", "", $titlu);

                        # afisam titlul
                        




$img="";
$asig.= '<a href="http://xprimm.com/Future-events-3,50.htm" target="_blank"><b>'.$titlu.'</b></a><br>'.$stire_asigurari["lead"].'<br>
            <hr align="center" color="#666666" noshade size="1">';



                                  }
  return $asig;


}


?>