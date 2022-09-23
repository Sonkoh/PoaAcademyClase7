$("#upload").submit(function (e) { 
    e.preventDefault();
    var fd = new FormData();
    var files = $('#fileName')[0].files;
    if (files.length > 0) {
        fd.append('file', files[0]);
        $.ajax({
            type: "post",
            url: "upload.php",
            data: fd,
            processData: false,
            contentType: false,
            success: function () {
                $.ajax({
                    type: "post",
                    url: "data.php",
                    success: function (response) {
                        $('#bookshelf').html(response);
                    }
                });
            }
        });
    } else {
        alert("Selecciona un archivo");
    }
});