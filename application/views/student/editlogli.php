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
<form name="inslog" id="editlog" method="post" enctype="multipart/form-data" action="<?php echo base_url();?>Student/editlog">
	<?php foreach($list as $listlog):?>
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
			          <input type="text" class="form-control pull-right" name="tarikhsatu" id="tarikhsatu" readonly="" value="<?php echo $listlog->datelog;?>">
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
						  <option value="1" <?php echo $this->Utils->selecteddd('1',$listlog->duration);?>>1</option>
						  <option value="2" <?php echo $this->Utils->selecteddd('2',$listlog->duration);?>>2</option>
						  <option value="3" <?php echo $this->Utils->selecteddd('3',$listlog->duration);?>>3</option>
						  <option value="4" <?php echo $this->Utils->selecteddd('4',$listlog->duration);?>>4</option>
						  <option value="5" <?php echo $this->Utils->selecteddd('5',$listlog->duration);?>>5</option>
						  <option value="6" <?php echo $this->Utils->selecteddd('6',$listlog->duration);?>>6</option>
						  <option value="7" <?php echo $this->Utils->selecteddd('7',$listlog->duration);?>>7</option>
						  <option value="8" <?php echo $this->Utils->selecteddd('8',$listlog->duration);?>>8</option>
						</select>
			      </div>
			      <!-- /.form group --> 
		  </div>
		</div>	      
			      <!-- Log -->
			      <div class="form-group">
			        <label>Log :</label>
			        <div class="input-group date">
				        <textarea name="log" id="log" cols="80" rows="10"><?php echo $listlog->logs;?></textarea>
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
    <input name="id" id="id" type="hidden" value="<?php echo $listlog->id;?>" />
    <?php endforeach;?>
</form>    
<?php //var_dump($list);?>