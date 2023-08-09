<?= $this->extend('Menu/dashboard')?>
<?= $this->section('contenido')?>
<form action="<?php echo base_url(); ?>adm/insertar_detalle_tours" method="post" enctype="multipart/form-data">
    <label for="id_tours">ID del Tour:</label>
    <input type="text" id="id_tours" name="id_tours" required>
    <br>

    <label for="descripcion">Descripción:</label>
    <textarea id="ckeditor" class="ckeditor" name="descripcion" ></textarea>
    <br>

    <label for="itinerario">Itinerario:</label>
    <textarea id="ckeditor" class="ckeditor" name="itinerario"></textarea>
    <br>

    <label for="lista_viaje">Lista de Viaje:</label>
    <textarea id="ckeditor" class="ckeditor" name="lista_viaje"></textarea>
    <br>

    <label for="img_portada">Imagen de Portada:</label>
    <input type="file" id="img_portada" name="img_portada" accept="image/*" required>
    <br>

    <label for="tipo_viaje">Tipo de Viaje:</label>
    <input type="text" id="tipo_viaje" name="tipo_viaje">
    <br>

    <label for="altitud_max">Altitud Máxima:</label>
    <input type="text" id="altitud_max" name="altitud_max">
    <br>

    <label for="dificultad">Dificultad:</label>
    <input type="text" id="dificultad" name="dificultad">
    <br>

    <input type="submit" value="Guardar">
</form>

<?= $this->endSection()?>