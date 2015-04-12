$(document).ready(function () {
    loadElements();
});

function loadElements() {
    $.ajax({
        url: 'retrieveElements.php',
        data: "",
        type: "POST",
        dataType: "json",
    }).done(function (data) {
        if (data.result == "") {
            var ul = $("#listElements");
            ul.empty();
            for (var i = 0; i < data.elements.length; i++) {
                var li = $("<li />");
                var nombre = "<div id='nombre'><h4>" + data.elements[i].nombre + "</h4></div>";
                var img = "";
                if (data.elements[i].imagen != null) {
                    img = data.elements[i].imagen.url;
                }
                var imagen = "<img id='img' src='" + img + "' />";
                var boton = "<input type='button' id='" + data.elements[i].id + "' class='botonCambios btn-primario' value='Modificar'>";
                var content = "<div class='container'>" + nombre + imagen + boton + '</div>';
                li.append(content);
                ul.append(li);
            }
            $(".botonCambios").click(function () {
                var idArt = $(this).attr("id");
                window.location = "EditarArticulo.php?id_art=" + idArt;
            })
        }
    }).fail(function (error) {
        alert("ha ocurrido un error en el servidor");
    });
}

function refresh() {

    
}