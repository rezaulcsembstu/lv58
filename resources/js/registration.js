$(document).ready(function() {
    let ajaxRegistrationForm = $("#ajaxRegistrationForm");

    ajaxRegistrationForm.submit(function(e) {
        e.preventDefault();

        let l = Ladda.create(document.querySelector(".ladda-button"));
        l.start().setProgress(0.3);

        $.ajax({
            url: ajaxRegistrationForm.attr("action"),
            data: ajaxRegistrationForm.serialize(),
            type: "POST",
            dataType: "json"
        })
            .done(function(response) {
                l.setProgress(0.9);
                if (response.success) {
                    swal({
                        title: "Hi" + response.name,
                        text: response.success,
                        timer: 3000,
                        button: false,
                        icon: "success"
                    });
                    window.location.replace(response.url);
                } else {
                    swal({
                        title: "Oops!",
                        text: response.errors.join("|"),
                        timer: 3000,
                        button: false,
                        icon: "error"
                    });
                }
            })
            .then(function() {
                l.setProgress(0.6);
            })
            .fail(function() {
                l.setProgress(0.9);
                swal("Fail!", "Cannot register now!", "error");
            })
            .always(function() {
                l.setProgress(0.9);
                l.stop();
            });
    });
});
