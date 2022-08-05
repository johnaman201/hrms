<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="<?php echo site_url('dashboard');?>"><?= $greet; ?><?php echo ' '.$this->session->firstname?></a>
            <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" />
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="button"><i class="fas fa-search"></i></button>
                    </div>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ml-auto ml-md-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="#">Settings</a>
                        <a class="dropdown-item" href="#">Activity Log</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="<?php echo site_url('logout'); ?>"><?= $logout; ?></a>
                    </div>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                           
                            <a class="nav-link" href="<?php echo site_url('dashboard'); ?>">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                           
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                HR/Payroll
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="<?php echo site_url('employees'); ?>">Employees</a>
                                    <a class="nav-link" href="<?php echo site_url('department'); ?>">Departments/Stores</a>
                                    <a class="nav-link" href="<?php echo site_url('benefits'); ?>">Benefits</a>
                                    <a class="nav-link" href="<?php echo site_url('dataentry'); ?>">Data Entries</a>
                                    <a class="nav-link" href="<?php echo site_url('payslip'); ?>">Payslip</a>
                                    <a class="nav-link" href="<?php echo site_url('attendance'); ?>">Attendance</a>
                                </nav>
                            </div>
                            
                            
                    
                        </div>
                    </div>
                    
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Employees</h1>
                        
                        
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                                Employee List
                                <a href="#" class="btn btn-success pull-right">Add Employee</a>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Position</th>
                                                <th>Deparment/Store</th>
                                                <th>Age</th>
                                                <th>Start date</th>
                                                <th>Salary</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>Name</th>
                                                <th>Position</th>
                                                <th>Deparment/Store</th>
                                                <th>Age</th>
                                                <th>Start date</th>
                                                <th>Salary</th>
                                                <th>Action</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            <?php foreach($tableemp as $row) {?>
                                            <tr>
                                                <td>Tiger Nixon</td>
                                                <td>System Architect</td>
                                                <td>Edinburgh</td>
                                                <td>61</td>
                                                <td>2011/04/25</td>
                                                <td>$320,800</td>
                                                <td><a href="#" style='font-size:16px' data-toggle="modal" id="<?= $row['id'];?>"><i class='fas fa-edit' style="color:royalblue;"></i></button></td>
                                            </tr>
                                            <?php }?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2020</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
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