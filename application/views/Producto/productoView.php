<header>Producto Maestro</header>

<?php
	if (isset($pro)) {
		$id_codigo = '<p><input type="hidden" name="id_codigo" value="'.$this->uri->segment(3).'"></p>';
		$nombre = $pro->nombre;
		$precio_base = $pro->precio_base;
		$costo = $pro->costo;
		$disponible_website = $pro->disponible_website;
		$Actualizar = 'Actualizar Producto';
		$agregar = '<a href="<?php echo base_url();?>maestro_producto/viewProducto" class="btn bg-success text-white">Agregar nuevo</a>';
		$accion = 'actualizar';
	}else{
		$agregar = '';
		$id_codigo = '';
		$nombre = '';
		$precio_base = '';
		$costo = '';
		$disponible_website = '';
		$Registrar = 'Registrar Producto';
		$accion = 'insertar';
	}
?>

<div class="grid-container">
		
	<div class="container">  
	 <form id="contact" action="<?php echo base_url();?>maestro_producto/<?php echo $accion;?>" method="post">
	 <?php if (isset($Registrar)): ?>
	 	 <h3><?php echo $Registrar ?></h3>
	 	 
	 	<?php else:?>
	 		  <h3><?php echo $Actualizar ?></h3>
	 <?php endif ?>

	  <?php echo $id_codigo?>
	    <fieldset>
	      <input placeholder="Nombre" type="text" name="nombre"  tabindex="1" required autofocus value="<?=$nombre ?>" >
	    </fieldset>
	    <fieldset>
	      <input  placeholder="Precio por unidad" type="text" name="precio_base" tabindex="2" required value="<?=$precio_base ?>">
	    </fieldset>
	    <fieldset>
	      <input placeholder="Costo" type="text" name="costo" tabindex="3" required value="<?=$costo ?>">
	    </fieldset>
	    <fieldset>
	      <input placeholder="Website" type="text" name="disponible_website" tabindex="3" required value="<?=$disponible_website ?>">
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
				<th>Precio Base</th>
				<th>Costo</th>
				<th>Disponible website</th>
				<th>editar</th>
				<th>eliminar</th>
			</tr>
		</thead>
		<tbody>
		<?php foreach ($datos as $d): ?>	
			<tr>
				<td hidden><?=$d->id_codigo?></td>
				<td><?=$d->nombre?></td>
				<td><?=$d->precio_base?></td>
				<td><?=$d->costo?></td>
				<td><?=$d->disponible_website?></td>
				<td class="text-center"><a href="<?php echo base_url();?>maestro_producto/viewProducto/<?php echo $d->id_codigo;?>" ><i class="far fa-edit fa-lg"></i></a></td>
				<td class="text-center"><a href="<?php echo base_url();?>maestro_producto/eliminar/<?php echo $d->id_codigo;?>" onclick="return confirm('Estas seguro que quieres eliminar?')" ><i class="fas fa-eraser fa-lg "></i></a></td>
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