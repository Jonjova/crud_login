<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class maestro_proveedor_model extends CI_Model
{
  public function mostarProveedor()
  {
      $this->db->order_by('idproveedor');
      $query = $this->db->get('maestro_proveedor');
      return $query->result();
  }

  public function traerProveedor($idproveedor)
  {
    $this->db->where('idproveedor=',$idproveedor);
    $query = $this->db->get('maestro_proveedor');
    return $query->row();
  }

  public function insertarProovedor($maestro_proveedor)
  {
    if ($this->db->insert('maestro_proveedor',$maestro_proveedor)) {
        # code...
        return true;
    }else {
        
        return false;
    }  
  }

  public function actualizarProveedor($idproveedor,$maestro_proveedor)
  {
        $this->db->where('idproveedor=',$idproveedor);
        if ($this->db->update('maestro_proveedor',$maestro_proveedor)) {
            # code...
            return true;
        } else {
            # code...
            return false;
        }
        
  }

  public function eliminarProveedor($idproveedor)
  {
      $this->db->where('idproveedor',$idproveedor);
      $this->db->delete('maestro_proveedor');
  }
}
?>