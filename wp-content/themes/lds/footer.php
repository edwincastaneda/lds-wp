    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/ie10-viewport-bug-workaround.js"></script>
    
    <?php if(isset($_GET['login_error']) && $_GET['login_error']==1){ ?>
    <script>
        $('#modalLogin').modal('show')
    </script>
    <?php } ?>
  </body>