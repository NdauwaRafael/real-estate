<div class="row home-bg" >

<div class="container">


<div class="row">
  <div class="col-md-offset-2 col-sm-8 col-md-8">
   <div class="panel panel-default">
    <div class="panel-heading">
      <h3 class="panel-title"><span class="glyphicon glyphicon-user"></span> Login to Real-Estate System</h3>
    </div>
      <div class="panel-body">

<div id="status" class="alert alert-error"></div>

                <form class="form-horizontal" action="<?=site_url('api/register');?>" id="reg_frm">
                <div class="form-group">
                    <label for="fname" class="col-sm-2 control-label">First Name</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" name="fname" id="fname" placeholder="First Name">
                    </div>
                </div>

                <div class="form-group">
                    <label for="lname" class="col-sm-2 control-label">Last Name</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" name="lname" id="lname" placeholder="Last Name">
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
                    <div class="col-sm-10">
                    <input type="email" name="email" class="form-control" id="inputEmail3" placeholder="Email">
                    </div>
                </div>

                <div class="form-group">
                    <label for="idno" class="col-sm-2 control-label">National Id Number</label>
                    <div class="col-sm-10">
                    <input type="number" name="idno" class="form-control" id="idno" placeholder="National IDno / Passport">
                    </div>
                </div>

                <div class="form-group">
                    <label for="Occupation" class="col-sm-2 control-label">Occupation</label>
                    <div class="col-sm-10">
                    <input type="text" name="occ" class="form-control" id="occ" placeholder="Occupation">
                    </div>
                </div>

                <div class="form-group " id="password">
                    <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
                    <div class="col-sm-10">
                    <input type="password" name="password" class="form-control" id="pass" placeholder="Password">
                    <div class="password_status "></div>
                    </div>
                    
                </div>                                                                               
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">Confirm Password</label>
                    <div class="col-sm-10">
                    <input type="password" name="c_pass" class="form-control" id="cpass" placeholder="Confirm Password">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                    <div class="checkbox">
                        <label>
                        <input type="checkbox"> Remember me
                        </label>
                    </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-default">Sign Up</button>
                    
                    </div>
                </div>
                </form>
                <a class="btn btn-link" href="<?=site_url('/')?>"> Go Home </a>
      </div>
  </div>
    </div>
  </div>


</div>
</div>


<script type="text/javascript">

$(function() {
  
$("#status").hide();

  $("#reg_frm").submit(function(evt){
     evt.preventDefault();
     
     var url = $(this).attr('action');
     var postData = $(this).serialize();

     $.post(url, postData, function(responce){
           if (responce.result==1) {
               window.location.href="<?=site_url('dashboard')?>";
           }else{
              $("#status").html(responce.error).css("color","red");
              $("#status").show();
              var output = '<ul>'
              for (var key in responce.error){
                  var value = responce.error[key];
                output+= '<li>'+ value+'</li>';
 /*               $('#'+key).addClass('has-error');
                $('.'+key+'_status').html(value).css("color","red");

                var clss = $('.form-group').attr("id");
                alert (clss) */
              }
              output +="</ul>";
               $("#status").html(output); 
                           
           }
     },'json')
  })
})
</script>
