$(document).ready(function() {
    $.ajaxSetup({
        headers: { "X-CSRF-Token": $("meta[name=csrf-token]").attr("content") }
    });

    let url = "/storeImages";

    $("#fileupload")
        .fileupload({
            url: url,
            dataType: "json",
            maxFileSize: 1000000,
            previewMaxWidth: 333,
            previewMaxHeight: 333
        })
        .bind("fileuploadadd", function(e, data) {
            $("#progress").fadeIn();
            data.context = $('<div class="fileinfo"><div/>').appendTo("#files");
            $.each(data.files, function(index, file) {
                let node = $("<p/>").append($("<span/>").text(file.name));
                node.appendTo(data.context);
            });
        })
        .bind("fileuploadprocessalways", function(e, data) {
            let index = data.index,
                file = data.files[index],
                node = $(data.context.children()[index]);
            if (file.preview) {
                node.prepend("<br>").prepend(file.preview);
            }
        })
        .bind("fileuploadprogressall", function(e, data) {
            let progress = parseInt((data.loaded / data.total) * 100, 10);
            $("#progress .progress-bar").css("width", progress + "%");
        })
        .bind("fileuploaddone", function(e, data) {
            $("#files").empty();
            $.each(data.result.files, function(index, file) {
                if (file.url) {
                    let currentTime = new Date().getTime();
                    $("#files").append(
                        "<div id='testimage'><img class='img-fluid img-thumbnail' src='" +
                            file.url +
                            "?" +
                            currentTime +
                            "' /></div>"
                    );

                    // reset the progress bar
                    $("#progress").fadeOut();
                    setTimeout(function() {
                        $("#progress .progress-bar").css("width", 0);
                    }, 500);
                } else if (file.error) {
                    let error = $('<span class="text-danger"/>').text(
                        file.error
                    );
                    $(data.context.children()[index])
                        .append("<br>")
                        .append(error);
                }
            });
        })
        .bind("fileuploadfail", function(e, data) {
            $.each(data.files, function(index) {
                let error = $('<span class="text-danger"/>').text(
                    "File upload failed."
                );
                $(data.context.children()[index])
                    .append("<br>")
                    .append(error);
            });
        });
});
