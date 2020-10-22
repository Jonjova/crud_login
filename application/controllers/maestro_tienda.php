<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class maestro_tienda extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('maestro_tienda_model','m_t_m',true);
	}

	public function viewTienda()
	{
		$data['title']='Registro Maestro tienda';
		$data['contenido_principal']='Tienda/tiendaView';
		$data['datos'] = $this->m_t_m->mostrarTienda();
		if ($this->uri->segment(3)!='') {
			$idtienda = $this->uri->segment(3);
			$data['tienda'] = $this->m_t_m->traerTienda($idtienda);
			$tienda = $this->m_t_m->traerTienda($idtienda);
			if (isset($data['tienda']) || isset($tienda)) {
				$data['accion'] = 'actualizar';

			}else{
				$data['accion'] = 'insertar';
			}
		}
		$this->load->view('templete_principal',$data);
	}

	public function insertar()
		{

			$maestro_tienda=array(
			'nombre'=>$this->input->post('nombre'),
			'ubicacion'=>$this->input->post('ubicacion'),
			'bodega'=>$this->input->post('bodega')
			);
			
			$this->m_t_m->inserTartienda($maestro_tienda);
			$this->viewTienda();
 		}

 		public function actualizar()
	{
		
			$maestro_tienda=array(
			'nombre'=>$this->input->post('nombre'),
			'ubicacion'=>$this->input->post('ubicacion'),
			'bodega'=>$this->input->post('bodega')
			);
		$idtienda=$this->input->post('idtienda');
		$this->m_t_m->actualizarTienda($idtienda,$maestro_tienda);
		//print_r($persona);
		$this->viewTienda();
	}

	public function eliminar($idtienda)
	{
		$this->m_t_m->EliminarTienda($idtienda);
		//print_r($var);
		$this->viewTienda();
		
	}

}
?>