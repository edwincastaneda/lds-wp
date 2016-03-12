<?php get_header(); ?>
<?php include "modals.php"; ?>
<div class="row">
</div>
<div class="row">
    <div class="col-lg-4">
        <div class="starter-template">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.png"/>
        </div>
        <?php
        if (is_active_sidebar('home_1')) : dynamic_sidebar('home_1');
        endif;
        ?>
    </div>
    <div class="col-lg-8">

        <?php
        if (have_posts()) :
            while (have_posts()) : the_post();
                ?>
                <h1><a href="<?php echo get_the_permalink(); ?>"><?php echo get_the_title(); ?></a></h1>
                <?php
                the_content();
            endwhile;
        endif;

        $sql = 'SELECT count(*) as ire FROM ' . $wpdb->prefix . 'caracteristicas_usuario '
                . 'WHERE user_id =' . $current_user->ID
                . ' AND post_id=' . get_the_ID();

        $ire = $wpdb->get_var($sql);


       
        if (isset($_POST['confirm']) && $ire == 0) {
            $wpdb->insert(
                    $wpdb->prefix . 'caracteristicas_usuario', array(
                'id' => 0,
                'user_id' => $current_user->ID,
                'post_id' => get_the_ID()
                    )
            );
        }
        
        if (isset($_POST['reject']) && $ire == 1) {
             $wpdb->delete($wpdb->prefix . 'caracteristicas_usuario', 
                     array('user_id' => $current_user->ID,'post_id'=>get_the_ID()));
        }


        $sql = 'SELECT count(*) as ire FROM ' . $wpdb->prefix . 'caracteristicas_usuario '
                . 'WHERE user_id =' . $current_user->ID
                . ' AND post_id=' . get_the_ID();

        $ire = $wpdb->get_var($sql);
        ?>
        Asistiré: <?php echo $ire; ?>


        <form method="post">
            <input type="submit" class="btn btn-default" value="Asistiré" name="confirm">
            <input type="submit" class="btn btn-default" value="Cancelar Asistencia" name="reject">
        </form>
    </div>
</div>


<!-- Jumbotron -->
<!--      <div class="jumbotron">
        <h1>Marketing stuff!</h1>
        <p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet.</p>
        <p><a class="btn btn-lg btn-success" href="#" role="button">Get started today</a></p>
      </div>-->
<footer class="footer">
    <div class="row">
        <div class="col-lg-6">
            <?php
            if (is_active_sidebar('footer')) : dynamic_sidebar('footer');
            endif;
            ?>
        </div>
        <div class="col-lg-6 text-right social-buttons">
            <i class="fa fa-facebook-official"></i>
        </div>
</footer>

</div><!-- /.container -->

<?php get_footer(); ?>