<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-12 09:14:49
         compiled from ".\templates\editar-pagina-admin.tpl.html" */ ?>
<?php /*%%SmartyHeaderCode:6722552a61b947c499-17337003%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cfe10229cab71fe82bd25cbd281238217227440c' => 
    array (
      0 => '.\\templates\\editar-pagina-admin.tpl.html',
      1 => 1428833884,
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
  'nocache_hash' => '6722552a61b947c499-17337003',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_552a61b95c6585_75442079',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_552a61b95c6585_75442079')) {function content_552a61b95c6585_75442079($_smarty_tpl) {?><!DOCTYPE html>
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
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("navbar-admin.tpl.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '6722552a61b947c499-17337003');
content_552a61b94ffcb0_67102956($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "navbar-admin.tpl.html" */?>


<?php /*  Call merged included template "sidebar-admin.tpl.html" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("sidebar-admin.tpl.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '6722552a61b947c499-17337003');
content_552a61b95123a4_27747156($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "sidebar-admin.tpl.html" */?>


<section id="main-content" class="sb-init">
    

    <div class="overlay-seleccion-tema">
        <section id="contenedor-lista-temas" class="container" expandir="0">
            <h1>Lista de temas</h1>

            <div class="wrapper-lista-temas">
                <div class="tema clearfix">
                    <img class="imagen-tema" src="http://localhost/OOSHack/public/img/temas/galaxy.jpg">
                    <div class="contenido-tema">
                        <h3>Galaxy</h3>
                        <p>Un tema minimalista y moderno</p>
                        <a href="#" class="btn-success boton-cambiar-tema" tema_id="0" nombre-tema="Galaxy">Seleccionar (5% más de Comisión por venta)</a>
                    </div>
                </div>

                <div class="tema clearfix">
                    <img class="imagen-tema" src="http://localhost/OOSHack/public/img/temas/coffea.jpg">
                    <div class="contenido-tema">
                        <h3>Coffea Robusta</h3>
                        <p>Un tema exclusivo para amantes del café, y para aquellos que aprecían el buen gusto</p>
                        <a href="#" class="btn-success boton-cambiar-tema" tema_id="1" nombre-tema="Coffea Robusta">Seleccionar (Gratuito)</a>
                    </div>
                </div>

            </div>
            <a href="#" class="btn-error btn-big boton-cerrar-lista-temas">Cerrar</a>
        </section>
    </div>


    <div class="container-titulo">
        <h1>Crear Descripción de artículo</h1>
        <p>Crea modulos de contenidos y edita su información seleccionado el boton agregar. Elegí el tema con que verás la descripción</p>
        <a href="#" class="btn-primario btn-big boton-seleccionar-tema">Seleccionar tema</a>
        <p class="tema-seleccionado"></p>
    </div>


    <form id="form-componentes-descripcion" method="POST" action="ProcesarEditarDescripcion.php" enctype='multipart/form-data'>
        <div class="componentes-descripcion">

        </div>

        <input type="hidden" class='input-tema' name="tema" value="0">
        <input type="hidden" class='input-id' name="id_articulo" value="<?php echo $_smarty_tpl->tpl_vars['idarticulo']->value;?>
">
        <input type="hidden" class='input-id' name="id_vendedor" value="<?php echo $_smarty_tpl->tpl_vars['idvendedor']->value;?>
">

        <a href="#" class="boton-mostrar-agregar-componente"><i class="fa fa-plus icono"></i></a>
        <div class="selector-componentes">
            <div class="lista-componentes">
                <h2>Seleccione un componente</h2>
                <div class="clearfix">
                    <div class="wrapper-componente">
                        <a href="#" class="boton-agregar-componente componente-modulo-doble-imagen">
                            <img class="img-componente" src="http://localhost/OOSHack/public/img/iconos-editar-pagina/modulo-doble-imagen.jpg">
                        </a>
                    </div>

                    <div class="wrapper-componente">
                        <a href="#" class="boton-agregar-componente componente-modulo-texto">
                            <img class="img-componente" src="http://localhost/OOSHack/public/img/iconos-editar-pagina/modulo-texto.jpg">
                        </a>
                    </div>

                    <div class="wrapper-componente">
                        <a href="#" class="boton-agregar-componente componente-modulo-triple-imagen">
                            <img class="img-componente" src="http://localhost/OOSHack/public/img/iconos-editar-pagina/modulo-triple-imagen.jpg">
                        </a>
                    </div>

                    <div class="wrapper-componente">
                        <a href="#" class="boton-agregar-componente componente-modulo-header">
                            <img class="img-componente" src="http://localhost/OOSHack/public/img/iconos-editar-pagina/modulo-header.jpg">
                        </a>
                    </div>

                </div>
            </div>
        </div>

        <div class="container-titulo">
            <a href="#" class="btn-error btn-big">Cancelar</a>
            <button type="submit" class="btn-primario btn-big">Guardar Cambios</button>
        </div>

    </form>


    <div class="fix-end"></div>



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

    <?php echo '<script'; ?>
>

        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    var backgroundImage = 'url(' + e.target.result + ') no-repeat cover';
                    $('.wrapper-imagen[id_wrapper="' + $(input).attr('id_wrapper') + '"] .imagen-fondo').attr('src', e.target.result);
                    $('.wrapper-imagen[id_wrapper="' + $(input).attr('id_wrapper') + '"] .icono-imagen').hide();
                    $('.wrapper-imagen[id_wrapper="' + $(input).attr('id_wrapper') + '"] .wrapper-imagen-fondo').show();
                };

                /*
                 .attr('src', e.target.result)
                 .width(150);
                 */

                reader.readAsDataURL(input.files[0]);
            }
        }

        $(document).ready(inicializar);

        var contadorModulos = 0;

        function inicializar() {
            mostrarAgregarComponenteListener();
            agregarComponenteListener();
            abrirListaTemasListener();
            cambiarTemaListener();
        }

        function cambiarTemaListener() {
            $('.boton-cambiar-tema').click(function(e) {
                e.preventDefault();
                $('.input-tema').val($(this).attr('tema_id'));
                $(".overlay-seleccion-tema").hide();
                $('.tema-seleccionado').text('El tema seleccionado es '+ $(this).attr('nombre-tema') );
            });
        }

        function abrirListaTemasListener()
        {
            $('.boton-seleccionar-tema').on("click", function(e) {
                e.preventDefault();
                $(".overlay-seleccion-tema").show();
            });
            $('.boton-cerrar-lista-temas').on('click', function(e) {
                e.preventDefault();
                $(".overlay-seleccion-tema").hide();
            });
        }

        function mostrarAgregarComponenteListener() {
            $('.boton-mostrar-agregar-componente').click(function(e) {
                e.preventDefault();
                toggleAgregarComponente();
            });
        }

        function toggleAgregarComponente() {
            if($('.selector-componentes').css('display') == 'none') {
                $('.selector-componentes').show();
            } else {
                $('.selector-componentes').hide();
            }

        }

        function agregarComponenteListener() {
            $('.boton-agregar-componente').click(function(e) {
                e.preventDefault();
                agregarComponente(this);
            })
        }

        function agregarComponente(boton) {
            if($(boton).hasClass('componente-modulo-doble-imagen')) {
                agregarModuloDobleImagen();
            }
            if($(boton).hasClass('componente-modulo-texto')) {
                agregarModuloTexto();
            }

            if($(boton).hasClass('componente-modulo-triple-imagen')) {
                agregarModuloTripleImagen();
            }

            if($(boton).hasClass('componente-modulo-header')) {
                agregarModuloHeader();
            }
            toggleAgregarComponente();
        }


        function agregarModuloHeader() {
            contadorModulos++;
            $('#form-componentes-descripcion .componentes-descripcion').append(
                    ' <div class="container-modulo modulo-unitario-texto"> ' +
                    '<p>Modulo de encabezado</p>' +
                    '   <input class="input-editar-pagina titulo" placeholder="Título" name="moduloHeader-texto1-id' + contadorModulos + '">' +
                    '    <textarea class="input-editar-pagina textarea parrafo" placeholder="Párrafo" rows="5" name="moduloHeader-texto2-id' + contadorModulos + '"></textarea> ' +
                    '</div>'
            );
        }



        function agregarModuloDobleImagen() {
            contadorModulos++;
            $('#form-componentes-descripcion .componentes-descripcion').append(
                ' <div class="container-modulo modulo-doble-imagen"> ' +
                '    <div class="wrapper-modulos clearfix"> ' +
                '        <div class="modulo modulo-imagen"> ' +
                         '<div class="wrapper-imagen" id_wrapper="'+ contadorModulos +'">' +
            '<i class="fa fa-photo icono-imagen"></i>' +
            '<div class="wrapper-imagen-fondo"><img class="imagen-fondo"></div>' +
            '<div class="contenedor-input-imagen btn-primario boton-cambiar-imagen">'+
            '<label class="myui-button">'+
            '<span >Seleccionar Imágen</span>'+
            '<input class="file input-file" type="file" name="moduloDobleImagen-img1-id' + contadorModulos + '" onchange="readURL(this);" id_wrapper="' + contadorModulos + '">' +
            '</label>' +
            '</div>' +
            '</div>' +
                '        </div> ' +
                '       <div class="modulo modulo-texto"> ' +
                '           <input class="input-editar-pagina titulo" placeholder="Título" name="moduloDoble-texto1-id' + contadorModulos + '">' +
                '           <textarea class="input-editar-pagina textarea parrafo" placeholder="Párrafo" rows="5" name="moduloDoble-texto2-id' + contadorModulos + '"></textarea> ' +
                '       </div> ' +
                '   </div>' +
                '</div> '
            );
        }

        function agregarModuloTexto() {
            contadorModulos++;
            $('#form-componentes-descripcion .componentes-descripcion').append(
                ' <div class="container-modulo modulo-unitario-texto"> ' +
                '<p>Modulo de texto</p>' +
                '   <input class="input-editar-pagina titulo" placeholder="Título" name="moduloTexto-texto1-id' + contadorModulos + '">' +
                '    <textarea class="input-editar-pagina textarea parrafo" placeholder="Subtítulo" rows="5" name="moduloTexto-texto2-id' + contadorModulos + '"></textarea> ' +
                '</div>'
            );
        }

        function agregarModuloTripleImagen() {
            contadorModulos++;
            $('#form-componentes-descripcion .componentes-descripcion').append(
                '<div class="container-modulo modulo-triple-imagen"> ' +
                '<p>Modulo de tres columnas</p>' +
                '<input class="input-editar-pagina titulo" placeholder="Título de la sección" name="moduloTripleImagen-texto1-id' + contadorModulos + '">' +
                '<div class="wrapper-modulos clearfix">' +
                '' +
                '<div class="modulo">' +
                '<div class="wrapper-imagen" id_wrapper="a'+ contadorModulos +'">' +
                '<i class="fa fa-photo icono-imagen"></i>' +
                        '<div class="wrapper-imagen-fondo"><img class="imagen-fondo"></div>' +
                '<div class="contenedor-input-imagen btn-primario boton-cambiar-imagen">'+
                    '<label class="myui-button">'+
                        '<span >Seleccionar Imágen</span>'+
                        '<input class="file input-file" type="file" name="moduloTripleImagen-img1-id' + contadorModulos + '" onchange="readURL(this);" id_wrapper="a' + contadorModulos + '">' +
                   '</label>' +
                '</div>' +
                '</div>' +
                '<input class="input-editar-pagina titulo" placeholder="Subtitulo" name="moduloTripleImagen-texto2-id' + contadorModulos + '">' +
                '<textarea class="input-editar-pagina textarea parrafo" placeholder="Párrafo" rows="5" name="moduloTripleImagen-texto3-id' + contadorModulos + '"></textarea> ' +
                '</div>' +
                '' +
                '<div class="modulo">' +
                '<div class="wrapper-imagen" id_wrapper="b'+ contadorModulos +'">' +
                '<i class="fa fa-photo icono-imagen"></i>' +
                '<div class="wrapper-imagen-fondo"><img class="imagen-fondo"></div>' +
                '<div class="contenedor-input-imagen btn-primario boton-cambiar-imagen">'+
                '<label class="myui-button">'+
                '<span >Seleccionar Imágen</span>'+
                '<input class="file input-file" type="file" name="moduloTripleImagen-img1-id' + contadorModulos + '" onchange="readURL(this);" id_wrapper="b' + contadorModulos + '">' +
                '</label>' +
                '</div>' +
                '</div>' +
                '<input class="input-editar-pagina titulo" placeholder="Subtitulo" name="moduloTripleImagen-texto4-id' + contadorModulos + '">' +
                '<textarea class="input-editar-pagina textarea parrafo" placeholder="Párrafo" rows="5" name="moduloTripleImagen-texto5-id' + contadorModulos + '"></textarea> ' +
                '</div>' +
                '' +
                '<div class="modulo">' +
                '<div class="wrapper-imagen" id_wrapper="c'+ contadorModulos +'">' +
                '<i class="fa fa-photo icono-imagen"></i>' +
                '<div class="wrapper-imagen-fondo"><img class="imagen-fondo"></div>' +
                '<div class="contenedor-input-imagen btn-primario boton-cambiar-imagen">'+
                '<label class="myui-button">'+
                '<span >Seleccionar Imágen</span>'+
                '<input class="file input-file" type="file" name="moduloTripleImagen-img1-id' + contadorModulos + '" onchange="readURL(this);" id_wrapper="c' + contadorModulos + '">' +
                '</label>' +
                '</div>' +
                '</div>' +
                '<input class="input-editar-pagina titulo" placeholder="Título" name="moduloTripleImagen-texto6-id' + contadorModulos + '">' +
                '<textarea class="input-editar-pagina textarea parrafo" placeholder="Párrafo" rows="5" name="moduloTripleImagen-texto7-id' + contadorModulos + '"></textarea> ' +
                '</div>' +
                '' +
                '</div>' +
                '</div>'
            );
        }

    <?php echo '</script'; ?>
>



</body>
</html><?php }} ?>
<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-12 09:14:49
         compiled from ".\templates\navbar-admin.tpl.html" */ ?>
<?php if ($_valid && !is_callable('content_552a61b94ffcb0_67102956')) {function content_552a61b94ffcb0_67102956($_smarty_tpl) {?><section id="navbar-admin" class="clearfix">
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
<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-12 09:14:49
         compiled from ".\templates\sidebar-admin.tpl.html" */ ?>
<?php if ($_valid && !is_callable('content_552a61b95123a4_27747156')) {function content_552a61b95123a4_27747156($_smarty_tpl) {?>
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
