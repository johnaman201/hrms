<!-- The navbar -->
<nav class="navbar navbar-fixed-top navbar-inverse" style="margin-bottom: 0; border-radius: 0;">
  <div class="container-fluid">
    <div class="navbar-header">
      <h6 class="navbar-brand"><?= $greet; ?><?php echo ' '.$this->session->firstname?></h6>
    </div>
    <ul class="nav navbar-nav pull-right">
      <li><a href="<?php echo site_url('logout'); ?>" id="logoutlink"><?= $logout; ?></a></li>
    </ul>
  </div>
</nav>

<!-- The sidebar -->
<div class="container-fuild">
<div class="sidebar">
  <a class="active" href="<?php echo site_url('dashboard'); ?>" id="emp">Employees</a>
  <a href="<?php echo site_url('department'); ?>" id="depart">Departments/Stores</a>
  <a href="<?php echo site_url('benefits'); ?>" id="bene">Benefits</a>
  <a href="<?php echo site_url('dataentry'); ?>" id="dataent">Data Entries</a>
  <a href="<?php echo site_url('payslip'); ?>" id="paysl">Payslip</a>
  <a href="<?php echo site_url('attendance'); ?>" id="att">Attendance</a>
</div>

</div>



<div class="content" id="employees" style="margin-top: 75px;">
<div class="container">
	<div class="col-sm-10">
	<h2><?= $list; ?></h2>
  <button type="button" class="btn btn-success" data-toggle="modal" data-target="#emodal"><?= $addemp; ?></button><br/><br/>
  <input type="text" class="form-control" id="empsearch" onkeyup="dataempsearchf()" placeholder="Search Here">        
  <table class="table table-hover" id="emptbl">
    <thead>
      <tr class="dataempheader">
        <th>First Name</th>
        <th>Last Name</th>
        <th>Designation</th>
        <th>Edit/View</th>
      </tr>
    </thead>
    <tbody>
        
    <?php foreach($tableemp as $row) {?>
      <tr>
        <td><?= $row['fname']; ?></td>
        <td><?= $row['lname']; ?></td>
        <td><?= $row['designation']; ?></td>
        <td><button style='font-size:16px' data-toggle="modal" data-target="#emmodal" onclick="getempdata(<?= $row['id'];?>)" id="<?= $row['id'];?>"><i class='fas fa-edit' style="color:royalblue;"></i></button></td>
      </tr>
    <?php } ?>
      <tr>
        <td>Mary</td>
        <td>Moe</td>
        <td>mary@example.com</td>
        <td><i class='fas fa-edit' style='font-size:16px;color:royalblue;'></i></td>
      </tr>
      <tr>
        <td>July</td>
        <td>Dooley</td>
        <td>july@example.com</td>
        <td><i class='fas fa-edit' style='font-size:16px;color:royalblue;'></i></td>
      </tr>
    </tbody>
  </table>
	</div>
  
</div>
</div>

<!-- The Modal -->
<div id="emodal" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">New Employee Form</h4>
        
            
      </div>
      <?= form_open('empadd');?>
      <div class="modal-body">
      	<div class="input-group">
		    <span class="input-group-addon">First Name:</span>
		    <input id="fname" type="text" class="form-control" value="<?= set_value('fname');?>" name="fname" placeholder="">
  		</div><br/>
  		<div class="input-group">
		    <span class="input-group-addon">Middle Name:</span>
		    <input id="mname" type="text" class="form-control" value="<?= set_value('mname');?>" name="mname" placeholder="">
  		</div><br/>
  		<div class="input-group">
		    <span class="input-group-addon">Last Name:</span>
		    <input id="lname" type="text" class="form-control" value="<?= set_value('lname');?>" name="lname" placeholder="">
  		</div><br/>
  		<div class="input-group">
		    <span class="input-group-addon">Birthday:</span>
		    <input id="bday" type="date" class="form-control" value="<?= set_value('bday');?>" name="bday" placeholder="">
  		</div>



      
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Save</button>
        <button type="button" class="btn btn-warning" data-dismiss="modal">Clear</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<div id="emmodal" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" id="efullname"></h4>
        <?= validation_errors();?>
      </div>
      <div class="modal-body">
      	<div class="input-group">
		    <span class="input-group-addon">First Name:</span>
		    <input id="efname" type="text" class="form-control" name="efname" placeholder="">
  		</div><br/>
  		<div class="input-group">
		    <span class="input-group-addon">Middle Name:</span>
		    <input id="emname" type="text" class="form-control" name="emname" placeholder="">
  		</div><br/>
  		<div class="input-group">
		    <span class="input-group-addon">Last Name:</span>
		    <input id="elname" type="text" class="form-control" name="elname" placeholder="">
  		</div><br/>
  		<div class="input-group">
		    <span class="input-group-addon">Birthday:</span>
		    <input id="ebday" type="date" class="form-control" name="ebday" placeholder="">
  		</div>



      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Save</button>
        <a href="#" class="btn btn-danger" data-dismiss="modal">Delete</a>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>