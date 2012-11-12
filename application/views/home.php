<!DOCTYPE html>
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<title>AppsPymes | Login</title>
<link rel="stylesheet" href="css/style.css" type="text/css" />
<script type="text/javascript" src="<?=base_url();?>js/plugins/jquery-1.7.min.js"></script>
<script type="text/javascript" src="<?=base_url();?>js/plugins/jquery-ui-1.8.16.custom.min.js"></script>
<script type="text/javascript">
/*
$(document).ready(function(){
	$('.loginform button').hover(function(){
		$(this).stop().switchClass('default','hover');
	},function(){
		$(this).stop().switchClass('hover','default');
	});
	$('#login').submit(function(){
        var u = jQuery(this).find('#usuario'), c = jQuery(this).find('#password');
		if(u.val() == '' ||  c.val() == '') { 
			jQuery('#loginerror1').slideDown();
			return false;	
		}
	});
	$('#usuario').keypress(function(){
		jQuery('.loginerror').slideUp();
	});
    $('#usuario').on('blur', function(){
        var u = $("#usuario").val();
         jQuery.ajax({
           url: '/github/apppyme/apppyme/user/userNameChekAjax',
           type: 'POST',
           data: { usuario: u},
           async:   true, 
           success: function(msg) {
                var  msg = $.trim(msg);
                if ( msg == 'TRUE') {
                    $("#boton").removeAttr( 'disabled', 'disabled' );
                }else {
                    $('#loginerror2').slideDown();
                }
           }
         });
    });
});
*/
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
        	<div class="logo"></div>
    	</div>
        <div class="loginform">
        	<div class="loginerror" id="loginerror1"><p>Error de Usuario / Contraseña</p></div>
            <div class="loginerror" id="loginerror2"><p>Usuario no Existe</p></div>
            <div class="loginerror" id="loginerror3"><?=form_error('usuario')?></p></div>
            <div class="loginerror" id="loginerror4"><?=form_error('password')?></p></div>
            <? $attributes = array('id' => 'login');?>
            <?=form_open('user/checkLogin', $attributes);?>
            	<p>
                	<label for="usuario" class="bebas">Correo Electronico</label>
                    <input type="text" id="usuario" name="usuario" class="radius2"  />
                </p>
                <p>
                	<label for="password" class="bebas">Contraseña</label>
                    <input type="password" id="password" name="password" class="radius2"  />
                </p>
                <p>
                	<button class="radius3 bebas" id="boton" >Entrar</button>
                </p>
                <p><a href="#" class="whitelink small">¿No recuerdas usuario/contraseña ?</a></p>
            </form>
        </div>
    </div>
</div>
</body>
</html>
