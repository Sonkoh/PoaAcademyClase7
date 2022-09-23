<?php
if (count($_FILES) > 0) {
    if (is_uploaded_file($_FILES['file']['tmp_name'])) {
        require 'config.php';
        $data = file_get_contents($_FILES['file']['tmp_name']);
        $query = $conn->prepare("INSERT INTO `imagenes` (`imagen`) VALUES (:img)");
        $query->bindParam(":img", $data);
        $query->execute();
    }
}

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <form method="post" enctype="multipart/form-data">
        <input type="file" name="fileName">
        <br>
        <input type="submit" value="Subir Imagen">
    </form>
    <script>
        if (window.history.replaceState) {
            window.history.replaceState(null, null, window.location.href);
        }
    </script>
</body>

</html>