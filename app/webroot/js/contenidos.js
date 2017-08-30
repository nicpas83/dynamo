$(function () {

    setTimeout(function () {
        $('#flashMsg').fadeOut('slow');
    }, 2000); // <-- time in milliseconds

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
    
    
    $("#input-id").fileinput();


}); 