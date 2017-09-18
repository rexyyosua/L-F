

<!DOCTYPE html>
<html lang="en">
<head>

    <link rel="stylesheet" type="text/css" href="design.css">
    <!-- CSS for Spectrum Color -->
    <link rel="stylesheet" type="text/css" href="color-spectrum/spectrum.css">
    <!-- CSS for Alert Dialog -->
    <link rel="stylesheet" type="text/css" href="alert-dialog/jquery.dialog.css">
    <link rel="stylesheet" type="text/css" href="alert-dialog/jquery.dialog.min.css">
    <!-- Import Google Icon Font -->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Import materialize.css -->
    <link type="text/css" rel="stylesheet" href="materialize/css/materialize.min.css"  media="screen,projection">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css">
    <!-- Font Awesome Icon-->
    <link rel="stylesheet" href="fontawesome/css/font-awesome.min.css">

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
            <a href="index.php" class="brand-logo"><img src="images/logo.jpg"></a>
            <ul class="right hide-on-med-and-down">
              <li class="sub-hover active"><a href="index.php">Beranda</a></li>
               <!--<li><?=anchor('welcome/category','Kehilangan');?></li>
                <li><?=anchor('welcome/category','Penemuan');?></li>-->
               <li class="sub-hover"><a href="#helper">Cara Penggunaan</a></li>
              <li class="sub-hover"><a href="#about">Tentang</a></li>
           

                <?php if($this->session->userdata('username')) {?>
                  <li class="sub-hover">
                    <a  href="#" class="dropdown-button" data-activates="dropdown2" role="button" aria-haspopup="true" aria-expanded="false">Welcome <?=$this->session->userdata('username')?> <span class="caret"></span></a>
                    <ul id="dropdown2" class="dropdown-content dropdown-position">
                      
    
                     
                      <li><?=anchor('login/logout','Logout');?></li>
                      
                    </ul>
                  </li>
                
                <?php }else{?>
                <li><?=anchor('login','Masuk');?></li>
                <?php } ?>
              <!-- Session after login show menu -->

              
              <!-- Dropdown Trigger 
              <li class="sub-hover"><a class="dropdown-button" href="#!" data-activates="dropdown1">Register<i class="material-icons right">arrow_drop_down</i></a></li> -->

              
              
            </ul>
          </div>
        </nav>
     </div>