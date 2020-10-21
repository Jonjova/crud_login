<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class maestro_producto_model extends CI_Model
{
	
	public function mostrarProducto()
	{
		
		$this->db->order_by('id_codigo');
		$query = $this->db->get('maestro_producto');
		return $query->result();
	}

	public function traerProducto($id_codigo)
	{
		$this->db->where('id_codigo=',$id_codigo);
		$query = $this->db->get('maestro_producto');
		return $query->row();
	}

	public function insertar_producto($maestro_producto)
	{
		if ($this->db->insert('maestro_producto',$maestro_producto)) {
			return true;	
		}else{
			return false;
		}
	}

	public function actualizar_producto($id_codigo,$maestro_producto)
	{
		$this->db->where('id_codigo=',$id_codigo);
		if($this->db->update('maestro_producto',$maestro_producto))
			return true;
		else
			return false;
	}

	public function EliminarProducto($id_codigo)
	{
		 //$this->db->delete('tb_persona', array('id' => $id));
		$this->db->where('id_codigo',$id_codigo);
		$this->db->delete('maestro_producto');
	}
}
?>