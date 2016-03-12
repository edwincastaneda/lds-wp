<!-- Modal Login-->
<div class="modal fade bs-example-modal-sm" id="modalLogin" tabindex="-1" role="dialog" aria-labelledby="modalLoginLabel">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Iniciar Sesión</h4>
            </div>
            <div class="modal-body">
                <?php if(isset($_GET['login_error']) && $_GET['login_error']==1){ ?>
                <div class="alert alert-danger" role="alert">¡No se inició sesión!<br/>Verifique su usuario y contraseña.</div>
                <?php } ?>
                <form name="loginform" id="loginform" action="<?php echo home_url();?>/wp-login.php" method="post">
                    <div class="form-group">
                        <label for="user_login">Nombre de usuario</label>
                        <input type="text" name="log" id="user_login" value="" class="form-control" placeholder="Nombre de usuario" required="">
                    </div>
                    <div class="form-group">
                        <label for="password">Contraseña</label>
                        <input type="password" name="pwd" id="user_pass" class="form-control" value="" placeholder="Contraseña" required>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input name="rememberme" type="checkbox" id="rememberme" value="forever"> Recuérdame
                        </label>
                    </div>
                    <button type="submit" name="wp-submit" id="wp-submit" class="btn btn-primary btn-block">Acceder</button>
                    <input type="hidden" name="redirect_to" value="<?php echo home_url();?>/lds-wp/">
                </form>
            </div>
        </div>
    </div>
</div>

