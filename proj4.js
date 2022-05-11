$(function () {
    $(".forminp").on("focus", function () {
        $(this).parents(".formgroup").addClass("focused");
    });

    $(".forminp").on("blur", function () {
        $(this).parents(".formgroup").removeClass("focused");
    });
});