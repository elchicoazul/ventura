<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contenido</title>
    <!-- Agrega la referencia a Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* Estilos adicionales */
        .custom-border {
            background-color: #f1f1f1;
            border: 2px solid #888;
            border-radius: 15px;
            height: 100%;
        }

        /* Estilos para la línea azul */
        .blue-line {
            border-top: 1px solid blue;
            margin: 20px 0;
        }

        /* Estilos para el título en azul pequeño */
        .blue-title {
            color: blue;
            font-size: 18px;
            font-weight: bold;
            margin-top: 0px;
            margin-bottom: -20px;
        }
        .row{
            margin-top: 20px;
        }

    </style>
</head>

<body>
    <div class="container mt-5">
    
    <h1>Visor de PDF con Google Docs Viewer</h1>
    <iframe src="https://docs.google.com/gview?url=https://drive.google.com/file/d/1vozN8rssg7kuxGZjRItHb_xXGY19CKlK/view?usp=sharing&embedded=true" width="100%" height="600px"></iframe>

        <div class="row">
            <!-- Columna para el título, línea azul, descripción y la imagen -->
            <div class="col-md-9">
                <!-- Imagen -->
                <img src="https://www.aboutespanol.com/thmb/6ZacpH7h1J5AYkzJRaArTtAm7a4=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/llama-peru-58b835f53df78c060e6614dc.jpg" alt="Llama en Perú" class="img-fluid mb-3">

                <!-- Título en azul pequeño -->
                <h6 class="blue-title">Descripcion General</h6>

                <!-- Línea azul -->
                <div class="blue-line"></div>

                <!-- Descripción -->
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Llama en Perú</h5>
                        <p class="card-text">La llama es un animal nativo de los Andes en Sudamérica. Son conocidas por su pelaje suave y esponjoso, y se utilizan como animales de carga y para obtener lana.</p>
                    </div>
                </div>

            </div>

            <!-- Columna para el recuadro -->
            <div class="col-md-3">
                <div class="custom-border">
                    <!-- Contenido del recuadro aquí (opcional) -->
                </div>
            </div>
        </div>

    </div>

    <!-- Agrega la referencia a Bootstrap JS y dependencias de Popper.js y jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>
