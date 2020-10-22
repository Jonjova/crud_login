<header>Tienda Maestro</header>

<?php
	if (isset($tienda)) {
		$idtienda = '<p><input type="hidden" name="idtienda" value="'.$this->uri->segment(3).'"></p>';
		$nombre = $tienda->nombre;
		$ubicacion = $tienda->ubicacion;
		$bodega = $tienda->bodega;
		$Actualizar = 'Actualizar Tienda';
		$agregar = '<a href="<?php echo base_url();?>maestro_Tienda/viewTienda" class="btn bg-success text-white">Agregar nuevo</a>';
		$accion = 'actualizar';
	}else{
		$agregar = '';
		$idtienda = '';
		$nombre = '';
		$ubicacion = '';
		$bodega = '';
		$Registrar = 'Registrar Tienda';
		$accion = 'insertar';
	}
?>

<div class="grid-container">
		
	<div class="container">  
	 <form id="contact" action="<?php echo base_url();?>maestro_Tienda/<?php echo $accion;?>" method="post">
	 <?php if (isset($Registrar)): ?>
	 	 <h3><?php echo $Registrar ?></h3>
	 	 
	 	<?php else:?>
	 		  <h3><?php echo $Actualizar ?></h3>
	 <?php endif ?>

	  <?php echo $idtienda?>
	    <fieldset>
	      <input placeholder="Nombre Tienda" type="text" name="nombre"  tabindex="1" required autofocus value="<?=$nombre ?>" >
	    </fieldset>
	    <fieldset>
	      <input  placeholder="ubicacion" type="text" name="ubicacion" tabindex="2" required value="<?=$ubicacion ?>">
	    </fieldset>
	    <fieldset>
	      <input placeholder="bodega" type="number" name="bodega" tabindex="3" required value="<?=$bodega ?>">
	    </fieldset>
	    <fieldset>
	      <button name="submit" type="submit" class="btn bg-success" id="contact-submit" data-submit="...Sending">Guardar</button>
	    </fieldset>
	  </form>
	</div>
<section id="parrafo"><br>
	<table class="table table-hover">
		<thead class="thead-dark">
			<tr>
				<th hidden>Id codigo</th>
				<th>Nombre</th>
				<th>ubicacion</th>
				<th>bodega</th>
				<th>editar</th>
				<th>eliminar</th>
			</tr>
		</thead>
		<tbody>
		<?php foreach ($datos as $d): ?>	
			<tr>
				<td hidden><?=$d->idtienda?></td>
				<td><?=$d->nombre?></td>
				<td><?=$d->ubicacion?></td>
				<td><?=$d->bodega?></td>
				<td class="text-center"><a href="<?php echo base_url();?>maestro_Tienda/viewTienda/<?php echo $d->idtienda;?>" ><i class="far fa-edit fa-lg"></i></a></td>
				<td class="text-center"><a href="<?php echo base_url();?>maestro_Tienda/eliminar/<?php echo $d->idtienda;?>" onclick="return confirm('Estas seguro que quieres eliminar?')" ><i class="fas fa-eraser fa-lg "></i></a></td>
			</tr>
			<?php endforeach ?>
		</tbody>
	</table>
	<br>
	<?php echo $agregar?>
</section>
</div>

</body>
<script type="text/javascript">
	function function_name(argument) {
			
	}
</script>