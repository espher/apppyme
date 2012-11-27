<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8"> 
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Login Page | Starlight Premium Admin Template</title>
<link rel="stylesheet" href="<?=base_url();?>css/style.css" type="text/css" />
<script type="text/javascript" src="<?=base_url();?>js/plugins/jquery-1.7.min.js"></script>
<script type="text/javascript" src="<?=base_url();?>js/plugins/jquery-ui-1.8.16.custom.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	$('.loginform button').hover(function(){
		$(this).stop().switchClass('default','hover');
	},function(){
		$(this).stop().switchClass('hover','default');
	});

    var correo = "<?=form_error('correo')?>";
    var contrasena = "<?=form_error('contrasena')?>";

    //console.log(correo + contrasena);

    if(correo == '<p>El campo Correo es necesario</p>' || correo == '<p>El campo Correo no es un correo  valido</p>') {
            jQuery('#usuarioerror .loginerror').slideDown();
    }
    if(contrasena == '<p>El campo Contraseña es necesario</p>') {
            jQuery('#contrasenaerror .loginerror').slideDown();
    }
    if(correo == '<p>El Correo no existe</p>') {
            jQuery('#v .loginerror').slideDown();
    }
});
</script>
<!--[if lt IE 9]>
	<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
<![endif]-->
</head>

<body class="login">

<div class="loginbox radius3">
	<div class="loginboxinner radius3">
    	<div class="loginheader">
    		<h1 class="bebas">Entrar</h1>
        	<div class="logo"><img src="<?=base_url();?>images/starlight_admin_template_logo.png" alt="" /></div>
    	</div>
        <div class="loginform">
        	<div id="v">
                <div class="loginerror"><p>Usuario o Contraseña Invalidos</p></div>
            </div>
        	<?=form_open('index.php/home/login');?>
            	<p>
                	<label for="username" class="bebas">Correo Electronico:</label>
                    <input type="text" id="username" name="correo" class="radius2" />
                    <div id="usuarioerror">
                        <div class="loginerror">
                            <?=form_error('correo')?>
                        </div>
                    </div>
                </p>
                <p id="contrasena">
                	<label for="password" class="bebas">Password:</label>
                    <input type="password" id="password" name="contrasena" class="radius2" />
                    <div id="contrasenaerror">
                        <div class="loginerror">
                            <?=form_error('contrasena')?>
                        </div>
                    </div>
                </p>
                <p>
                	<button class="radius3 bebas">Entrar</button>
                </p>
                <p><a href="#" class="whitelink small">Ovidaste usuario/contraseña?</a></p>
            <?=form_close();?>
        </div>
    </div>
</div>
</body>
</html>