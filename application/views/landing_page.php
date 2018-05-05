
&nbsp;
<section class="content">
<div class="login-box">
  <div class="login-logo">
    System Test
  </div>
  <?php if(isset($_SESSION['status'])) {?>
  <p><h3 class="text-center"><?php echo $_SESSION['status'];?></h3></p>
  <?php }?>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Sign in to start your session</p>

    <form action="<?php echo base_url();?>welcome/login" method="post">
      <div class="form-group has-feedback">
        <input name="userid" id="userid" type="text" class="form-control" placeholder="User ID">
        <span class="fa fa-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input name="password" id="password" type="password" class="form-control" placeholder="Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->
</section>