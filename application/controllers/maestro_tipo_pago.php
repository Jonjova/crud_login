<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class maestro_tipo_pago extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('maestro_tipo_pago_model','m_t_p_m',true);
	}

	public function viewTipopago()
	{
		$data['title']='Registro Maestro tipo_pago';
		$data['contenido_principal']='Pago/pagoView';
		$data['datos'] = $this->m_t_p_m->mostrarTipoPago();
		if ($this->uri->segment(3)!='') {
			$idtipopago = $this->uri->segment(3);
			$data['tipopago'] = $this->m_t_p_m->traerTipoPago($idtipopago);
			$tipopago = $this->m_t_p_m->traerTipoPago($idtipopago);
			if (isset($data['tipopago']) || isset($tipopago)) {
				$data['accion'] = 'actualizar';

			}else{
				$data['accion'] = 'insertar';
			}
		}
		$this->load->view('templete_principal',$data);
	}

	public function insertar()
		{

			$maestro_tipo_pago=array(
			'descripcion'=>$this->input->post('descripcion')
			);
			
			$this->m_t_p_m->insertarTipoPago($maestro_tipo_pago);
			$this->viewTipopago();
 		}

 		public function actualizar()
	{
		
			$maestro_tipo_pago=array(
			'descripcion'=>$this->input->post('descripcion')
			);
		$idtipopago=$this->input->post('idtipopago');
		$this->m_t_p_m->actualizarTipoPago($idtipopago,$maestro_tipo_pago);
		//print_r($persona);
		$this->viewTipopago();
	}

	public function eliminar($idtipopago)
	{
		$this->m_t_p_m->EliminarTipoPago($idtipopago);
		//print_r($var);
		$this->viewTipopago();
		
	}

}
?>