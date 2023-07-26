<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/dashboard.css">
  <title>Dashboard de Chatbot</title>
</head>
<body>
  <div class="sidebar">
    <div class="sidebar-header">
      ChatGPT
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
      ChatGPT
    </div>
    <div class="chat-body" id="chat-body">
    <?= $this->renderSection('contenido') ?>
  
    </div>
    <div class="chat-footer">
      
    </div>
  </div>
</body>
</html>

