<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class maestro_tienda_model extends CI_Model
{

    public function mostrarTienda()
  {
      $this->db->order_by('idtienda');
      $query = $this->db->get('maestro_tienda');
      return $query->result();
  }

  public function traerTienda($idtienda)
  {
    $this->db->where('idtienda=',$idtienda);
    $query = $this->db->get('maestro_tienda');
    return $query->row();
  }

  public function insertarTienda($maestro_tienda)
  {
    if ($this->db->insert('maestro_tienda',$maestro_tienda)) {
        # code...
        return true;
    }else {
        
        return false;
    }  
  }

  public function actualizarTienda($idtienda,$maestro_tienda)
  {
        $this->db->where('idtienda=',$idtienda);
        if ($this->db->update('maestro_tienda',$maestro_tienda)) {
            # code...
            return true;
        } else {
            # code...
            return false;
        }
        
  }

  public function eliminarTienda($idtienda)
  {
      $this->db->where('idtienda',$idtienda);
      $this->db->delete('maestro_tienda');
  }
}
?>