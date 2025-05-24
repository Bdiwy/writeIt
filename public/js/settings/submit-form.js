$(document).ready(function() {
let createForm   = $("form.updateForm");
let submitButton = $("#submitButton"); 
createForm.on("submit", function (e) {
        e.preventDefault();
        $.ajax({
            method: "POST",
            url: "api/update-settings",
            data: getRequestData(),
            headers: {
            'Content-Type': 'application/json',
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
            },
            error: function (response) {
            
            },
        });
    });

function getRequestData() {
        return {
            username: createForm.find('[name="username"]').val(),
            email: createForm.find('[name="email"]').val(),
        };
    }
});
