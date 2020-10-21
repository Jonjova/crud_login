<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class maestro_tipo_pago_model extends CI_Model
{
    public function mostrarTipoPago()
    {
        $this->db->order_by('idtipopago');
        $query = $this->db->get('maestro_tipo_pago');
        return $query->result();
    }

    public function traerTipoPago($idtipopago)
    {
        $this->db->where('idtipopago=',$idtipopago);
        $query=$this->db->get('maestro_tipo_pago');
        return $query->row();
    }

    public function insertarTipoPago($maestro_tipo_pago)
    {
        if ($this->db->insert('maestro_tipo_pago',$maestro_tipo_pago)) {
            # code...
            return true;

        } else {
            # code...
            return false;
        }
        
    }

    public function actualizarTipoPago($idtipopago,$maestro_tipo_pago)
    {
        $this->db->where('idtipopago=',$idtipopago);
        if ($this->db->update("maestro_tipo_pago",$maestro_tipo_pago)) {
            # code...
            return true;
        } else {
            # code...
            return false;
        }
        

    }

    public function eliminarTipoPago($idtipopago)
    {
        $this->db->where('idtipopago=',$idtipopago);
        $this->db->delete('maestro_tipo_pago');
    }
}
?>