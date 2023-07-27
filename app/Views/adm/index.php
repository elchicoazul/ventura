<?= $this->extend('Menu/dashboard')?>
<?= $this->section('contenido')?>

<div class="bg-white" style="padding: 30px; margin-bottom: 30px;">
    <div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
						<h2>Lista</b></h2>
					</div>
					<div class="col-sm-6">
						<a href="" class="btn btn-success" data-toggle="modal"><span>Add</span></a>
						<a href="" class="btn btn-danger" data-toggle="modal"><span>Delete</span></a>						
					</div>
                </div>
            </div>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nombre</th>
						<th>Precio</th>
                        <th>Acción</th>
                    </tr>
                </thead>

                <?php foreach ($datos as $key): ?>
                <tbody>			
					<tr>
						<td><?php echo $key->tours_id?></td>
                        <td><?php echo $key->nombre?></td>
                        <td><?php echo $key->precio?></td>
                        <td>
                            <a href="" class="edit" data-toggle="modal">editar</a>
                            <a href="" class="delete" data-toggle="modal">detalle</a>
                        </td>
                    </tr> 
                </tbody>

                <?php endforeach; ?>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection()?>