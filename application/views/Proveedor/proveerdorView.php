<header>Proveedor Maestro</header>

<?php
	if (isset($pro)) {
		$idproveedor = '<p><input type="hidden" name="idproveedor" value="'.$this->uri->segment(3).'"></p>';
		$nombre = $pro->nombre;
		$direccion = $pro->direccion;
		$telefono = $pro->telefono;
		$Actualizar = 'Actualizar Proveedor';
		$agregar = '<a href="<?php echo base_url();?>maestro_proveedor/viewProveedor" class="btn bg-success text-white">Agregar nuevo</a>';
		$accion = 'actualizar';
	}else{
		$agregar = '';
		$idproveedor = '';
		$nombre = '';
		$direccion = '';
		$telefono = '';
		$Registrar = 'Registrar Proveedor';
		$accion = 'insertar';
	}
?>

<div class="grid-container">
		
	<div class="container">  
	 <form id="contact" action="<?php echo base_url();?>maestro_proveedor/<?php echo $accion;?>" method="post">
	 <?php if (isset($Registrar)): ?>
	 	 <h3><?php echo $Registrar ?></h3>
	 	 
	 	<?php else:?>
	 		  <h3><?php echo $Actualizar ?></h3>
	 <?php endif ?>

	  <?php echo $idproveedor?>
	    <fieldset>
	      <input placeholder="Nombre proveedor" type="text" name="nombre"  tabindex="1" required autofocus value="<?=$nombre ?>" >
	    </fieldset>
	    <fieldset>
	      <input  placeholder="Dirección" type="text" name="direccion" tabindex="2" required value="<?=$direccion ?>">
	    </fieldset>
	    <fieldset>
	      <input placeholder="Telefono" type="number" name="telefono" tabindex="3" required value="<?=$telefono ?>">
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
				<th>Direccion</th>
				<th>Telefono</th>
				<th>editar</th>
				<th>eliminar</th>
			</tr>
		</thead>
		<tbody>
		<?php foreach ($datos as $d): ?>	
			<tr>
				<td hidden><?=$d->idproveedor?></td>
				<td><?=$d->nombre?></td>
				<td><?=$d->direccion?></td>
				<td><?=$d->telefono?></td>
				<td class="text-center"><a href="<?php echo base_url();?>maestro_proveedor/viewProveedor/<?php echo $d->idproveedor;?>" ><i class="far fa-edit fa-lg"></i></a></td>
				<td class="text-center"><a href="<?php echo base_url();?>maestro_proveedor/eliminar/<?php echo $d->idproveedor;?>" onclick="return confirm('Estas seguro que quieres eliminar?')" ><i class="fas fa-eraser fa-lg "></i></a></td>
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