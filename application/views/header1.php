

<!DOCTYPE html>
<html lang="en">
<head>

    <script type="text/javascript" src="<?=base_url()?>assets/jquery-3.2.1.min.js"></script>

    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/design.css">
    <!-- CSS for Spectrum Color -->
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/color-spectrum/spectrum.css">
    <!-- CSS for Alert Dialog -->
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/alert-dialog/jquery.dialog.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/alert-dialog/jquery.dialog.min.css">
    <!-- Import Google Icon Font -->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Import materialize.css -->
    <link type="text/css" rel="stylesheet" href="<?=base_url()?>assets/materialize/css/materialize.min.css"  media="screen,projection">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css">
    <!-- Font Awesome Icon-->
    <link rel="stylesheet" href="<?=base_url()?>assets/fontawesome/css/font-awesome.min.css">


    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <title>Lost 'n Found</title>

</head>
<body>
    <div class="fixed-action-btn horizontal scrolltop-toggle">
      <a class="btn-floating btn-large orange">
        <i class="material-icons scrolltop-icons">navigation</i>
      </a>
    </div>

    <!-- Search Bar
      <div class="navbar-fixed">
        <nav class="blue accent-3">
          <div class="nav-wrapper">
            <form>
              <div class="input-field">
                <input id="search" type="search" required>
                <label class="label-icon" for="search"><i class="material-icons">search</i></label>
                <i class="material-icons">close</i>
              </div>
            </form>
          </div>
        </nav>
      </div>
      -->
	  
    <div class="nav-scroll nav-transition navbar-fixed">
        <ul id="dropdown1" class="dropdown-content dropdown-position">
          <li><a href="#!"><i class="large material-icons">perm_identity</i>New User</a></li>
          <li class="divider"></li>
          <li><a href="#!"><i class="large material-icons">input</i>Sign In</a></li>
        </ul>
        <nav class="blue accent-3 z-depth-3">
          <div class="nav-wrapper container">
            <a href="index.php" class="brand-logo"></a>
            <ul class="right hide-on-med-and-down">
              <li class="sub-hover active"><a href="<?=base_url()?>">Beranda</a></li>
               <li><?=anchor('welcome/category','Kehilangan');?></li>
                <li><?=anchor('welcome/category#test3','Penemuan');?></li>
               <li class="sub-hover"><a href="<?=base_url()?>#helper">Cara Penggunaan</a></li>
              <li class="sub-hover"><a href="<?=base_url()?>#about">Tentang</a></li>
           

  
    
    
                <?php if($this->session->userdata('username')) {?>
                  <li class="sub-hover">
                    <a  href="#" class="dropdown-button" data-activates="dropdown2" role="button" aria-haspopup="true" aria-expanded="false">Welcome <?=$this->session->userdata('username')?> <span class="caret"></span></a>
                    <ul id="dropdown2" class="dropdown-content dropdown-position">
                      
    
                      
                      <li><?=anchor('login/logout','Logout');?></li>
                      
                    </ul>
                  </li>
                
                <?php }else{?>
                <li><?=anchor('login','Login');?></li>
                <?php } ?>
            </ul>
          </div>
        </nav>
    </div>