<div class="row home-bg" >

<div class="container">


<div class="row">
  <div class="col-md-offset-3 col-sm-6 col-md-6">
   <div class="panel panel-default">
    <div class="panel-heading">
      <h3 class="panel-title"><span class="glyphicon glyphicon-user"></span> Login to Real-Estate System</h3>
    </div>
      <div class="panel-body">
        <form id="login_frm" action="<?=site_url('user/login');?>">
          <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" name="email" class="form-control" id="lgn_email" placeholder="Email">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" name="password" class="form-control" id="lgn_password" placeholder="Password">
          </div>
             <div id="status"></div>
          <div class="checkbox">
            <label>
              <input type="checkbox"> Remember my details
            </label>
          </div>
          
              <button type="submit" id="login_btn" class="btn btn-success">Sign In</button>
              <a href="<?=base_url()?>home/register" class="btn btn-danger">Sign Up</a>       
        </form>
      </div>
  </div>
    </div>
  </div>


</div>
</div>

<script type="text/javascript">

$(function() {
  

  $("#login_frm").submit(function(evt){
     evt.preventDefault();
     
     var url = $(this).attr('action');
     var postData = $(this).serialize();

     $.post(url, postData, function(responce){
           if (responce.result==1) {
               window.location.href="<?=site_url('dashboard')?>";
           }else{
              $("#status").html("Invalid Login Details. Check Whether the <strong>EMAIL</strong> details you provided matches with the <strong>PASSWORD</strong> details you've specified. Thankyou for your patience").css("color","red");
           }
     },'json')
  })
})
</script>