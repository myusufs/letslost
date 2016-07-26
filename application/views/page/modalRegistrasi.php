
<div class="modal fade" tabindex="-1" role="dialog" id="modalRegistrasi">
  <div class="modal-dialog" role="document">
    <form action="<?php echo base_url()?>login/signup" method="POST" class="form-horizontal">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Sign Up</h4>
      </div>
      <div class="modal-body">
          <div class="form-group">
            <label class="col-sm-2 control-label" >Name</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" placeholder="Name" name="fullname">              
            </div>
          </div>

          <div class="form-group">
            <label class="col-sm-2 control-label" >Username</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" placeholder="Username" name="uname">            
            </div>
          </div>

          <div class="form-group">
            <label class="col-sm-2 control-label" >HP</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" placeholder="HP" name="phone">            
            </div>
          </div>

          <div class="form-group">
            <label class="col-sm-2 control-label" >Email</label>
            <div class="col-sm-10">
              <input type="email" class="form-control" placeholder="E-Mail" name="email">             
            </div>
          </div>

          <div class="form-group">
            <label class="col-sm-2 control-label" >Password</label>
            <div class="col-sm-10">
              <input type="password" class="form-control" placeholder="Password" name="pass">              
            </div>
          </div>

          <div class="form-group">
             <label class="col-sm-2 control-label" >Confirm Password</label>
             <div class="col-sm-10">
              <input type="password" class="form-control" placeholder="Confirm Password" name="confirm_pass">              
            </div>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Sign Up</button>
      </div>
    </form>
    </div>
  </div>
</div>