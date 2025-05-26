$(document).ready(function() {
    $('#name').on('input', function() {
        var value = $(this).val();
        if(value){
            $('.invalid-feedback').remove();
            $(this).removeClass('is-invalid');
            $("#updateUsreName").text(value);
        }else{
            $(this).addClass('is-invalid');
            $("#updateUsreName").text("").append("<span style='color:red;'>Name Should Not Be Empty</span>");
        }
    });

    $('#email').on('input', function() {
        var value = $(this).val();
        if(value){
            $('.invalid-feedback').remove();
            $(this).removeClass('is-invalid');
            $("#updateEmail").text(value);
        }else{
            $(this).addClass('is-invalid');
            $("#updateEmail").text("").append("<span style='color:red;'>Email Should Not Be Empty</span>");
        }
    });
});