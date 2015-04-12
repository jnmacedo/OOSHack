<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-12 12:06:42
         compiled from "./templates/listElements.html.tpl" */ ?>
<?php /*%%SmartyHeaderCode:889932338552a3770edb883-39969690%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4478940058c752e35e1faba6d4555405f0464fbe' => 
    array (
      0 => './templates/listElements.html.tpl',
      1 => 1428830710,
      2 => 'file',
    ),
    'c1c10e13d4115f18edf8991fa1de1d4059298bfd' => 
    array (
      0 => './templates/base-admin.tpl.html',
      1 => 1428832966,
      2 => 'file',
    ),
    'f272c7ac85b8dee8c9e674706d4d5127a351db21' => 
    array (
      0 => './templates/navbar-admin.tpl.html',
      1 => 1428780577,
      2 => 'file',
    ),
    'd034e44fae88b12f701ed0fe4fc1936afb7bb433' => 
    array (
      0 => './templates/sidebar-admin.tpl.html',
      1 => 1428830304,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '889932338552a3770edb883-39969690',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_552a3771014ad6_23560665',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_552a3771014ad6_23560665')) {function content_552a3771014ad6_23560665($_smarty_tpl) {?><!DOCTYPE html>
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
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("navbar-admin.tpl.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '889932338552a3770edb883-39969690');
content_552a43b2a8ca84_23011836($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "navbar-admin.tpl.html" */?>


<?php /*  Call merged included template "sidebar-admin.tpl.html" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("sidebar-admin.tpl.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '889932338552a3770edb883-39969690');
content_552a43b2a9cb81_71691867($_smarty_tpl);
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
<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-12 12:06:42
         compiled from "./templates/navbar-admin.tpl.html" */ ?>
<?php if ($_valid && !is_callable('content_552a43b2a8ca84_23011836')) {function content_552a43b2a8ca84_23011836($_smarty_tpl) {?><section id="navbar-admin" class="clearfix">
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
<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-12 12:06:42
         compiled from "./templates/sidebar-admin.tpl.html" */ ?>
<?php if ($_valid && !is_callable('content_552a43b2a9cb81_71691867')) {function content_552a43b2a9cb81_71691867($_smarty_tpl) {?>
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
