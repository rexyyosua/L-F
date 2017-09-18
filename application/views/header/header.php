<!DOCTYPE html>
<html>
<head>
  <!-- Site made with Mobirise Website Builder v3.12.1, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v3.12.1, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="<?=base_url()?>assets/images/logo.png" type="image/x-icon">
  <meta name="description" content="">
  
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic&amp;subset=latin">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
  <link rel="stylesheet" href="<?=base_url()?>assets/bootstrap-material-design-font/css/material.css">
  <link rel="stylesheet" href="<?=base_url()?>assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="<?=base_url()?>assets/et-line-font-plugin/style.css">
  <link rel="stylesheet" href="<?=base_url()?>assets/tether/tether.min.css">
  <link rel="stylesheet" href="<?=base_url()?>assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?=base_url()?>assets/animate.css/animate.min.css">
  <link rel="stylesheet" href="<?=base_url()?>assets/dropdown/css/style.css">
  <link rel="stylesheet" href="<?=base_url()?>assets/socicon/css/styles.css">
  <link rel="stylesheet" href="<?=base_url()?>assets/theme/css/style.css">
  <link rel="stylesheet" href="<?=base_url()?>assets/mobirise/css/mbr-additional.css" type="text/css">
  
  
  
</head>
</head>
<body>
<section id="menu-o">

    <nav class="navbar navbar-dropdown bg-color  navbar-fixed-top">
        <div class="container">

            <div class="mbr-table">
                <div class="mbr-table-cell">

                    <div class="navbar-brand">
                        <a href="https://mobirise.com" class="mbri-pin mbr-iconfont mbr-iconfont-menu navbar-logo"></a>
                        <a class="navbar-caption" href="https://mobirise.com">LOGO&nbsp;</a>
                    </div>

                </div>
                <div class="mbr-table-cell">

                    <button class="navbar-toggler pull-xs-right hidden-md-up" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar">
                        <div class="hamburger-icon"></div>
                    </button>

                    <ul class="nav-dropdown collapse pull-xs-right nav navbar-nav navbar-toggleable-sm" id="exCollapsingNavbar">
                    <li class="nav-item"><a class="nav-link link" href="<?=base_url()?>">HOME</a></li>
                    <li class="nav-item"><a class="nav-link link" href="#top"></a></li>
                    <?php if($this->session->userdata('username')) {?>
                    <li class="nav-item dropdown">
                      <a  href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Welcome <?=$this->session->userdata('username')?> <span class="caret"></span></a>
                      <ul class="dropdown-menu">
                        <li class="nav-link link"><?=anchor('user/ef','EDIT PROFILE');?></li>
                        <li class="nav-link link" "><?=anchor('login/logout','LOGOUT');?></li>
                        
                      </ul>
                    </li>
                
                <?php }else{?>
                <li class="nav-item"><?=anchor('login','LOGIN');?></li>
                <?php } ?>
                    </ul>
                    <button hidden="" class="navbar-toggler navbar-close" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar">
                        <div class="close-icon"></div>
                    </button>

                </div>
            </div>

        </div>
    </nav>
    <hr>

 <script src="<?=base_url()?>assets/web/assets/jquery/jquery.min.js"></script>
  <script src="<?=base_url()?>assets/tether/tether.min.js"></script>
  <script src="<?=base_url()?>assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="<?=base_url()?>assets/smooth-scroll/smooth-scroll.js"></script>
  <script src="<?=base_url()?>assets/jarallax/jarallax.js"></script>
  <script src="<?=base_url()?>assets/viewport-checker/jquery.viewportchecker.js"></script>
  <script src="<?=base_url()?>assets/dropdown/js/script.min.js"></script>
  <script src="<?=base_url()?>assets/touch-swipe/jquery.touch-swipe.min.js"></script>
  <script src="<?=base_url()?>assets/theme/js/script.js"></script>
  <script src="<?=base_url()?>assets/formoid/formoid.min.js"></script>
  
</body>