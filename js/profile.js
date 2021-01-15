
var sendToQueueNews=[];
function addNewsObject(ID_NEWS,objectNews){
$(ID_NEWS).css("background-color","#f15454");
  console.log(objectNews,ID_NEWS);
  for(i =0;i<globalNews.length;i++){
    
    if(globalNews[i].ID_articol==objectNews){
      sendToQueueNews.push(globalNews[i]);
      console.log(sendToQueueNews);
    }
  }
 
}
$("#createTemplate-news").click(function(e){
  
  e.preventDefault();
  var username="6d12ff27-0474-4edf-87dc-daaed23249c3";
  var password="f6808b17-c354-46d0-941f-496e72092e59";
  var data=createTemplate(globalNews);
   localStorage.removeItem("data-to-send");
  localStorage.setItem('data-to-send', data);
  
 // console.log(data);
  $.ajax({
    url: "https://api.mjml.io/v1/render", 
    type:"POST",
    data:JSON.stringify({"mjml":data}),
    beforeSend: function (xhr) {
      xhr.setRequestHeader ("Authorization", "Basic " + btoa(username + ":" + password));
    },
    success: function(result){
      //console.log(result);
      $("#appened_data").html(result.html);
    }
     
  });


  

});




