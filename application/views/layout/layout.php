<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"><![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"><![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"><![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"><!--<![endif]-->

<head>
    <title><?php echo $title; ?></title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no"/>
    
    <!-- Favicon and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url(); ?>img/ico/apple-touch-icon-144-precomposed.png"/>
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url(); ?>img/ico/apple-touch-icon-114-precomposed.png"/>
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url(); ?>img/ico/apple-touch-icon-72-precomposed.png"/>
    <link rel="apple-touch-icon-precomposed" href="<?php echo base_url(); ?>img/ico/apple-touch-icon-57-precomposed.png"/>
    <link rel="shortcut icon" href="<?php echo base_url(); ?>img/ico/favicon.ico"/>
    
    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/bootstrap.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/jasny-bootstrap.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/prettyPhoto.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/sequencejs.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/font-awesome.min.css"/>
    <!--[if IE 7]>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/font-awesome-ie7.min.css"/>
    <![endif]-->

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script type="text/javascript" src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    
    <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.min.js"></script>
</head>
<body>
<!-- start: TOP BAR -->
<div class="topbar clearfix">
    <div class="container">
        <ul class="nav nav-pills top-contacts pull-left">
            <li><a href="#"><i class="icon-phone"></i> +(855) 98-25-2005</a></li>
            <li><a href="#"><i class="icon-twitter"></i> Twitter</a></li>
            <li><a href="#"><i class="icon-facebook"></i> Facebook</a></li>
        </ul>
        <ul class="nav nav-pills top-menu pull-right">
            <li><a href="<?php echo base_url(); ?>home/contact">Contact</a></li>
            <li><a href="#">Sitemap</a></li>
        </ul>
    </div>
</div>
<!-- end: TOP BAR -->

<!-- start: Header -->
<div id="header">
    <div class="container">
        <div class="row-fluid">
            <div class="span3 logo">
                <a href="<?php echo base_url(); ?>home/index" title="CartShirt"><img src="<?php echo base_url(); ?>img/logo.png" alt=""/></a>
            </div>
            <div class="span6 pull-right" style="text-align:right">
                <a href="#"><img src="<?php echo base_url(); ?>img/banner/top.jpg" style="height:70px;" /></a>
            </div>
        </div>
    </div>
</div>
<!-- end: Header -->

<!-- start: Main Menu -->
<div id="navigation" class="default">
    <div class="container">
        <div class="navbar navbar-static-top">
            <div class="navbar-inner">
                <ul class="nav pull-left">
                    <li<?php echo checkActive('home/index'); ?>>
                        <a href="<?php echo base_url(); ?>home/index"><?= lang('home');?></a>
                    </li>
                    <li<?php echo checkActive('home/about_us'); ?>>
                        <a href="<?php echo base_url(); ?>home/about_us"><?= lang('about');?></a>
                    </li>
                    <li<?php echo checkActiveDropDown('home/products'); ?>>
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <?= lang('products');?> <b class="caret"></b> 
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo base_url(); ?>home/products"><?= lang('clothes');?></a></li>
                            <li><a href="<?php echo base_url(); ?>home/products"><?= lang('bags_and_cartoons');?></a></li>
                            <li><a href="<?php echo base_url(); ?>home/products"><?= lang('shoes');?></a></li>
                            <li><a href="<?php echo base_url(); ?>home/products"><?= lang('kitchen_material');?></a></li>
                            <li><a href="<?php echo base_url(); ?>home/products"><?= lang('furniture');?></a></li>
                            <li><a href="<?php echo base_url(); ?>home/products"><?= lang('electronic_devices');?></a></li>
                        </ul>
                    </li>
                   
                    <li<?php echo checkActive('home/ngo_activities'); ?>>
                        <a href="<?php echo base_url(); ?>home/ngo_activities"><?= lang('ngo_activities');?></a>
                    </li>
                    <li<?php echo checkActive('home/donation'); ?>>
                        <a href="<?php echo base_url(); ?>home/donation"><?= lang('donation');?></a>
                    </li>
                    <li<?php echo checkActive('home/contact'); ?>>
                        <a href="<?php echo base_url(); ?>home/contact"><?= lang('contact');?></a>
                    </li>
                </ul>
                <div class="shopping-cart pull-right">
         
                  <!--   <a href="#" class="cart">
                        <span class="quantity" style="background-color:#ff6633;">JP</span>
                    </a>
                    <a href="#" class="cart">
                        <span class="quantity" style="background-color:#ff6633;">KH</span>
                    </a> -->
                    <?= "<a href='".$this->lang->switch_uri('jp')."' class='cart'><span class='quantity'>JP</span></a>" ?> 
                    <?= "<a href='".$this->lang->switch_uri('kh')."' class='cart'><span class='quantity'>KH</span></a>" ?> 
                    <?= "<a href='".$this->lang->switch_uri('en')."' class='cart'><span class='quantity'>EN</span></a>" ?> 
                        
                                        
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end: Main Menu -->

<!-- start: Container -->
<div id="container">
    <?php $this->load->view($contentName, $contentData); ?>
</div>
<!-- end: Container -->

<div id="bonus-line">
    <div class="container">
        <div class="row-fluid">
            <div class="span12 bonus1" style="text-align:center;">
                <p class="social-icons">
                    <span><a href="#" rel="tooltip" data-placement="top" data-original-title="Google+"><i class="icon-google-plus"></i></a></span>
                    <span><a href="#" rel="tooltip" data-placement="top" data-original-title="Facebook"><i class="icon-facebook"></i></a></span>
                    <span><a href="#" rel="tooltip" data-placement="top" data-original-title="Twitter"><i class="icon-twitter"></i></a></span>
                </p>
            </div>
        </div>
    </div>
</div>

<!-- start: Footer -->
<footer id="footer">
    <div class="container">
        <div class="row-fluid">
            <div class="span12 clearfix">
                <h3 class="widget-title"><span class="text-info"><?= lang('our_branches');?></span><?= lang('in_cambodia');?></h3>
                <div class="widget-inner">
                    <ul class="unstyled">
                        <li><span class="text-info"><h4 style="color:white;"><?= lang('first_branch'); ?>:</h4></span> #277, St.271, 11Village, Sangkat Teuk laok 3, Khan Toul Kork, Phnom Penh.
                            Tel: 098 25 2005 , 095 817 191 , 010 528 728
                        </li> <br/>
                        <li><span class="text-info"><h4 style="color:white;"><?= lang('second_branch'); ?>:</h4></span> #35BFE, St.169, Sangkat Veal Vong, Khan 7 Makara, Phnom Penh. Tel: 017/010 232 244 , 070 890 221 , 097 54 333 88</li>                   
                    </ul>
                </div>
            </div>
            </div>
        </div>
    </div>
</footer>
<!-- end: Footer -->

<!-- start: Footer menu -->
<section id="footer-menu">
    <div class="container">
        <div class="row-fluid">
            <div class="span6">
                <ul class="privacy inline">
                    <li><a href="#"><?= lang('footer_products');?></a></li>
                    <li><a href="#"><?= lang('footer_donation');?></a></li>
                    <li><a href="#"><?= lang('footer_contact');?></a></li>
                </ul>
                <p class="copyright">&copy; Copyright 2013. Powered by <a href="http://eleebiz.com/">Eleebiz Software</a>.</p>
            </div>
            <div class="span6 payment">
            </div>
        </div>
    </div>
</section>
<!-- end: Footer menu -->

<!-- Javascript placed at the end of the document so the pages load faster -->
<script type="text/javascript" src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/jasny-bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery-migrate-1.1.1.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/superfish.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/hoverIntent.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.flexslider.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/jflickrfeed.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.prettyPhoto.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.elastislide.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.tweet.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/smoothscroll.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.ui.totop.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/ajax-mail.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/main.js"></script>

</body>
</html>

<?php
    function checkActive($menu){
        if (strpos($_SERVER['REQUEST_URI']."#", $menu."#") !== FALSE)
        {
            return ' class="active"';
        }
        else{
            return '';
        }
    }
    
    function checkActiveDropDown($menu){
        if (strpos($_SERVER['REQUEST_URI']."#", $menu."#") !== FALSE)
        {
            return ' class="dropdown active"';
        }
        else{
            return ' class="dropdown"';
        }
    }
?>