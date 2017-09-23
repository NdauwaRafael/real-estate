var Landlord = function() {
    



//====================================================================================================
this.__construct = function() {
    Template = new Template();
    
    Events = new Events();
Result = new Result();
load_house();
}   

//====================================================================================================
var load_house = function(){
  $.get('../landlord_api/view_house', function(house_output){
      var output ='';
       for (var i = 0; i < house_output.length; i++) {
           var element = house_output[i];
           output +=Template.house(element);
       }
       $("#houses_display").html(output);
  }, 'json')
}
//====================================================================================================
var load_tenant = function(){
    
}
//====================================================================================================
var load_bills = function(){
    
}
//====================================================================================================

//====================================================================================================
this.__construct();
}
