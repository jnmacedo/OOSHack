<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-12 09:05:33
         compiled from ".\templates\listElements.html.tpl" */ ?>
<?php /*%%SmartyHeaderCode:278325529dccaeaa6c6-27141708%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '47f85e42aacb2c35341d090b6111655af082cf95' => 
    array (
      0 => '.\\templates\\listElements.html.tpl',
      1 => 1428830710,
      2 => 'file',
    ),
    '31bf6b5e85d7703232d17bb46a8abacf3149649c' => 
    array (
      0 => '.\\templates\\base-admin.tpl.html',
      1 => 1428832966,
      2 => 'file',
    ),
    '1ed7a8db89e38bbba43c5352816d8e682f512201' => 
    array (
      0 => '.\\templates\\navbar-admin.tpl.html',
      1 => 1428780578,
      2 => 'file',
    ),
    'c3270193ad36b43ac7a06324ef4d012f5da8c2e0' => 
    array (
      0 => '.\\templates\\sidebar-admin.tpl.html',
      1 => 1428830304,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '278325529dccaeaa6c6-27141708',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5529dccaf23cb5_88970855',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5529dccaf23cb5_88970855')) {function content_5529dccaf23cb5_88970855($_smarty_tpl) {?><!DOCTYPE html>
<html lang="es">
<head>

    <title>MercadoLibre</title>

    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,500,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>

    
    <link rel="stylesheet" type="text/css" media="screen" href="http://localhost/OOSHack/public/css/main-admin.css"/>
    <link rel="stylesheet" type="text/css" media="screen" href="http://localhost/OOSHack/public/css/iconos.css"/>

    
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"><?php echo '</script'; ?>
>

    

</head>
<body>



    <?php /*  Call merged included template "navbar-admin.tpl.html" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("navbar-admin.tpl.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '278325529dccaeaa6c6-27141708');
content_552a5f8d095765_30498723($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "navbar-admin.tpl.html" */?>


<?php /*  Call merged included template "sidebar-admin.tpl.html" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("sidebar-admin.tpl.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '278325529dccaeaa6c6-27141708');
content_552a5f8d0a89e4_86893336($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "sidebar-admin.tpl.html" */?>


<section id="main-content" class="sb-init">
    
	<?php echo '<script'; ?>
 type="text/javascript" src="public/js/scriptListElements.js"><?php echo '</script'; ?>
>
        <div id="divListElements">
            <div id="listElements">
            </div>
        </div>


</section>


<?php echo '<script'; ?>
>

    $('#boton-ampliar').click(function() {
        if(!$('#boton-ampliar').hasClass('sb-collapsed')) {
            $('#boton-ampliar').addClass('sb-collapsed');
            $('#sidebar-admin').addClass('sb-collapsed');
            $('#main-content').addClass('sb-collapsed');
            $('#main-content').width( $(window).width() - 60);

        } else {
            $('#sidebar-admin').addClass('sb-restaurando');

            setTimeout(function() {
                $('#boton-ampliar').removeClass('sb-collapsed');
                $('#sidebar-admin').removeClass('sb-restaurando');
                $('#sidebar-admin').removeClass('sb-collapsed');
                $('#main-content').removeClass('sb-collapsed');
                $('#main-content').width( $(window).width() - $('#sidebar-admin').width());
            }, 700);
        }
    });


    $('#boton-perfil').click(function() {
        if(!$('#perfil-ampliado').hasClass('show')) {
            $('#perfil-ampliado').addClass('show');
            setTimeout(function() {
                $('#perfil-ampliado').addClass('visible');
                $('#boton-perfil').addClass('activo');
            }, 20);
        } else {
            $('#perfil-ampliado').removeClass('visible');
            $('#boton-perfil').removeClass('activo');
            setTimeout(function() {
                $('#perfil-ampliado').removeClass('show');
            }, 200);


        }
    });


    $('.input').each(function() {
        addFocusInput(this, true);
        removeFocusInput(this, false);

        $(this).focusin(function() {
            addFocusInput(this, true);
        });
        $(this).focusout(function() {
            removeFocusInput(this, false);
        });
    });

    function addFocusInput(input, addFocus) {
        if(addFocus || $(input).val().length !=0) {
            $(input).parent().find('label').addClass('label-focus');
            $(input).addClass('input-focus');
        }
    }

    function removeFocusInput(input, clearFocus) {
        if(clearFocus || $(input).val().length == 0) {
            $(input).parent().find('label').removeClass('label-focus');
            $(input).removeClass('input-focus');
        }
    }

    function showBloqueAlerta(destino ,contenido, estado)
    {
        var bloqueAlerta = '<div class="bloque-alerta ' + estado + '"><p>' + contenido + '</p></div>';
        $(destino).append(bloqueAlerta);

        $(destino).find(".bloque-alerta").fadeIn();
    }

<?php echo '</script'; ?>
>



</body>
</html><?php }} ?>
<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-12 09:05:33
         compiled from ".\templates\navbar-admin.tpl.html" */ ?>
<?php if ($_valid && !is_callable('content_552a5f8d095765_30498723')) {function content_552a5f8d095765_30498723($_smarty_tpl) {?><section id="navbar-admin" class="clearfix">
    <nav class="nav nav-izq">
        <ul class="clearfix">
            <li>
                <a href="#" id="boton-ampliar" class="icon-navicon"></a>
            </li>

        </ul>
    </nav>

    <nav class="nav nav-der">
        <ul class="clearfix">
            <li>
                <a id="boton-perfil" class=clearfix" href="#">
                    <p>Nombre</p>
                    <i class="icon-abajo"></i>
                </a>
            </li>
        </ul>

    </nav>

    <div id="perfil-ampliado">
        <ul>
            <li>
                <a href="#">Ajustes</a>
            </li>
            <li>
                <a href="/auth/logout">Salir</a>
            </li>
        </ul>
    </div>

</section><?php }} ?>
<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-12 09:05:33
         compiled from ".\templates\sidebar-admin.tpl.html" */ ?>
<?php if ($_valid && !is_callable('content_552a5f8d0a89e4_86893336')) {function content_552a5f8d0a89e4_86893336($_smarty_tpl) {?>
<section id="sidebar-admin" class="sb-init">

    <div class="sb-seccion-logo">
        <a href="#">
            <img class="logo" src="http://localhost/OOSHack/public/img/logo-blanco.svg">
            <img class="logo-collapsed" src="http://localhost/OOSHack/public/img/logo-blanco-collapsed.svg">


        </a>
    </div>

    <nav class="sb-menu">
        <ul>

            <li><a href="#">
                <i class="icon-home"></i><span class="nombre-seccion">Escritorio</span>
                </a></li>

            <li><a href="#">
                <i class="icon-paginas"></i><span class="nombre-seccion">Productos</span>
            </a></li>

            <li><a href="#">
                <i class="icon-mail"></i><span class="nombre-seccion">Chat</span>
                </a></li>

            <li><a href="#">
                <i class="icon-grafica"></i><span class="nombre-seccion">Analíticas</span>
                </a></li>

            <li><a href="#">
                <i class="icon-paginas"></i><span class="nombre-seccion">Páginas</span>
            </a></li>



        </ul>
    </nav>

</section><?php }} ?>
