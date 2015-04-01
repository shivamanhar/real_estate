<html>    
    <head>
        <title> <?php if(isset($title)){echo $title;} ?></title>
        <!-- bootstrip -->
        <script src="<?php echo base_url();?>js/bootstrap.min.js"></script>
        <script src="<?php echo base_url();?>js/bootstrap.js"></script>
        <script src="<?php echo base_url();?>js/bootstrap.js"></script>
        <script src="<?php echo base_url();?>js/jquery-1.9.1.min.js"></script>
        <script src="<?php echo base_url();?>js/jquery.min.js"></script>
        <link rel="stylesheet" href="<?php echo base_url();?>css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">
    </head>
    <body>
        <nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Real Estate</a>
    </div>
    <div>
      <<ul class="nav navbar-nav">
        <li><a href="<?php echo base_url();?>welcome/entry_form" style="color:#fff">New Customer</a></li>
        <!--<li><a href="<?php echo base_url();?>welcome/payment" style="color:#fff">Payment</a></li>-->
        <li><a href="<?php echo base_url();?>welcome/report" style="color:#fff">Report</a></li>
        <li><a href="<?php echo base_url();?>welcome/" style="color:#fff">Project</a></li>
        <!--  <li><a href="#">Page 3</a></li>-->
      </ul>
    </div>
  </div>
</nav>
        <br/>
        <br/>
        <br/>
        <br/>