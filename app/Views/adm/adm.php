<?= $this->extend('Menu/dashboard')?>
<?= $this->section('contenido')?>
    <h1>Formulario de Tours</h1>
        <form action="<?php echo base_url(); ?>adm/insertar" method="post" enctype="multipart/form-data">
            <label for="nombre">Nombre del Tour:</label>
            <input type="text" id="nombre" name="nombre" required>
            <br>
            
            <label for="url_img">Imagen del Tour:</label>
            <input type="file" id="url_img" name="url_img" accept="image/*" required>
            <br>

            <label for="dias">Duración en días:</label>
            <input type="text" id="dias" name="dias">
            <br>

            <label for="personas">Cantidad de personas:</label>
            <input type="text" id="personas" name="personas">
            <br>

            <label for="ciudad">Ciudad:</label>
            <input type="text" id="ciudad" name="ciudad">
            <br>

            <label for="precio">Precio:</label>
            <input type="text" id="precio" name="precio">
            <br>

            <input type="submit" value="Guardar">
        </form>
<?= $this->endSection()?>