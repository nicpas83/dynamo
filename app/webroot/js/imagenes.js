$(function () {

    setTimeout(function () {
        $('#flashMsg').fadeOut('slow');
    }, 2000); // <-- time in milliseconds

    //FANCYBOX
    //https://github.com/fancyapps/fancyBox
    $(".fancybox").fancybox({
        openEffect: "none",
        closeEffect: "none"
    });

    $("#upload").fileinput({
        maxFileCount: 10,
        allowedFileTypes: ["image", "video"]
    });


});