<?php get_header(); ?>
<?php include "login.php"; ?>
<div class="row">
    <div class="col-lg-12">
        
    </div>
</div>
<div class="row">
    <div class="col-lg-6">
        <div class="starter-template">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.png"/>
        </div>
    </div>
    <div class="col-lg-6"></div>
</div>
<div class="row">
    <div class="col-lg-4">
        <?php
        if (is_active_sidebar('home_1')) : dynamic_sidebar('home_1');
        endif;
        ?>
    </div>
    <div class="col-lg-4">
        <?php
        if (is_active_sidebar('home_2')) : dynamic_sidebar('home_2');
        endif;
        ?>
    </div>
    <div class="col-lg-4">
        <?php
        if (is_active_sidebar('home_3')) : dynamic_sidebar('home_3');
        endif;
        ?>
    </div> 
</div>


<!-- Jumbotron -->
<!--      <div class="jumbotron">
        <h1>Marketing stuff!</h1>
        <p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet.</p>
        <p><a class="btn btn-lg btn-success" href="#" role="button">Get started today</a></p>
      </div>-->
<footer class="footer">
    <?php
    if (is_active_sidebar('footer')) : dynamic_sidebar('footer');
    endif;
    ?>
</footer>

</div><!-- /.container -->

<?php get_footer(); ?>