<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Log LI
        <small>Kemasukkan Log Latihan Industri</small>
      </h1>
    </section>
<?php if(isset($_SESSION['error'])) {?>
  <p><h3 class="text-center"><?php echo $_SESSION['error'];?></h3></p>
<?php }?>
<form name="inslog" id="inslog" method="post" enctype="multipart/form-data" action="<?php echo base_url();?>Student/log">
    <!-- Main content -->
    <section class="content">
    	<br />
		<div class="row">
		  <div class="col-md-3">
			      <!-- Date -->
			      <div class="form-group">
			        <label>Tarikh Log:</label>
			
			        <div class="input-group date">
			          <div class="input-group-addon">
			            <i class="fa fa-calendar"></i>
			          </div>
			          <input type="text" class="form-control pull-right" name="tarikhsatu" id="tarikhsatu" readonly="">
			        </div>
			        <!-- /.input group -->
			      </div>
			      <!-- /.form group -->
		  </div>
		  <div class="col-md-3">
			      <!-- jangkamasa -->
			      <div class="form-group">
			        <label>Masa yang diambil (jam) :</label>
				        <select name="jam" id="jam" class="form-control">
						  <option value="1">1</option>
						  <option value="2">2</option>
						  <option value="3">3</option>
						  <option value="4">4</option>
						  <option value="5">5</option>
						  <option value="6">6</option>
						  <option value="7">7</option>
						  <option value="8">8</option>
						</select>
			      </div>
			      <!-- /.form group --> 
		  </div>
		</div>	      
			      <!-- Log -->
			      <div class="form-group">
			        <label>Log :</label>
			        <div class="input-group date">
				        <textarea name="log" id="log" cols="80" rows="10"></textarea>
			        </div>
			        <!-- /.input group -->
			      </div>
			      <!-- /.form group -->              
		
			      <!-- Log -->
			      <div class="form-group">
			        <div class="input-group date">
				        <button type="submit" class="btn btn-primary btn-block btn-flat">Save</button>
			        </div>
			        <!-- /.input group -->
			      </div>
			      <!-- /.form group --> 

    </section>
    <!-- /.content -->
</form>    