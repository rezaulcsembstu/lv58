$(document).ready(function() {
    
    // Get the Cropper.js instance after initialized
    //let cropper = $image.data("cropper");
    var $image;;

    let toCropper = function() {
        let objectFileReader = new FileReader();

        objectFileReader.readAsDataURL(
            document.getElementById("uploadedImage").files[0]
        );

        objectFileReader.onload = function(e) {
            $("#cropImage").removeClass("d-none");
            $("#image").cropper("destroy");
            document.getElementById("image").src = e.target.result;
            $image = $("#image");
            $image.cropper();
        };
    }

    $("#uploadedImage").on("change", toCropper);

    let getCroppedCanvas = {};
    $("#cropImage").click(function() {
        getCroppedCanvas = $image.cropper("getCroppedCanvas");
        $("#getCroppedCanvas").html(getCroppedCanvas);
        $("#croppedImage").val(getCroppedCanvas.toDataURL());
    });
});
