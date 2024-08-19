
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Cuba admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Cuba admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="<?php echo base_url()?>assets/images/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="<?php echo base_url()?>assets/images/favicon.ico" type="image/x-icon">
    <title>Cuba - Premium Admin Template</title>
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Rubik:400,400i,500,500i,700,700i&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900&amp;display=swap" rel="stylesheet">


    <?php echo link_tag('assets/css/font-awesome.css'); ?>
    <?php echo link_tag('assets/css/vendors/icofont.css'); ?>
    <?php echo link_tag('assets/css/vendors/themify.css'); ?>
    <?php echo link_tag('assets/css/vendors/flag-icon.css'); ?>
    <?php echo link_tag('assets/css/vendors/feather-icon.css'); ?>
    <?php echo link_tag('assets/css/vendors/slick.css'); ?>
    <?php echo link_tag('assets/css/vendors/slick-theme.css'); ?>
    <?php echo link_tag('assets/css/vendors/scrollbar.css'); ?>
    <?php echo link_tag('assets/css/vendors/animate.css'); ?>
    <?php echo link_tag('assets/css/vendors/jquery.dataTables.css'); ?>
    <?php echo link_tag('assets/css/vendors/dataTables.bootstrap5.css'); ?>
    <?php echo link_tag('assets/css/vendors/select.bootstrap5.css'); ?>
    <?php echo link_tag('assets/css/vendors/sweetalert2.css'); ?>
    <?php echo link_tag('assets/css/vendors/bootstrap.css'); ?>
    <?php echo link_tag('assets/css/style.css'); ?>
    <?php echo link_tag('assets/css/color-1.css'); ?>
    <?php echo link_tag('assets/css/responsive.css'); ?>
  </head>
  <body> 
    <!-- loader starts-->
    <div class="loader-wrapper">
      <div class="loader-index"> <span></span></div>
      <svg>
        <defs></defs>
        <filter id="goo">
          <fegaussianblur in="SourceGraphic" stddeviation="11" result="blur"></fegaussianblur>
          <fecolormatrix in="blur" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="goo"> </fecolormatrix>
        </filter>
      </svg>
    </div>
    <!-- loader ends-->
    <!-- tap on top starts-->
    <div class="tap-top"><i data-feather="chevrons-up"></i></div>
    <!-- tap on tap ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper compact-wrapper" id="pageWrapper">
<div class="page-header">
        <div class="header-wrapper row m-0">
          <form class="form-inline search-full col" action="#" method="get">
            <div class="form-group w-100">
              <div class="Typeahead Typeahead--twitterUsers">
                <div class="u-posRelative">
                  <input class="demo-input Typeahead-input form-control-plaintext w-100" type="text" placeholder="Search Cuba .." name="q" title="" autofocus>
                  <div class="spinner-border Typeahead-spinner" role="status"><span class="sr-only">Loading...</span></div><i class="close-search" data-feather="x"></i>
                </div>
                <div class="Typeahead-menu"></div>
              </div>
            </div>
          </form>
          <div class="header-logo-wrapper col-auto p-0">
            
          </div>
          
          <div class="nav-right col-xxl-7 col-xl-7 col-md-7 col-8 pull-right right-header p-0 ms-auto">
            <ul class="nav-menus">
              
              <li class="onhover-dropdown">
                <div class="notification-box">
                  <svg>
                    <use href="<?php echo base_url()?>assets/svg/icon-sprite.svg#notification"></use>
                  </svg><span class="badge rounded-pill badge-secondary">4 </span>
                </div>
                <div class="onhover-show-div notification-dropdown">
                  <h6 class="f-18 mb-0 dropdown-title">Notitications                               </h6>
                  <ul>
                    <li class="b-l-primary border-4">
                      <p>Delivery processing <span class="font-danger">10 min.</span></p>
                    </li>
                    <li class="b-l-success border-4">
                      <p>Order Complete<span class="font-success">1 hr</span></p>
                    </li>
                    <li class="b-l-secondary border-4">
                      <p>Tickets Generated<span class="font-secondary">3 hr</span></p>
                    </li>
                    <li class="b-l-warning border-4">
                      <p>Delivery Complete<span class="font-warning">6 hr</span></p>
                    </li>
                    <li><a class="f-w-700" href="#">Check all</a></li>
                  </ul>
                </div>
              </li>
              <li class="profile-nav onhover-dropdown pe-0 py-0">
                <div class="media profile-media"><img class="b-r-10" src="<?php echo base_url()?>assets/images/dashboard/profile.png" alt="">
                  <div class="media-body"><span><?php echo $this->session->userdata('adminname'); ?></span>
                    <p class="mb-0">Admin <i class="middle fa fa-angle-down"></i></p>
                  </div>
                </div>
                <ul class="profile-dropdown onhover-show-div">
                  <li><a href="<?php echo site_url('Login/cpForm'); ?>"><i data-feather="settings"></i><span>Chang Password</span></a></li>
                  <li><a href="<?php echo site_url('Login/logout'); ?>"><i data-feather="log-in"> </i><span>Logout</span></a></li>
                </ul>
              </li>
            </ul>
          </div>
          <script class="result-template" type="text/x-handlebars-template">
            <div class="ProfileCard u-cf">                        
            <div class="ProfileCard-avatar"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-airplay m-0"><path d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1"></path><polygon points="12 15 17 21 7 21 12 15"></polygon></svg></div>
            <div class="ProfileCard-details">
            <div class="ProfileCard-realName">{{name}}</div>
            </div>
            </div>
          </script>
          <script class="empty-template" type="text/x-handlebars-template"><div class="EmptyMessage">Your search turned up 0 results. This most likely means the backend is down, yikes!</div></script>
        </div>
      </div>
      