<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Log LI
        <small>Senarai Log Latihan Industri</small>
      </h1>
    </section>
<?php if(isset($_SESSION['error'])) {?>
  <p><h3 class="text-center"><?php echo $_SESSION['error'];?></h3></p>
<?php }?>
    <!-- Main content -->
    <section class="content">
    	<br />
		<div class="row">

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Senarai Log</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="listlog" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th width="20px">Bil</th>
                  <th>Tarikh Log</th>
                  <th>Log</th>
                  <th>Masa Diambil (jam)</th>
                  <th></th>
                </tr>
                </thead>
                <tbody>
<?php 
$bil = 0;
foreach($list as $listlog):?>
                <tr>
                  <td><?php echo ++$bil;?></td>
                  <td><?php echo $listlog->datelog;?></td>
                  <td><?php echo $listlog->logs;?></td>
                  <td><?php echo $listlog->duration;?></td>
                  <td>
                  	<a href="<?php echo base_url();?>Student/editlog/<?php echo $listlog->id;?>"><i class="fa fa-pencil"></i></a>&nbsp;&nbsp;
                  	<a href="<?php echo base_url();?>Student/dellog/<?php echo $listlog->id;?>" onclick="return confirm('Teruskan hapuskan log?');"><i class="fa fa-close"></i></a>
                  </td>
                </tr>
<?php endforeach;?>                
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box --> 

    </section>
    <!-- /.content -->
<?php //var_dump($list);?>