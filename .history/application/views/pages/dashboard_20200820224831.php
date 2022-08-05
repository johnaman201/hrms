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
