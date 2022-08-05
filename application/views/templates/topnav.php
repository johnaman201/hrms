<nav class="navbar navbar-fixed-top navbar-inverse" style="margin-bottom: 0; border-radius: 0;">
  <div class="container-fluid">
    <div class="navbar-header">
      <h6 class="navbar-brand">Welcome <?php echo ' '.$this->session->firstname?></h6>
    </div>
    <ul class="nav navbar-nav pull-right">
      <li class="active"><a href="<?php echo site_url('logout'); ?>">Logout</a></li>
    </ul>
  </div>
</nav>