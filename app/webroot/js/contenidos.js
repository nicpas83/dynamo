$(function () {

    $("#contenidos").DataTable({
        'responsive': true,
        'ordering': false,
        'paging': false
    });
    $("#ContenidoSeccion").change(function () {
        var seccion = $(this).find("option:selected").text();
        actualizarComboAnidado('descripcion', seccion);
    }).change();

    $("#ContenidoDescripcion").change(function () {
        
        var seccion = $("#ContenidoSeccion").find("option:selected").text();
        var descripcion = $("#ContenidoDescripcion").find("option:selected").text();
        obtenerContenido(seccion, descripcion, 'ContenidoValorActual');

    });


});


function actualizarComboAnidado(actualizarCombo, relacionadoA) {

    $.get(baseUrl + 'contenidos/actualizarComboAnidado/' + actualizarCombo + '/' + relacionadoA, function (data) {
        $('#ContenidoDescripcion').empty();
        var jdata = $.parseJSON(data);
        $.each(jdata, function (key, value) {
            $('#ContenidoDescripcion').append($("<option/>").text(value));
        });
        
        var seccion = $("#ContenidoSeccion").find("option:selected").text();
        var descripcion = $("#ContenidoDescripcion").find("option:selected").text();
        obtenerContenido(seccion, descripcion, 'ContenidoValorActual');
    });
}

function obtenerContenido(seccion, descripcion, divId) {

    var postData = {'seccion': seccion, 'descripcion': descripcion};
    $.post(baseUrl + 'contenidos/obtenerContenido/', postData, function (data) {
        var jdata = $.parseJSON(data);
        //console.log(jdata);
        $('#'+ divId +'').val(jdata.contenido);
        $('#ContenidoOrden').val(jdata.orden);
        $('#ContenidoTmpId').val(jdata.id);
    });
}
    