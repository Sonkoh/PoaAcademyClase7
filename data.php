<?php
        require 'config.php';

        $query = $conn->prepare("SELECT * FROM `imagenes`");
        $query->execute();
        while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
        ?>
            <div class="card">
                <img src="data:image/jpeg;base64,<?= base64_encode($row['imagen']) ?>">
            </div>
        <?php
        }
        ?>