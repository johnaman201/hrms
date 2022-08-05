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
                                    
                                    <a class="nav-link active" href="<?php echo site_url('status'); ?>" style="font-size: 14px;"><i class="far fa-id-card" style="margin-right:5px;"></i>Status</a>
                                    
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
                <main>
                    <div class="container-fluid">
                        <h3 class="mt-4">Employment Status</h3>
                        
                        
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                                <?= $list; ?>
                                <a href="<?php echo site_url('statadd');?>" class="btn btn-success pull-right"><?= $adddata; ?></a>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th style="font-size: 14px;">Name</th>
                                                <th style="font-size: 14px;">Status</th>
                                                <th style="font-size: 14px;">Action</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th style="font-size: 14px;">Name</th>
                                                <th style="font-size: 14px;">Status</th>
                                                <th style="font-size: 14px;">Action</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            
                                            <?php foreach($status as $row) {?>
                                            <tr>
                                                <td style="font-size: 12px; font-weight: bold;"><a href="<?php echo base_url('statchart')."/".$row->id;?>" id="<?= $row->id;?>"><?php echo $row->statusname;?></a></td>

                                                <td style="font-size: 12px;"><?php echo ($row->statusstatus == 1) ? 'Activated':'Deactivated'; ?></td>
                                                
                                                <td style="font-size: 14px;"><a href="<?php echo base_url('statadd')."/".$row->id;?>" id="<?= $row->id;?>"><i class='fas fa-edit' style="color:royalblue;"></i>Edit</a></td>
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

        