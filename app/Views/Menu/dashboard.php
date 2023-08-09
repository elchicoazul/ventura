<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/dashboard.css">
  <title>Dashboard de Chatbot</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?php echo base_url(); ?>/assets/css/style.css" rel="stylesheet">
</head>

<body>
  <div class="sidebar">
    <div class="sidebar-header ">
      <h4>Ventura Admin</h4>
    </div>
    <div class="sidebar-body">
        <ul class="sidebar-menu">
        <li><a href="#">Tours</a></li>
        <li><a href="#">Tours Detail</a></li>
      </ul>
    </div>
  </div>

  <div class="chat-window">
    <div class="chat-header">
      <h4>lista ventura</h4>
    </div>
    <div class="chat-body" id="chat-body">
      
    <?= $this->renderSection('contenido') ?>
  
    </div>
    <div class="chat-footer">
      
    </div>
  </div>
</body>
<script src="<?php echo base_url(); ?>/assets/ckeditor/ckeditor.js"></script>
</html>

