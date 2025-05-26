$(document).ready(function() {
let createForm   = $(".updateForm");
let submitButton = $("#submitButton"); 
createForm.on("submit", function (e) {
        e.preventDefault();
        let formData = new FormData(this);
        $.ajax({
            method: "POST",
            url: "api/update-settings",
            data: formData,
            processData: false, 
            contentType: false, 
            headers: {
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
            },
            beforeSend: function () {
                submitButton.prop("disabled", true);
                submitButton.html(
                    '<i class="fa fa-spin fa-spinner"></i> Loading'
                );
            },
            complete: function () {
                submitButton.prop("disabled", false);
                submitButton.html("Submit");
            },
            success: function (response) {
                $('.invalid-feedback').remove();
                $("#email").removeClass('is-invalid');
                $("#name").removeClass('is-invalid');
                showModalWithMessage("#successModal","#SuccessMessageElementById","Profile Updated successfully!");
            },
            error: function (response) {
                if(response.responseJSON.errors.email){
                    $(".emailMessageError").text(response.responseJSON.errors.email[0]);
                    $("#email").addClass('is-invalid');
                }
                if(response.responseJSON.errors.name){
                    $(".nameMessageError").text(response.responseJSON.errors.name[0]);
                    $("#name").addClass('is-invalid');
                }
                showModalWithMessage("#faildModal","#FaildMessageElementById","Something went wrong.");
            },
        });
    });

function showModalWithMessage(ModalId , MessageElementById , Message){
        $(MessageElementById).text(Message);
        $(ModalId).modal('show');
    }
});
