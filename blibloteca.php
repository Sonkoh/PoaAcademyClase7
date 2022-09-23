<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<body>
    <style>
        .container {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(400px, 1fr));
            gap: 2rem;
        }

        .container .card {
            padding: 1rem;
        }
    </style>
    <nav class="navbar navbar-expand-lg bg-light" style="margin-bottom: 2rem;">
        <div class="container-lg">
            <a class="navbar-brand" href="#">Google Drive</a>
            <div class="btn btn-primary" data-bs-toggle="modal" href="#exampleModalToggle" role="button">Subir Imagen</div>
        </div>
    </nav>
    <div class="container" id="bookshelf">
        <?php
        require 'data.php';
        ?>
    </div>
    <div class="modal fade" tabindex="-1" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body d-flex justify-content-between">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <form action="post" enctype="multipart/form-data" id="upload">
                        <input type="file" id="fileName" class="d-none" name="fileName">
                        <label for="fileName" class="btn btn-primary">Subir Imagen</label>
                        <input type="submit" value="Enviar" class="btn btn-secondary" data-bs-dismiss="modal">
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- <div class="modal fade" tabindex="-1" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Modal body text goes here.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div> -->
    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <script src="main.js"></script>
</body>

</html>