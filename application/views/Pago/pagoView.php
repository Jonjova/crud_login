<header>tipo_pago Maestro</header>

<?php
	if (isset($tipopago)) {
		$idtipopago = '<p><input type="hidden" name="idtipopago" value="'.$this->uri->segment(3).'"></p>';
		$descripcion = $tipopago->descripcion;
		
		$Actualizar = 'Actualizar tipo_pago';
		$agregar = '<a href="<?php echo base_url();?>maestro_tipo_pago/viewTipopago" class="btn bg-success text-white">Agregar nuevo</a>';
		$accion = 'actualizar';
	}else{
		$agregar = '';
		$idtipopago = '';
		$descripcion = '';
		$Registrar = 'Registrar tipo_pago';
		$accion = 'insertar';
	}
?>

<div class="grid-container">
		
	<div class="container">  
	 <form id="contact" action="<?php echo base_url();?>maestro_tipo_pago/<?php echo $accion;?>" method="post">
	 <?php if (isset($Registrar)): ?>
	 	 <h3><?php echo $Registrar ?></h3>
	 	 
	 	<?php else:?>
	 		  <h3><?php echo $Actualizar ?></h3>
	 <?php endif ?>

	  <?php echo $idtipopago?>
	    <fieldset>
	      <input placeholder="descripcion" type="text" name="descripcion"  tabindex="1" required autofocus value="<?=$descripcion ?>" >
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
				<th>descripcion</th>
				<th>editar</th>
				<th>eliminar</th>
			</tr>
		</thead>
		<tbody>
		<?php foreach ($datos as $d): ?>	
			<tr>
				<td hidden><?=$d->idtipopago?></td>
				<td><?=$d->descripcion?></td>
				<td class="text-center"><a href="<?php echo base_url();?>maestro_tipo_pago/viewTipopago/<?php echo $d->idtipopago;?>" ><i class="far fa-edit fa-lg"></i></a></td>
				<td class="text-center"><a href="<?php echo base_url();?>maestro_tipo_pago/eliminar/<?php echo $d->idtipopago;?>" onclick="return confirm('Estas seguro que quieres eliminar?')" ><i class="fas fa-eraser fa-lg "></i></a></td>
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