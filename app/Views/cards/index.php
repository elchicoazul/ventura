<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ventura</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap">

    <style>
      .custom-card .card-body {
            padding: 19px; /* Ajustar el padding para reducir la altura */
            line-height: 0.1 ; /* Ajustar la altura de línea para alinear el contenido verticalmente */
            width: 250px; /* Ajustar el ancho de la tarjeta */
      }

      .custom-card {
          border-radius: 10px;
          overflow: hidden;
      }

      /* agrandar imagen */ 

      .custom-card .card-img-top {
            transition: transform 0.9s ease;
            position: relative; /* Establecemos el posicionamiento relativo */
            z-index: 1; /* Aseguramos que la imagen esté por encima del contenido */
            max-height: 62.5%;
        }
        .custom-card .card-img-top img {
            object-fit: cover; /* Ajustar el tamaño de la imagen sin deformar */
        }

      .custom-card:hover .card-img-top {
          transform: scale(1.1);
      }
    
      /** espacio entre datos*/
      .custom-card .titulo {
        margin-bottom: 5px; /* Ajustar el espaciado debajo del titulo */
        margin-top: 10px;
      }
      .custom-card .price {
        margin-top: 15px;
      }

      .custom-card .data {
          display: flex;
          align-items: center;
          margin-bottom: 10px; /* Ajustar el espaciado vertical entre los datos */
      }

      .custom-card .data i {
          margin-right: 3px;
      }

      /** Tipo de letra */
      .custom-card .card-title a {
        color: inherit;
        text-decoration: none;
      }
      body {
          font-family: "Roboto", sans-serif; /* fuente a Roboto*/
          background-color: #f1f1f1;
      }
    </style>
  </head>
<body style="background-color: #f1f1f1;">
  
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-3">

              <div class="card mb-4 custom-card"> <!-- Agregamos la clase custom-card -->

                <img class="card-img-top img-fluid" src="https://elperuano.pe/fotografia/thumbnail/2023/04/11/000243202M.jpg" alt="Imagen de la tarjeta">
                <div class="card-body custom-card-body">

                  <div class="titulo">
                    <span class="text-warning mr-2 ">☆☆☆☆☆</span> <br>
                    <h5 class="card-title mb-3 font-weight-bold"><a href="./contenido">Machu Pichu</a></h5>
                  </div>
                  <div class="data">
                      <i class="fas fa-map-marker-alt mr-2"></i>
                      <span>Cusco</span>
                  </div>
                  <div class="data">
                      <i class="fas fas fa-tachometer-alt mr-2"></i>
                      <span>Moderado</span>
                  </div>
                  <div class="d-flex align-items-center price">
                      <h2 class="text-primary font-weight-bold mb-0">$99</h2>
                      <span class="ml-2 mt-2"><del>$199</del></span>
                  </div>
                </div>
              </div>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
