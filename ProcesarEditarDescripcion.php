<?php

session_start();

require 'libs/meli.php';

$numeroModulo = 0;

$moduloActual = 'id' . $numeroModulo;

$htmlPaginaDescripcion = '';

$htmlPaginaDescripcion = '
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://fonts.googleapis.com/css?family=Droid+Serif:400,700" rel="stylesheet" type="text/css">
';



if($_POST['tema'] == '0') {
    $htmlPaginaDescripcion = $htmlPaginaDescripcion . '
        <link rel="stylesheet" href="http://bocatto.voirdesigns.com/tema0.css">
        </head>
        <body>
    ';
}
if($_POST['tema'] == '1') {
    $htmlPaginaDescripcion = $htmlPaginaDescripcion . '
        <style>
        /*! normalize.css v3.0.2 | MIT License | git.io/normalize */html{font-family:sans-serif;-ms-text-size-adjust:100%;-webkit-text-size-adjust:100%}body{margin:0}article,aside,details,figcaption,figure,footer,header,hgroup,main,menu,nav,section,summary{display:block}audio,canvas,progress,video{display:inline-block;vertical-align:baseline}audio:not([controls]){display:none;height:0}[hidden],template{display:none}a{background-color:transparent}a:active,a:hover{outline:0}abbr[title]{border-bottom:1px dotted}b,strong{font-weight:bold}dfn{font-style:italic}h1{font-size:2em;margin:0.67em 0}mark{background:#ff0;color:#000}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sup{top:-0.5em}sub{bottom:-0.25em}img{border:0}svg:not(:root){overflow:hidden}figure{margin:1em 40px}hr{-moz-box-sizing:content-box;box-sizing:content-box;height:0}pre{overflow:auto}code,kbd,pre,samp{font-family:monospace, monospace;font-size:1em}button,input,optgroup,select,textarea{color:inherit;font:inherit;margin:0}button{overflow:visible}button,select{text-transform:none}button,html input[type="button"],input[type="reset"],input[type="submit"]{-webkit-appearance:button;cursor:pointer}button[disabled],html input[disabled]{cursor:default}button::-moz-focus-inner,input::-moz-focus-inner{border:0;padding:0}input{line-height:normal}input[type="checkbox"],input[type="radio"]{box-sizing:border-box;padding:0}input[type="number"]::-webkit-inner-spin-button,input[type="number"]::-webkit-outer-spin-button{height:auto}input[type="search"]{-webkit-appearance:textfield;-moz-box-sizing:content-box;-webkit-box-sizing:content-box;box-sizing:content-box}input[type="search"]::-webkit-search-cancel-button,input[type="search"]::-webkit-search-decoration{-webkit-appearance:none}fieldset{border:1px solid #c0c0c0;margin:0 2px;padding:0.35em 0.625em 0.75em}legend{border:0;padding:0}textarea{overflow:auto}optgroup{font-weight:bold}table{border-collapse:collapse;border-spacing:0}td,th{padding:0}*,*:after,*::before{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box}input:focus,select:focus,textarea:focus,button:focus{outline:none}body{width:100%}h1,h2,h3,h4,h5,h6,.h1,.h2,.h3,.h4,.h5,.h6,.texto-destacado,.texto-seccion{font-family:"Droid Serif","Helvetica Neue",Helvetica,sans-serif !important;font-weight:400 !important;color:#634132 !important;letter-spacing:1px;margin:0;-webkit-font-smoothing:antialiased !important;text-rendering:optimizeLegibility;text-align:left}p,.p{font-family:"Source Sans","Helvetica Neue",Helvetica,sans-serif;font-weight:400;color:#7B5247}a{font-family:"Droid Serif","Helvetica Neue",Helvetica,sans-serif;color:#DE834B;text-decoration:none;transition:all 0.2s ease-out}a:hover{color:#eab08c;text-decoration:none}h1,.h1,.titulo-seccion{font-size:30px;line-height:1.5em}h2,.h2{font-size:28px;line-height:1.5em}h3,.h3{font-size:25px;line-height:1.5em}h4,.h4{font-size:22px;line-height:1.5em}h5,.h5{font-size:20px;line-height:1.5em}h6,.h6{font-size:18px;line-height:1.5em}p{font-size:16px;line-height:1.5em}.center{text-align:center}.container{width:100%;padding:70px 30px}.img-cafe{width:150px;height:150px}.row.modulo-doble{background:#FCF7F5}.modulo-doble-texto{padding:50px !important}.modulo-doble-texto h1{margin-bottom:30px}.modulo-texto{margin:0 !important;padding-top:70px;padding-bottom:70px;width:100% !important;background:#FCF7F5}.modulo-texto h1{letter-spacing:3px;text-align:center;font-size:64px;margin-bottom:20px}.modulo-texto p{text-align:center;font-size:18px;color:#8B6B5E}.modulo-triple-imagen .columna-modulo{width:30%;margin-right:3.3%;float:left}.modulo-triple-imagen .wrapper-imagen-modulo{margin-left:auto;margin-right:auto;width:80%;padding-bottom:20px}.modulo-triple-imagen .titulo-modulo{padding-bottom:60px}
        /*# sourceMappingURL=main.css.map */

        </style>
    ';
}


while(hayModulosParaProcesar(++$moduloActual)) {
    crearModulo($moduloActual);
}


function hayModulosParaProcesar($idModulo) {
    return isset($_POST['moduloTexto-texto1-' . $idModulo]) || isset($_POST['moduloDoble-texto1-' . $idModulo]) || isset($_POST['moduloTripleImagen-texto1-' . $idModulo]) || isset($_POST['moduloHeader-texto1-' . $idModulo]);
}

function crearModulo($idModulo) {
    if(isset($_POST['moduloTexto-texto1-' . $idModulo])) {
        crearModuloTexto($idModulo);
    }
    if(isset($_POST['moduloDoble-texto1-' . $idModulo])) {
        crearModuloDoble($idModulo);
    }
    if(isset($_POST['moduloTripleImagen-texto1-' . $idModulo])) {
        crearModuloTripleImagen($idModulo);
    }
    if(isset($_POST['moduloHeader-texto1-' . $idModulo])) {
        crearModuloHeader($idModulo);
    }
}

function crearModuloTexto($idModulo) {
    global $htmlPaginaDescripcion;
    $htmlModulo = '
        <div class="modulo-texto">
            <h1>'. $_POST['moduloTexto-texto1-' . $idModulo ] .'</h1>
            <p>'. $_POST['moduloTexto-texto2-' . $idModulo ] .'</p>
        </div>
    ';
    $htmlPaginaDescripcion = $htmlPaginaDescripcion . $htmlModulo;

}

function crearModuloDoble($idModulo) {
    global $htmlPaginaDescripcion;
    subirImagen('moduloDobleImagen-img1-' . $idModulo);
    $htmlModulo = '
        <div class="row modulo-doble">
            <div class="clearfix">
                <div class="columna">
                    <img class="img-responsive" src="http://www.samsung.com/ar/consumer-images/type/mobile-phones/NXTGEN_Hero_KVimage_1920x1026px_v1B-0-0-0-0.jpg">
                </div>
                <div class="columna modulo-doble-texto">
                    <h1>'. $_POST['moduloDoble-texto1-'. $idModulo ] .'</h1>
                    <p>'.$_POST['moduloDoble-texto2-'. $idModulo ].'</p>
                </div>
            </div>
        </div>
    ';
    $htmlPaginaDescripcion = $htmlPaginaDescripcion . $htmlModulo;
}


function crearModuloTripleImagen($idModulo) {
    global $htmlPaginaDescripcion;
    $htmlModulo = '

        <div class="container modulo-triple-imagen">
            <h1 class="text-center titulo-modulo">'. $_POST['moduloTripleImagen-texto1-'. $idModulo ] .'</h1>
            <div class="row clearfix">
                <div class="columna-modulo">
                    <div class="wrapper-imagen-modulo">
                        <img class="img-responsive img-circle img-modulo" src="http://www.samsung.com/ar/consumer-images/product/mobile-phones/2014/SM-G900HZKPARO/features/SM-G900HZKPARO-618154-0.jpg">
                    </div>
                    <h3 class="text-center">'. $_POST['moduloTripleImagen-texto2-'. $idModulo ] .'</h3>
                    <p class="text-center">'. $_POST['moduloTripleImagen-texto3-'. $idModulo ] .'</p>
                </div>
                <div class="columna-modulo">
                    <div class="wrapper-imagen-modulo">
                        <img class="img-responsive img-circle img-modulo" src="http://www.samsung.com/ar/consumer-images/product/mobile-phones/2014/SM-G900HZKPARO/features/SM-G900HZKPARO-508287-0.jpg">
                    </div>
                    <h3 class="text-center">'. $_POST['moduloTripleImagen-texto4-'. $idModulo ] .'</h3>
                    <p class="text-center">'. $_POST['moduloTripleImagen-texto5-'. $idModulo ] .'</p>
                </div>
                <div class="columna-modulo">
                    <div class="wrapper-imagen-modulo">
                        <img class="img-responsive img-circle img-modulo" src="http://www.samsung.com/ar/consumer-images/product/mobile-phones/2014/SM-G900HZKPARO/features/SM-G900HZKPARO-581326-0.jpg">
                    </div>
                    <h3 class="text-center">'. $_POST['moduloTripleImagen-texto6-'. $idModulo ] .'</h3>
                    <p class="text-center">'. $_POST['moduloTripleImagen-texto7-'. $idModulo ] .'</p>
                </div>
        </div>

</div>

    ';

    $htmlPaginaDescripcion = $htmlPaginaDescripcion . $htmlModulo;
}


function crearModuloHeader($idModulo) {
    global $htmlPaginaDescripcion;
    $htmlModulo = '
        <div class="modulo-header">
            <h1>'. $_POST['moduloHeader-texto1-' . $idModulo ] .'</h1>
            <p>'. $_POST['moduloHeader-texto2-' . $idModulo ] .'</p>
        </div>
    ';
    $htmlPaginaDescripcion = $htmlPaginaDescripcion . $htmlModulo;

}

$contadorImagenes = 0;
function subirImagen($nombre) {
    global $contadorImagenes;
    $fileType = $_FILES[$nombre]['type'];
    if($fileType != 'image/png' &&
        $fileType != 'image/gif' &&
        $fileType != 'image/jpg' &&
        $fileType != 'image/jpeg') {
        return 'Las imágenes deben tener formato JPG, PNG o JPEG';
    }
    $path = $_FILES[$nombre]['name'];
    $ext = pathinfo($path, PATHINFO_EXTENSION);
    $newname = 'sdasdfasdfa';
    $target = 'public/img/descripciones/'.$newname;
    var_dump($_FILES[$nombre]['tmp_name']);
    move_uploaded_file( $_FILES[$nombre]['tmp_name'], $target);
    return $contadorImagenes;
}



$meli = new Meli('4605892858784063', 'JVrRoV30tyxc5KGX7hrSWvv0Q8cZESDJ');

$htmlPaginaDescripcion = $htmlPaginaDescripcion . '</body>';

echo $htmlPaginaDescripcion;

/*
$description = array(
    "text" => $htmlPaginaDescripcion
);
$item = $meli->put("/items/" . $_POST['id_articulo'] . "/description", $description, array('access_token' => $_SESSION['access_token']));
*/
?>