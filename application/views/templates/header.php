<?php if (!isset($titulo)) $titulo = ''; ?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> Escuela Poblana </title>

  <link rel="shortcut icon" href="<?php echo base_url('assets/img/favicon.ico'); ?>">

  <link href="<?php echo base_url('assets/bootstrap337/css/bootstrap.min.css'); ?>" rel="stylesheet" media="screen">
  <link href="<?php echo base_url('assets/sweetalert2/sweetalert2.min.css'); ?>" rel="stylesheet" media="screen">
  <link href="<?php echo base_url('assets/css/estilos-master.css'); ?>" rel="stylesheet" media="screen">

  <link href="<?php echo base_url('assets/css/font-awesome.min.css'); ?>" rel="stylesheet" media="screen">
  <link href="<?php echo base_url('assets/css/header.css'); ?>" rel="stylesheet" media="screen">


  <script src="<?php echo base_url('assets/jquery-3.2.1.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/jquery.validate.js'); ?>"></script>
  <script src="<?php echo base_url('assets/bootstrap337/js/bootstrap.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/sweetalert2/sweetalert2.min.js'); ?>"></script>

  <script src="<?php echo base_url('assets/js/messages.js'); ?>"></script>
  <script src="<?php echo base_url('assets/js/regularexpressions.js'); ?>"></script>

  <script>
  $(document).ready(function () {
    base_url = live_url = "<?php echo base_url(); ?>";
    base_url = base_url+"index.php/";

    // Calculating the distance from the top of the page to the initial position of the navbar, and store it in a variable
                 var navbarOffest = $('.navbar').offset().top;


                 $(window).on('scroll', function () {

                     var navbarHeight = $('.navbar').outerHeight();

                     if ( $(window).scrollTop() >= navbarOffest ) {
                         $('.navbar').addClass('navbar-fixed-top');
                         $('body').css('padding-top', navbarHeight + 'px');
                          $('.dv_flotante').css('top','40px');


                     } else {
                         $('.navbar').removeClass('navbar-fixed-top');
                         $('body').css('padding-top', '0');
                         $('.dv_flotante').css('top','12em');
                     }
                 });

  });
  </script>

</head>

<body>
<style>

.navbar_master{
  border-radius:0px !important;
  padding-right:0px !important;
  margin-right:0px !important;
  z-index:99 important;
}


.dropdown-submenu {
  position: relative;
}
.dropdown-submenu > .dropdown-menu {
  top: 0;
  left: 100%;
  margin-top: -6px;
  margin-left: -1px;
}
.dropdown-submenu:hover > .dropdown-menu {
  display: block;
}
.dropdown-submenu:hover > a:after {
  border-left-color: #fff;
}

.dropdown-submenu.pull-left {
  float: none;
}
.dropdown-submenu.pull-left > .dropdown-menu {
  left: -100%;
  margin-left: 10px;
}
</style>

<!-- Header Logo -->
        <div class="headerlogo">
          <div class="container">
             <div class="col-md-12">
               <div>
                 <a href="#"  target="_blank">
                  <img src="<?php echo base_url('assets/img/logo_texto_ejemplo.jpg'); ?>" alt="">
                 </a>
               <div class="pull-right">
                  <img src="<?php echo base_url('assets/img/logo_texto_ejemplo.jpg'); ?>" alt="">
               </div>
              </div>
          </div>
            </div>
        </div>
        <!-- Header Logo END -->
        <!-- NAVBAR -->
                <nav class="navbar">
                    <div class="container">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#NavComponents" aria-expanded="false">
                                <i class="fa fa-bars"></i>
                            </button>
                        </div>

                        <div class="collapse navbar-collapse" id="NavComponents">
                            <!-- Navbar Links -->
                            <ul class="nav navbar-nav navbar-left">

                              <li class="dropdown">
                                  <a href="<?php echo site_url('Index/index'); ?>"  aria-haspopup="true" aria-expanded="false"><i class="fa fa-home"></i><!-- site_url('Controller/function')-->

                                  </a>

                              </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-television"></i> UNO
                                        <span class="caret"></span>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">UNO UNO</a></li>
                                        <li><a href="#">UNO DOS</a></li>
                                        <li><a href="#">UNO TRES</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-television"></i> DOS
                                        <span class="caret"></span>
                                    </a>
                                    <ul class="dropdown-menu">
                                      <li class="dropdown-submenu">
                                        <a class="test" tabindex="-1" href="#">DOS UNO <span class="caret"></span></a>
                                        <ul class="dropdown-menu">
                                          <li><a tabindex="-1" href="#">DOS UNO UNO</a></li>
                                        </ul>
                                      </li>
                                    </ul>
                                  </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-television"></i> TRES
                                        <span class="caret"></span>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a id="">TRES UNO</a></li>
                                        <li><a id="">TRES DOS</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
                <!-- NAVBAR END -->
