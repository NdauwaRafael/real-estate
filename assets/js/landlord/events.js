var Events = function() {
    



//====================================================================================================
this.__construct = function() {
 result = new Result();
  create_house();
  create_tenant();
  create_bills();
}   

//====================================================================================================
var create_house = function(){



  $("#add_house_frm").submit(function(evt){
     evt.preventDefault();
     
     var url = $(this).attr('action');
     var postData = $(this).serialize();

     $.post(url, postData, function(responce){
            $("#add_house_status").show(); 
           if (responce.result==1) {
               result.success();
               $("#add_house_frm")[0].reset(); 
           }else{

               result.error(responce);
           }
                           
           
     },'json')
  })      
}
//====================================================================================================
var create_tenant = function(){
    
}
//====================================================================================================
var create_bills = function(){
    
}
//====================================================================================================

//====================================================================================================
this.__construct();
}
