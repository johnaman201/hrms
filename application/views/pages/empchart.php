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
                                   <a class="nav-link active" href="<?php echo site_url('employees'); ?>" style="font-size: 14px;"><i class="far fa-address-card" style="margin-right:5px;"></i>Employees</a>
                                    <a class="nav-link " href="<?php echo site_url('departments'); ?>" style="font-size: 14px;"><i class="fas fa-building" style="margin-right:5px;"></i>Departments/Stores</a>
                                    <a class="nav-link" href="<?php echo site_url('positions'); ?>" style="font-size: 14px;"><i class="fas fa-address-book" style="margin-right:5px;"></i>Positions</a>
                                    <a class="nav-link" href="<?php echo site_url('status'); ?>" style="font-size: 14px;"><i class="far fa-id-card" style="margin-right:5px;"></i>Status</a>
                                    
                                    <a class="nav-link" href="<?php echo site_url('systemusers'); ?>" style="font-size: 14px;"><i class="fas fa-user-secret" style="margin-right:5px;"></i> User Accounts</a>
                                </nav>
                            </div>

                            <!--<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsesLayouts" aria-expanded="false" aria-controls="collapsesLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-file-download"></i></div>
                                Lucena Forms
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>-->

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
                
                    <div class="container-fluid">
                        <h1 class="mt-4"></h1><!-- ADD HEADING-->
                        <ul class="breadcrumb">
                        <li><a href="<?php echo site_url('employees')?>">Employees</a></li>
                        <li><a href="#"><?= $adddata; ?></a></li>
                        </ul>
                        
                        <div class="card mb-4">
                             <div class="card-header">
                                <i class="fas fa-info-circle"></i>
                               
                                <h7 ><strong>PERSONAL DATA SHEET</strong> <a href="<?php echo base_url('testing')."/".$emp->id;?>" target="_blank" class="btn btn-info pull-right">PRINT</a></h7>
                            </div>


<!--- PERSONAL @@@@@@@@@@@@@@@@@@@@@---->

                             <div  class="card bg-light mb-5 mx-auto mt-5" style="width: 90%;">
                                <div class="table-responsive">
                                    <div class="card-header" style="font-weight: bold;">I. PERSONAL INFORMATION</div>
                                     <div class="card-body">

                                        <div class="input-group-prepend">

                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" style="font-weight: 500; padding: 0 70px 0 50px;">Full Name:</span>
                                                </div>
                                                    <input type="text" class="form-control" style="padding-left: 30px;" value="<?php echo  $emp->fname." ".$emp->mname." ".$emp->lname; ?>" disabled>
                                            </div>

                                        </div>

                                        <div class="input-group-prepend">

                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" style="font-weight: 500;padding: 0 87px 0 50px;">Gender:</span>
                                                </div>
                                                    <input type="text" class="form-control" style="padding-left: 30px;" value="<?php echo  $emp->gender; ?>" disabled>

                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" style="font-weight: 500;">Age:</span>
                                                </div>
                                                    <input type="text" class="form-control" value="<?php  echo $emp->age; ?>" disabled>

                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" style="font-weight: 500;">Date of Birth:</span>
                                                </div>
                                                 <input type="text" class="form-control" value="<?php  echo isset($emp->bday)? set_value('bday', date('M-d-Y',strtotime($emp->bday))) : set_value('bday');?>" disabled>

                                                 

                                            </div>

                                        </div>

                                         <div class="input-group-prepend">

                                            <div class="input-group">
                            
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" style="font-weight: 500; padding: 0 49px 0 50px;">Place of Birth:</span>
                                                </div>
                                                 <input type="text" class="form-control" style="padding-left: 30px;" value="<?php  echo $emp->bplace; ?>" disabled>

                                            </div>

                                        </div>

                                        <div class="input-group-prepend">

                                            <div class="input-group">
                            
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" style="font-weight: 500; padding: 0 10px 0 50px;">Residential Address:</span>
                                                </div>
                                                 <input type="text" class="form-control" style="padding-left: 30px;" value="<?php  echo $emp->readd; ?>" disabled>

                                            </div>

                                        </div>

                                        <div class="input-group-prepend">

                                            <div class="input-group">
                            
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" style="font-weight: 500; padding: 0 31px 0 50px;">Residential Type:</span>
                                                </div>
                                                 <input type="text" class="form-control" style="padding-left: 30px;" value="<?php  echo $emp->retype; ?>" disabled>

                                            </div>

                                            <div class="input-group">
                            
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" style="font-weight: 500; padding: 0 47px 0 50px;">Years of Stay:</span>
                                                </div>
                                                 <input type="text" class="form-control" style="padding-left: 30px;" value="<?php  echo $emp->restay; ?>" disabled>

                                            </div>

                                        </div>

                                        <div class="input-group-prepend">

                                            <div class="input-group">
                            
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" style="font-weight: 500; padding: 0 10px 0 50px;">Permanent Address:</span>
                                                </div>
                                                 <input type="text" class="form-control" style="padding-left: 30px;" value="<?php  echo $emp->peadd; ?>" disabled>

                                            </div>

                                        </div>

                                        <div class="input-group-prepend">

                                            <div class="input-group">
                            
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" style="font-weight: 500; padding: 0 31px 0 50px;">Permanent Type:</span>
                                                </div>
                                                 <input type="text" class="form-control" style="padding-left: 30px;" value="<?php  echo $emp->petype; ?>" disabled>

                                            </div>

                                            <div class="input-group">
                            
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" style="font-weight: 500; padding: 0 47px 0 50px;">Years of Stay:</span>
                                                </div>
                                                 <input type="text" class="form-control" style="padding-left: 30px;" value="<?php  echo $emp->pestay; ?>" disabled>

                                            </div>

                                        </div>

                                        <div class="input-group-prepend">

                                             <div class="input-group">
                            
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" style="font-weight: 500; padding: 0 83px 0 50px;">Zipcode:</span>
                                                </div>
                                                 <input type="text" class="form-control" style="padding-left: 30px;" value="<?php  echo $emp->zipcode; ?>" disabled>

                                            </div>

                                            <div class="input-group">
                            
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" style="font-weight: 500; padding: 0 59px 0 50px;">Civil Status:</span>
                                                </div>
                                                 <input type="text" class="form-control" style="padding-left: 30px;" value="<?php  echo $emp->civilstats; ?>" disabled>

                                            </div>

                                        </div>

                                        <div class="input-group-prepend">

                                             <div class="input-group">
                            
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" style="font-weight: 500; padding: 0 48px 0 50px;">Cellphone No:</span>
                                                </div>
                                                 <input type="text" class="form-control" style="padding-left: 30px;" value="<?php  echo $emp->cellno; ?>" disabled>

                                            </div>

                                            <div class="input-group">
                            
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" style="font-weight: 500; padding: 0 40px 0 50px;">Telephone No:</span>
                                                </div>
                                                 <input type="text" class="form-control" style="padding-left: 30px;" value="<?php  echo $emp->teleno; ?>" disabled>

                                            </div>

                                        </div>

                                        <div class="input-group-prepend">

                                             <div class="input-group">
                            
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" style="font-weight: 500; padding: 0 90px 0 50px;">SSS No:</span>
                                                </div>
                                                 <input type="text" class="form-control" style="padding-left: 30px;" value="<?php  echo $emp->sss; ?>" disabled>

                                            </div>

                                            <div class="input-group">
                            
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" style="font-weight: 500; padding: 0 85px 0 50px;">Tin No:</span>
                                                </div>
                                                 <input type="text" class="form-control" style="padding-left: 30px;" value="<?php  echo $emp->tin; ?>" disabled>

                                            </div>

                                        </div>

                                        <div class="input-group-prepend">

                                             <div class="input-group">
                            
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" style="font-weight: 500; padding: 0 71px 0 50px;">PhilHealth:</span>
                                                </div>
                                                 <input type="text" class="form-control" style="padding-left: 30px;" value="<?php  echo $emp->philhealth; ?>" disabled>

                                            </div>

                                            <div class="input-group">
                            
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" style="font-weight: 500; padding: 0 72px 0 50px;">Pag-IBIG:</span>
                                                </div>
                                                 <input type="text" class="form-control" style="padding-left: 30px;" value="<?php  echo $emp->pagibig; ?>" disabled>

                                            </div>

                                        </div>

                                        <div class="input-group-prepend">

                                            

                                            <div class="input-group">
                            
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" style="font-weight: 500; padding: 0 73px 0 50px;">Nickname:</span>
                                                </div>
                                                 <input type="text" class="form-control" style="padding-left: 30px;" value="<?php  echo $emp->nickname; ?>" disabled>

                                            </div>
                                             <div class="input-group">
                            
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" style="font-weight: 500; padding: 0 64px 0 50px;">Email Add:</span>
                                                </div>
                                                 <input type="text" class="form-control" style="padding-left: 30px;" value="<?php  echo $emp->email; ?>" disabled>

                                            </div>

                                        </div>

                                    </div>
                                 </div>
                            </div>

<!--- FAMILY @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@---->



                             <div  class="card bg-light mb-5 mx-auto mt" style="width: 90%;">
                                <div class="table-responsive">
                                    <div class="card-header" style="font-weight: bold;">II. FAMILY BACKGROUND</div>
                                     <div class="card-body">

                                        <div class="input-group-prepend">

                                             <div class="input-group">
                            
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" style="font-weight: 500; padding: 0 28px 0 50px;">Name of Spouse:</span>
                                                </div>
                                                 <input type="text" class="form-control" style="padding-left: 30px;" value="<?php  echo $emp->spouse; ?>" disabled>

                                            </div>

                                        </div>

                                        <div class="input-group-prepend">

                                             <div class="input-group">
                            
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" style="font-weight: 500; padding: 0 51px 0 50px;">Date of Birth:</span>
                                                </div>
                                                 <input type="text" class="form-control" style="padding-left: 30px;" value="<?php  echo $emp->spousebday; ?>" disabled>

                                            </div>

                                            <div class="input-group">
                            
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" style="font-weight: 500; padding: 0 15px 0 15px;">Place of Birth:</span>
                                                </div>
                                                 <input type="text" class="form-control" style="padding-left: 30px;" value="<?php  echo $emp->spouseplace; ?>" disabled>

                                            </div>
                                                
                                        </div>


                                        <div class="input-group-prepend">

                                             <div class="input-group">
                            
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" style="font-weight: 500; padding: 0 60px 0 50px;">Occupation:</span>
                                                </div>
                                                 <input type="text" class="form-control" style="padding-left: 30px;" value="<?php  echo $emp->spouseoccu; ?>" disabled>

                                            </div>

                                        </div>

                                    <div class="input-group-prepend"> 
                                        <span class="input-group-text" style="font-weight: 500; padding: 6px 813px 6px 50px;">Children</span> 
                                    </div>

                                        <div class="input-group-prepend">

                                             <div class="input-group">
                            
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" style="font-weight: 500; padding: 0 97px 0 50px;">Name:</span>
                                                </div>
                                                 <input type="text" class="form-control" style="padding-left: 30px;" value="<?php  echo $emp->child1; ?>" disabled>

                                            </div>

                                        </div>

                                        <div class="input-group-prepend">

                                             <div class="input-group">
                            
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" style="font-weight: 500; padding: 0 54px 0 50px;">Date of Birth:</span>
                                                </div>
                                                 <input type="text" class="form-control" style="padding-left: 30px;" value="<?php  echo $emp->bday1; ?>" disabled>

                                            </div>
                                            <div class="input-group">
                            
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" style="font-weight: 500; padding: 0 15px 0 15px;">Place of Birth:</span>
                                                </div>
                                                 <input type="text" class="form-control" style="padding-left: 30px;" value="<?php  echo $emp->place1; ?>" disabled>

                                            </div>

                                        </div>

                                        <div class="input-group-prepend">

                                             <div class="input-group">
                            
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" style="font-weight: 500; padding: 0 97px 0 50px;">Name:</span>
                                                </div>
                                                 <input type="text" class="form-control" style="padding-left: 30px;" value="<?php  echo $emp->child2; ?>" disabled>

                                            </div>

                                        </div>

                                        <div class="input-group-prepend">

                                             <div class="input-group">
                            
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" style="font-weight: 500; padding: 0 54px 0 50px;">Date of Birth:</span>
                                                </div>
                                                 <input type="text" class="form-control" style="padding-left: 30px;" value="<?php  echo $emp->bday2; ?>" disabled>

                                            </div>
                                            <div class="input-group">
                            
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" style="font-weight: 500; padding: 0 15px 0 15px;">Place of Birth:</span>
                                                </div>
                                                 <input type="text" class="form-control" style="padding-left: 30px;" value="<?php  echo $emp->place2; ?>" disabled>

                                            </div>

                                        </div>

                                          <div class="input-group-prepend">

                                              
                                                    <span class="input-group-text" style="font-weight: 500; padding: 6px 813px 6px 50px;">Parents</span>
                                            
                                           

                                        </div>

                                        <div class="input-group-prepend">

                                             <div class="input-group">
                            
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" style="font-weight: 500; padding: 0 44px 0 50px;">Father's Name:</span>
                                                </div>
                                                 <input type="text" class="form-control" style="padding-left: 30px;" value="<?php  echo $emp->father; ?>" disabled>

                                            </div>

                                        </div>

                                        <div class="input-group-prepend">

                                             <div class="input-group">
                            
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" style="font-weight: 500; padding: 0 50px 0 50px;">Place of Birth:</span>
                                                </div>
                                                 <input type="text" class="form-control" style="padding-left: 30px;" value="<?php  echo $emp->fplace; ?>" disabled>

                                            </div>

                                        </div>

                                        <div class="input-group-prepend">

                                             <div class="input-group">
                            
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" style="font-weight: 500; padding: 0 37px 0 50px;">Mother's Name:</span>
                                                </div>
                                                 <input type="text" class="form-control" style="padding-left: 30px;" value="<?php  echo $emp->mother; ?>" disabled>

                                            </div>

                                        </div>

                                        <div class="input-group-prepend">

                                             <div class="input-group">
                            
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" style="font-weight: 500; padding: 0 50px 0 50px;">Place of Birth:</span>
                                                </div>
                                                 <input type="text" class="form-control" style="padding-left: 30px;" value="<?php  echo $emp->mplace; ?>" disabled>

                                            </div>

                                        </div>

                                     </div>
                                 </div>
                             </div>

 <!--- WORK @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@---->

                             <div  class="card bg-light mb-5 mx-auto mt" style="width: 90%;">
                                <div class="table-responsive">
                                    <div class="card-header" style=" font-weight: bold;">III. WORK EXPERIENCE</div>
                                     <div class="card-body">

                                        <div class="input-group-prepend">

                                             <div class="input-group">
                            
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" style="font-weight: 500; padding: 0 15px 0 50px;">Previous Company:</span>
                                                </div>
                                                 <input type="text" class="form-control" style="padding-left: 30px;" value="<?php  echo $emp->precompany1; ?>" disabled>

                                            </div>

                                            <div class="input-group">
                            
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" style="font-weight: 500; padding: 0 20px 0 50px;">Previous Position:</span>
                                                </div>
                                                 <input type="text" class="form-control" style="padding-left: 30px;" value="<?php  echo $emp->preposition1; ?>" disabled>

                                            </div>

                                        </div>

                                        <div class="input-group-prepend">

                                             <div class="input-group">
                            
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" style="font-weight: 500; padding: 0 64px 0 50px;">Date Hired:</span>
                                                </div>
                                                 <input type="text" class="form-control" style="padding-left: 30px;" value="<?php  echo $emp->prefdate1; ?>" disabled>

                                            </div>

                                            <div class="input-group">
                            
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" style="font-weight: 500; padding: 0 13px 0 50px;">Last Date Of Work:</span>
                                                </div>
                                                 <input type="text" class="form-control" style="padding-left: 30px;" value="<?php  echo $emp->preldate1; ?>" disabled>

                                            </div>

                                        </div>

                                        <div class="input-group-prepend">

                                             <div class="input-group">
                            
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" style="font-weight: 500; padding: 0 15px 0 50px;">Previous Company:</span>
                                                </div>
                                                 <input type="text" class="form-control" style="padding-left: 30px;" value="<?php  echo $emp->precompany2; ?>" disabled>

                                            </div>

                                            <div class="input-group">
                            
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" style="font-weight: 500; padding: 0 20px 0 50px;">Previous Position:</span>
                                                </div>
                                                 <input type="text" class="form-control" style="padding-left: 30px;" value="<?php  echo $emp->preposition2; ?>" disabled>

                                            </div>

                                        </div>

                                        <div class="input-group-prepend">

                                             <div class="input-group">
                            
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" style="font-weight: 500; padding: 0 64px 0 50px;">Date Hired:</span>
                                                </div>
                                                 <input type="text" class="form-control" style="padding-left: 30px;" value="<?php  echo $emp->prefdate2; ?>" disabled>

                                            </div>

                                            <div class="input-group">
                            
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" style="font-weight: 500; padding: 0 13px 0 50px;">Last Date Of Work:</span>
                                                </div>
                                                 <input type="text" class="form-control" style="padding-left: 30px;" value="<?php  echo $emp->preldate2; ?>" disabled>

                                            </div>

                                        </div>


                                     </div>
                                 </div>
                             </div>

<!-----OTHER @@@@@@@@@@@@@@@@@@@@@@@@@@@ ------>

                             <div  class="card bg-light mb-5 mx-auto mt" style="width: 90%;">
                                <div class="table-responsive">
                                    <div class="card-header" style=" font-weight: bold;">IV. OTHER INFORMATION</div>
                                     <div class="card-body">

                                        <div class="input-group">
                                          <div class="input-group-prepend">
                                            
                                                <span class="input-group-text" style="font-weight: 500; padding: 0 50px 0 50px;">Do you have any case filed with DOLE:</span>
                                            </div>
                                            <input type="text" class="form-control" style="padding-left: 30px;" value="<?php  echo $emp->dole; ?>" disabled>
                                        </div>

                                        <div class="input-group">
                                          <div class="input-group-prepend">
                                            
                                                <span class="input-group-text" style="font-weight: 500; padding: 0 147px 0 50px;">If Yes, Company Name:</span>
                                            </div>
                                            <input type="text" class="form-control" style="padding-left: 30px;" value="<?php  echo $emp->issuecom; ?>" disabled>
                                        </div>

                                        <div class="input-group">
                                          <div class="input-group-prepend">
                                            
                                                <span class="input-group-text" style="font-weight: 500; padding: 0 29px 0 50px;">Membership in Association/Organization:</span>
                                            </div>
                                            <input type="text" class="form-control" style="padding-left: 30px;" value="<?php  echo $emp->assoc; ?>" disabled>
                                        </div>


                                        </div>
                                    </div>
                                </div>

<!-----EMPLOYEMENT  @@@@@@@@@@@@@@@@@@@@@@@@@------>
                                     <div  class="card bg-light mb-5 mx-auto mt" style="width: 90%;">
                                        <div class="table-responsive">
                                            <div class="card-header" style=" font-weight: bold;">EMPLOYEMENT INFORMATION</div>
                                             <div class="card-body">

                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" style="font-weight: 500; padding: 0 106px 0 50px;">Department/Store:</span>
                                                </div>
                                                
                                                    <select type="text" class="form-control" style="padding-left: 30px;"disabled>

                                                    <?php if(!empty($designations)){?>
                                                    <?php foreach($designations as $row){?>
                                                    <option value="<?php echo $row->id; ?>" <?php if(!empty($emp->designation)) {echo ($emp->designation == $row->id) ? "selected":"" ; }?>> <?php echo $row->deptname;?></option>
                                                    <?php }?>
                                                    <?php }?>

                                                    </select>

                                            </div>


                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" style="font-weight: 500; padding: 0 105px 0 50px;">Employee Position:</span>
                                                </div>
                                                            
                                                    <select type="text" class="form-control" style="padding-left: 30px;"disabled>


                                                    <?php if(!empty($positions)){?>
                                                    <?php foreach($positions as $row){?>
                                                    <option value="<?php echo $row->id; ?>" <?php if(!empty($emp->position)) {echo ($emp->position == $row->id) ? "selected":"" ; }?>> <?php echo $row->positionname;?></option>
                                                    <?php }?>
                                                    <?php }?>

                                                    </select>

                                            </div>


                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" style="font-weight: 500; padding: 0 118px 0 50px;">Employee Status:</span>
                                                </div>
                                                            
                                                    <select type="text" class="form-control" style="padding-left: 30px;"disabled>

                                                    <?php if(!empty($status)){?>
                                                    <?php foreach($status as $row){?>
                                                    <option value="<?php echo $row->id; ?>" <?php if(!empty($emp->status)) {echo ($emp->status == $row->id) ? "selected":"" ; }?>> <?php echo $row->statusname;?></option>
                                                    <?php }?>
                                                    <?php }?>
                                                    
                                                    </select>

                                            </div>

                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" style="font-weight: 500; padding: 0 85px 0 50px;">Employee ID Number:</span>
                                                </div>
                                                    <input type="text" class="form-control" style="padding-left: 30px;" value="<?php  echo $emp->empid; ?>" disabled>
                                                </div>

                                                <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" style="font-weight: 500; padding: 0 153px 0 50px;">Date Hired:</span>
                                                </div>
                                                    <input type="text" class="form-control" style="padding-left: 30px;" value="<?php  echo $emp->empdate; ?>" disabled>
                                                </div>

                                                <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" style="font-weight: 500; padding: 0 163px 0 50px;">Last Date:</span>
                                                </div>
                                                    <input type="text" class="form-control" style="padding-left: 30px;" value="<?php  echo $emp->lempdate; ?>" disabled>
                                                </div>

                                                <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" style="font-weight: 500; padding: 0 147px 0 50px;">Basic Salary:</span>
                                                </div>
                                                    <input type="text" class="form-control" style="padding-left: 30px;" value="<?php  echo $emp->empsalary; ?>" disabled>
                                                </div>
                                                <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" style="font-weight: 500; padding: 0 157px 0 50px;">Allowance:</span>
                                                </div>
                                                    <input type="text" class="form-control" style="padding-left: 30px;" value="<?php  echo $emp->empallowance; ?>" disabled>
                                                </div>
                                                <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" style="font-weight: 500; padding: 0 149px 0 50px;">Total Salary:</span>
                                                </div>
                                                    <input type="text" class="form-control" style="padding-left: 30px;" value="<?php  echo $emp->emptotal; ?>" disabled>
                                                </div>

                                             </div>
                                         </div>
                                     </div>



                 
                        
                        </div>
                    </div>
               
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
            //var pic = '<?php //(!empty($emp->emppic)) ? $emp->emppic:''; ?>';
            //alert(pic);
            reader.onload = function (e) {
                
                $('#wizardPicturePreview').attr('src', e.target.result).fadeIn('slow');
            }
            reader.readAsDataURL(input.files[0]);
        }   
        }
    });
    
</script>
        


