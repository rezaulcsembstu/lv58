$(document).ready(function() {
    var loginFrom = $("#ajaxLoginForm");

    loginFrom.submit(function(e) {
        e.preventDefault();

        let l = Ladda.create(document.querySelector(".ladda-button"));
        l.start().setProgress(0.3);

        $.ajax({
            url: loginFrom.attr("action"),
            type: "POST",
            data: loginFrom.serialize(),
            dataType: "json"
        })
            .done(function(response) {
                l.setProgress(0.9);
                if (response.success) {
                    swal({
                        title: "Welcome back!",
                        text: response.success,
                        timer: 5000,
                        showConfirmButton: false,
                        type: "success"
                    });

                    window.location.replace(response.url);
                } else {
                    swal({
                        title: "Oops!",
                        text: response.errors,
                        timer: 3000,
                        showConfirmButton: false,
                        type: "error"
                    });
                }
            })
            .then(function() {
                l.setProgress(0.6);
            })
            .fail(function() {
                l.setProgress(0.9);
                swal("Fail!", "Cannot login now!", "error");
            })
            .always(function() {
                l.setProgress(0.9);
                l.stop();
            });
    });
});
