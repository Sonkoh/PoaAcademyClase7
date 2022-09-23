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