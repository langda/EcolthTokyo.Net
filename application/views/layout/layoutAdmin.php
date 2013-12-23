<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Welcome to CodeIgniter integrated with Kendo UI Web & Bootstrap!</title>
    
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/bootstrap.css?v=1" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/bootstrap-theme.css?v=1" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/kendo.common-bootstrap.css?v=1" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/kendo.bootstrap.css?v=1" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/site.css?v=1" />
       
    <script src="<?php echo base_url(); ?>js/jquery.js?v=1"></script>
</head>
<body>

<div id="container">
    <?php $this->load->view($contentName, $contentData); ?>
</div>

<script src="<?php echo base_url(); ?>js/kendo.web.js?v=1"></script>
</body>
</html>