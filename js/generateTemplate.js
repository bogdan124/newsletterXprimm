
/*  var storeSpons;
$(document).ready(function () {
  
    
   $.ajax({
      url: "api/selectBanner.php", 
      type:"POST",
      success: function(result){
        console.log("testeee");
        resultSpons=JSON.parse(result);
        storeSpons=resultSpons;
       }
       
    });

});*/
function clickBuildTemplate(sendObject){
const monthNames = ["January", "February", "March", "April", "May", "June",
  "July", "August", "September", "October", "November", "December"];
 var today = new Date();
var dd = String(today.getDate()).padStart(2, '0');
var mm = monthNames[today.getMonth()]; //January is 0!
var yyyy = today.getFullYear();

today = dd + ' ' + mm + ' ' + yyyy;

 

 var store= `<mjml>
  <mj-head>
  <mj-style inline="inline">
      .linkm { color:#666666;text-decoration:none}
      a { color:#666666;text-decoration:none}
      .imgint { padding:5px;width:250px }
      .footerimg {text-align:center}
      .footerimg img {width:250px}
      .titlusec {color:#294F84}
    </mj-style>
   <mj-attributes>
     <mj-text font-family="Verdana, Tahoma, Arial, Helvetica, sans-serif" padding="0px 25px" font-size="13px" line-height='normal'></mj-text>
   </mj-attributes>
  </mj-head>
  <mj-body style='width:800px'>
    <!-- Your MJML body here -->
   <mj-section style='padding:0px'>
    <mj-column style='padding:0px'>
     <mj-image style='width:160px' align='left' src="https://www.1asig.ro/pictures/bannere/xprimm-news.jpg"/>
    </mj-column>
    <mj-column style='padding:0px'>
     <mj-text align='right' style='padding:0px'>
      <b>Insurance Newsletter No. 531, `+today+`       
        </b>
       
        </mj-text>
    </mj-column>
    </mj-section>
<mj-section style='padding:0px'>
 <mj-column style='padding:0px'>
 <mj-text style='padding:0px'>
 <div style="background:#294F84;width:100%"><b> <font color="#FFFFFF">www.xprimm.com</font></b></div>
 </mj-text>
 </mj-column>
 </mj-section>
   <mj-section style='padding:0px'>
      <mj-column style='padding:0px'>
        <mj-text style='padding:0px'>
        <font color="#FFFFFF">www.xprimm.com</font>
        <hr align="center" color="#666666" noshade="" size="1">
        <b><center><font size="1" align="center"><a href="#top_news">TOP NEWS</a> - <a href="#c_reports">CURRENT REPORTS</a> - <a href="#statistics">STATISTIC UPDATES</a></font></b>
        <hr align="center" color="#666666" noshade="" size="1"></center>
        </mj-text>
      </mj-column>
    </mj-section>
   <mj-section >
      <mj-column style='padding:0 10px 0 0;width:500px'>

         <mj-text style='padding:0px' id="top_news"><hr align="center" color="#666666" noshade="" size="1"><span class="meniu"><a name="statistics" id="statistics"></a><img name="" src="https://www.1asig.ro/pictures/xprimm/sageata_rosie_dreapta.jpg" width="11" height="8" alt=""></span>
        <span class="titlusec"> TOP NEWS</span><br/></mj-text>`;

        var add=store;
            for(i=0;i<sendObject.top_news.length;i++){ 

                if (sendObject.top_news[i].idrus) {
                  add= add+"<mj-text style='padding:0px'><p><a href='"+sendObject.top_news[i].link+"' class='linkm'><b>"+sendObject.top_news[i].titlu+"</b></a><br/><i> by "+sendObject.top_news[i].autor+", "+sendObject.top_news[i].data+" </i><br/>"+sendObject.top_news[i].lead+"</p><img src='https://www.xprimm.md/pictures/bannere/flag_en.jpg' alt='' width='20' height='14' border='0' align='absmiddle'><a href='https://www.xprimm.com/T%C3%BCrk-Reas%C3%BCrans-A-%C5%9E-celebrates-its-1st-anniversary-articol-2,143,11-16072.htm' target='_blank'>More</a><img src='https://www.xprimm.md/pictures/bannere/flag_ru.jpg' alt='Rusia' width='20' height='14' border='0' align='absmiddle'> <a href='"+sendObject.top_news[i].idrus+"' target=\_blank'>Продолжение</a></mj-text>";
                } else {
                   add= add+"<mj-text style='padding:0px'><p><a href='"+sendObject.top_news[i].link+"' class='linkm'><b>"+sendObject.top_news[i].titlu+"</b></a><br/><i> by "+sendObject.top_news[i].autor+", "+sendObject.top_news[i].data+" </i><br/>"+sendObject.top_news[i].lead+"</p><img src='https://www.xprimm.md/pictures/bannere/flag_en.jpg' alt='' width='20' height='14' border='0' align='absmiddle'><a href='https://www.xprimm.com/T%C3%BCrk-Reas%C3%BCrans-A-%C5%9E-celebrates-its-1st-anniversary-articol-2,143,11-16072.htm' target='_blank'>More</a></mj-text>";
                } 

               
                //console.log(1,add);
            }

         
        add=add+ `
        
      </mj-column>
     <mj-column style='padding:0px 10px 0 0;width:300px'>
        <mj-text style='padding:0px' id="interview"><hr align="center" color="#666666" noshade="" size="1"><span class="meniu"><a name="statistics" id="statistics"></a><img name="" src="https://www.1asig.ro/pictures/xprimm/sageata_rosie_dreapta.jpg" width="11" height="8" alt=""></span>
        <font class="titlusec"> INTERVIEW</font><br/></mj-text>`;
      
        for(i=0;i<sendObject.interviu.length;i++){
            add= add+"<mj-text style='padding:0px'><p><img class='imgint' style='padding:5px;width:250px' src='https://xprimm.com/images/articole/"+sendObject.interviu[i].imagine_lead+"'><a href='"+sendObject.interviu[i].link+"' class='linkm'><b>"+sendObject.interviu[i].titlu+"</b></a><br/><i> by "+sendObject.interviu[i].autor+", "+sendObject.interviu[i].data+" </i><br/>"+sendObject.interviu[i].lead+"</p><img src='https://www.xprimm.md/pictures/bannere/flag_en.jpg' alt='' width='20' height='14' border='0' align='absmiddle'><a href='"+sendObject.interviu[i].link+"' target='_blank'>More</a></mj-text>";
        }

      

      add=add+   `
        
        <mj-text style='padding:0px' id="statisctic"><hr align="center" color="#666666" noshade="" size="1"><span class="meniu"><a name="statistics" id="statistics"></a><img name="" src="https://www.1asig.ro/pictures/xprimm/sageata_rosie_dreapta.jpg" width="11" height="8" alt=""></span>
        <span class="titlusec"> STATISTICS</span><br/></mj-text>`;
        for(i=0;i<sendObject.stats.length;i++){
          add= add+"<mj-text style='padding:0px'><p><a href='"+sendObject.stats[i].link+"' class='linkm'><b>"+sendObject.stats[i].titlu+"</b></a><br/><i> by "+sendObject.stats[i].autor+", "+sendObject.stats[i].data+" </i><br/>"+sendObject.stats[i].lead+"</p><img src='https://www.xprimm.md/pictures/bannere/flag_en.jpg' alt='' width='20' height='14' border='0' align='absmiddle'><a href='"+sendObject.stats[i].link+"' target='_blank'>More</a></mj-text>";
      }

       add=add+`
        
        <mj-text style='padding:0px' id="on the move"><hr align="center" color="#666666" noshade="" size="1"><span class="meniu"><a name="statistics" id="statistics"></a><img name="" src="https://www.1asig.ro/pictures/xprimm/sageata_rosie_dreapta.jpg" width="11" height="8" alt=""></span>
        <span  class="titlusec"> ON THE MOVE</font><br/></mj-text>
        `;
        for(i=0;i<sendObject.ont_the_move.length;i++){
          add= add+"<mj-text style='padding:0px'><p><a href='"+sendObject.ont_the_move[i].link+"' class='linkm'><b>"+sendObject.ont_the_move[i].titlu+"</b></a><br/><i> by "+sendObject.ont_the_move[i].autor+", "+sendObject.ont_the_move[i].data+" </i><br/>"+sendObject.ont_the_move[i].lead+"</p></mj-text>";
      }


       add=add+`
        <mj-text style='padding:0px'>
<div align='center'><a href='https://www.vig.com/en/home.html' target='_blank'><img src='https://www.1asig.ro/pictures/bannere/vig_140.jpg' alt='VIG' width='120' border='0'></a></div>
</mj-text><mj-text style='padding:0px'>
<hr align='center' color='#666666' noshade='' size='1'>
</mj-text><mj-text style='padding:0px'>
<hr align='center' color='#666666' noshade='' size='1'>
</mj-text><mj-text style='padding:0px'>
<div align='center'><a href='https://belarus-re.com/en/' target='_blank'><img src='https://www.xprimm.com/pictures/xprimm/belarus-re-3147653.png' width='120' border='0'></a></div>
</mj-text><mj-text style='padding:0px'>
<hr align='center' color='#666666' noshade='' size='1'>
</mj-text><mj-text style='padding:0px'>
<div align='center'>
<a href='https://xprimmpublications.com/books/nljs/#p=1'><img src='https://www.1asig.ro/pictures/xprimm/Banner-XPRIMM-Reports-350x250.gif' width='280' height='' hspace='5' vspace='5' border='0' align='middle'></a>
</div>
</mj-text><mj-text style='padding:0px'>
<hr align='center' color='#666666' noshade='' size='1'>
</mj-text><mj-text style='padding:0px'>
<hr align='center' color='#666666' noshade='' size='1'>
</mj-text><mj-text style='padding:0px'>
<div align='center'><a href='https://www.deutscherueck.com' target='_blank'><img src='https://www.1asig.ro/pictures/bannere/Dt_Rueck_300.jpg' width='220' vspace='10' border='0'></a></div>
</mj-text><mj-text style='padding:0px'>
<hr align='center' color='#666666' noshade='' size='1'>
</mj-text><mj-text style='padding:0px'>
<div align='center'><a href='https://ergo.ro' target='_blank'><img src='https://www.1asig.ro/pictures/bannere/ergo140.jpg' alt='ERGO' width='130' vspace='5' border='0'></a></div>
</mj-text><mj-text style='padding:0px'>
<hr align='center' color='#666666' noshade='' size='1'>
</mj-text><mj-text style='padding:0px'>
<div align='center'><a href='https://www.euroins.ro/' target='_blank'><img src='https://www.1asig.ro/pictures/bannere/euroins_2016_150.jpg' alt='EUROINS' width='150' height='46' vspace='5' border='0'></a></div>
</mj-text><mj-text style='padding:0px'>
<hr align='center' color='#666666' noshade='' size='1'>
</mj-text><mj-text style='padding:0px'>
<div align='center'>
<a href='https://promo.1asig.ro/www/delivery/ck.php?oaparams=2__bannerid=1255__zoneid=0__log=no__cb=af5c989cb6__oadest=mailto%3Asanatate%40euroins.ro%3Fsubject%3D%2520Doresc%2520sa%2520achizitionez%2520o%2520asigurare%2520facultativa%2520de%2520sanatate%26body%3DBuna%2520ziua%252C%250A%250A%2520%250A%250AMa%2520%2520numesc%2520...............................si%2520as%2520dori%2520consiliere%2520in%2520vederea%2520achizitionarii%2520unei%2520asigurari%2520facultative%2520de%2520sanatate%2520Euroins.%250A%250AMa%2520puteti%2520contacta%2520la%2520telefon....................sau%2520pe%2520email.%250A%250A%2520%250A%250ACele%2520bune' target='_blank'><img src='https://promo.1asig.ro/www/images/ed09fe906ab57a8a01035042c8705802.gif' width='300' height='250' alt='' title='' border='0'></a>
</div>
        </mj-text>
        <mj-text style='padding:0px' id="events"><hr align="center" color="#666666" noshade="" size="1"><span class="meniu"><a name="statistics" id="statistics"></a><img name="" src="https://www.1asig.ro/pictures/xprimm/sageata_rosie_dreapta.jpg" width="11" height="8" alt=""></span>
        <span class="titlusec"> EVENTS</span><br/> </mj-text>
        `;
        for(i=0;i<sendObject.evenimente.length;i++){
          add= add+"<mj-text style='padding:0px'><p>"+sendObject.evenimente[i].lead+"</p></mj-text>";
      }

       add= add+` <mj-text style='padding:0px' id='events'><hr align='center' color='#666666' noshade=' size='1'><span class='meniu'><a name='statistics' id='statistics'></a><img  src='https://www.1asig.ro/pictures/xprimm/sageata_rosie_dreapta.jpg' width='11' height='8' alt=''></span><span style='color:#294F84'> CURRENT XPRIMM REPORTS</span><br/>`;
add= add+`<ul><li><a href='http://www.xprimm.com/Subscribe-now-136.htm' target='_blank'>XPRIMM
                Ins. Report 1H2020</a></li><li><a href='http://www.xprimm.com/Subscribe-now-136.htm' target='_blank'>RUSSIA
                FY2019</a></li><li><a href='http://www.xprimm.com/Subscribe-now-136.htm' target='_blank'>TURKEY
                FY2019/1H2020</a></li><li><a href='http://www.xprimm.com/Subscribe-now-136.htm' target='_blank'> Motor
                Ins. Report FY2019/1H2020</a></li> </ul></mj-text>`;
add=add+`
       
      </mj-column>
    </mj-section>
   <mj-section style='padding:0px'>
    <mj-text style='padding:0px' style='padding:0px;text-align:center'>
    <hr align='enter' color="666666" noshade="" size="1">
   <div class='footerimg'>
    <img  href="https://www.xprimm.com/index.php" src="https://xprimm.com/pictures/xprimm/xprimmcom_h100.png"/></div>
     </mj-text>
    </mj-section>
  </mj-body>
</mjml>
`;
store=add;
//console.log(store);
localStorage.setItem('data-to-send', store);
return store;
}