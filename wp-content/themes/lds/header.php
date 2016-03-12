
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico">

        <title><?php bloginfo('name'); ?></title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <link href='https://fonts.googleapis.com/css?family=Catamaran:400,300' rel='stylesheet' type='text/css'>
        <link href="<?php echo get_stylesheet_directory_uri(); ?>/css/starter-template.css" rel="stylesheet">
        <!-- Bootstrap core CSS -->
        <link href="<?php echo get_stylesheet_directory_uri(); ?>/less/bootstrap-lds.css" rel="stylesheet">
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <link href="<?php echo get_stylesheet_directory_uri(); ?>/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
        <link href="<?php echo get_stylesheet_directory_uri(); ?>/less/tema-lds.css" rel="stylesheet">
        <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
        <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
        <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/ie-emulation-modes-warning.js"></script>
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>

    <body>

        <!--BARRA DE NAVEGACION-->

        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
<!--                    <a class="navbar-brand" href="#"><?php bloginfo('name'); ?></a>-->
                </div>
                <div id="navbar" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="<?php bloginfo('url'); ?>">Inicio</a></li>
                    </ul>
                    <?php
                    wp_nav_menu(
                            array(
                                'theme_location' => 'header-menu',
                                'menu' => 'top_menu',
                                'depth' => 2,
                                'container' => 'ul',
                                'menu_class' => 'nav navbar-nav',
                                'walker' => new wp_bootstrap_navwalker()))
                    ;
                    ?>
                    <ul class="nav navbar-nav navbar-right">
                        <?php
                        if (is_user_logged_in()) {
                            ?>

                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">
                                    Bienvenido, 
                                    <?php
                                    $current_user = wp_get_current_user();
                                    echo $current_user->user_login;
                                    ?> 
                                    <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li class="dropdown-header"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Mi Cuenta</li>
                                    <li><a href="#">Perfil</a></li>
                                    <li><a href="#">Otro Menu</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="<?php echo wp_logout_url(home_url()); ?>">Cerrar Sesión</a></li>
                                </ul>
                            </li>
                        <?php } else { ?>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">Bienvenido visitante! <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#" data-toggle="modal" data-target="#modalLogin">Iniciar Sesión</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="#">Registrarme</a></li>
                                    <li><a href="#">Recordar Contraseña</a></li>
                                </ul>
                            </li>
                        <?php } ?>

                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </nav>
        <!--CONTENIDO-->
        <div class="container">



