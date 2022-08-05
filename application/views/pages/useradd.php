<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="<?php echo site_url('dashboard');?>"><?= $greet; ?><?php echo ' '.$this->session->firstname?></a>
            <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
                
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ml-auto ml-md-0">
            <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo (!empty($this->session->emppic)) ? "<img src='".$this->session->emppic."' width='50' height='50'>":"<i class='fas fa-user fa-fw'></i>" ;?></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="<?php echo site_url('employees');?>">Employees</a>
                        <a class="dropdown-item" href="<?php echo site_url('departments');?>">Departments/Stores</a>
                        <a class="dropdown-item" href="<?php echo site_url('positions');?>">Positions</a>
                        <a class="dropdown-item" href="<?php echo site_url('status');?>">Employement Status</a>
                        <a class="dropdown-item" href="<?php echo site_url('systemusers');?>">System User Accounts</a>
                        <a class="dropdown-item" href="#" id="help">Help</a>
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
                           
                            <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                HR Management
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse show in" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link " href="<?php echo site_url('employees'); ?>" style="font-size: 14px;"><i class="far fa-address-card" style="margin-right:5px;"></i>Employees</a>

                                    <a class="nav-link " href="<?php echo site_url('departments'); ?>" style="font-size: 14px;"><i class="fas fa-building" style="margin-right:5px;"></i>Departments/Stores</a>

                                    <a class="nav-link " href="<?php echo site_url('positions'); ?>" style="font-size: 14px;"><i class="fas fa-address-book" style="margin-right:5px;"></i>Positions</a>
                                    
                                    <a class="nav-link " href="<?php echo site_url('status'); ?>" style="font-size: 14px;"><i class="far fa-id-card" style="margin-right:5px;"></i>Status</a>

                                    <a class="nav-link active" href="<?php echo site_url('systemusers'); ?>" style="font-size: 14px;"><i class="fas fa-user-secret" style="margin-right:5px;"></i> User Accounts</a>
                                </nav>
                            </div>

                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsesLayouts" aria-expanded="false" aria-controls="collapsesLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-file-download"></i></div>
                                 Lucena Forms
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>

                            <div class="collapse" id="collapsesLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">

                                    <a class="nav-link" href="<?php echo site_url('stAccounting'); ?>" style="font-size: 14px;"><i class="fas fa-clipboard-check" style="margin-right:5px;"></i>Accounting</a>

                                    
                                </nav>
                            </div>
                            
                            
                    
                        </div>
                    </div>
                    
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4"><?= $adddata; ?></h1>
                        <ul class="breadcrumb">
                        <li><a href="<?php echo site_url('systemusers')?>">System Users</a></li>
                        <li><a href="#"><?= $adddata; ?></a></li>
                        </ul>
                        
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                                Fill up the Fields
                                
                            </div>
                            <div class="card-body">
                            <?= form_open_multipart(empty($user->id) ? "useradd":"useradd/".$user->id) ?>
                            
                                
						  
							<div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                    <label for="empid"><strong>Employee:<span style="color: red;">*</span></strong></label>
                                    <select name="empid" id="empid" class="form-control" required>
                                        <option value="">---Select Employee---</option>
                                        <?php foreach($employees as $row){?>
                                            <option value="<?php echo (!empty($row['id'])) ? $row['id']:""; ?>" <?php echo ($userid == $row['id']) ? "selected":"ssss"; ?>><?php echo (!empty($row['id'])) ? $row['fname']." ".$row['mname']." ".$row['lname']:""; ?></option>
                                        <?php } ?>
                                    </select>
                                    
                                    </div>

                                    <div class="form-group">
                                    <label for="username"><strong>Username:<span style="color: red;">*</span></strong></label>
                                    <input type="text" class="form-control" name="username" id="username" autocomplete="off" value="<?= (!empty($user->username)) ? $user->username:''; ?>" required>
                                    </div>

                                    <div class="form-group">
                                    <label for="password"><strong>Password:<span style="color: red;">*</span></strong></label>
                                    <input type="password" class="form-control" name="password" id="password" autocomplete="off" value="<?= (!empty($user->pword)) ? $user->pword:''; ?>" required>
                                    </div>
                                    <div class="form-group">
                                    <label for="confirm_password"><strong>Confirm Password:<span style="color: red;">*</span></strong></label>
                                    <input type="password" class="form-control" name="confirm_password" id="confirm_password" autocomplete="off" value="<?= (!empty($user->pword)) ? $user->pword:''; ?>" required>
                                    </div>
                                    
                                </div>
                                <div class="col-md-6">
                                                                        
                                    <div class="form-group">
                                    <label for="userstatus"><strong>User Status:<span style="color: red;">*</span></strong></label>
                                        <select name="userstatus" id="userstatus" class="form-control" required>
                                        <option value="">Select Status</option>
                                        <?php if(!empty($user->status)){?>
                                        <option value="1" <?php echo ($user->status == 1) ? "selected":""; ?>>Activated</option>
                                        <option value="2" <?php echo ($user->status == 2) ? "selected":""; ?>>Deactivated </option>
                                        <?php }else{ ?>
                                            <option value="1" >Activated</option>
                                            <option value="2" >Deactivated </option>

                                        <?php }?>
                                        </select>
                                    </div>                                                                  
                                                                    
                                                                       
                                </div>
                            </div>
            			    
            					
                        
            			
				   	         <input type="submit" class="btn btn-primary pull-right" value="Save Data"/>
            			
            		
                            </div>
                        </div>
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; HRMS 2020</div>
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
 <script type="text/javascript">
 $("#empid").on("change",function(){
     var empid = $(this).val();
     window.location.href = "<?php echo site_url("useradd/")?>"+empid;
 });
	jQuery(document).ready(function($) {
        
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
		$("#wizard-picture").change(function(){
			
        	readURL(this);
    	});
		
		function readURL(input) {
		if (input.files && input.files[0]) {
			var reader = new FileReader();
			//var pic = '<?php //(!empty($dept->emppic)) ? $dept->emppic:''; ?>';
			//alert(pic);
			reader.onload = function (e) {
				
				$('#wizardPicturePreview').attr('src', e.target.result).fadeIn('slow');
			}
			reader.readAsDataURL(input.files[0]);
		}	
		}
	});
	
</script>
        


