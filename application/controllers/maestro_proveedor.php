<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class maestro_proveedor extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('maestro_proveedor_model','mpm',true);
	}

	public function viewProveedor()
	{
		$data['title']='Registro Maestro Proveedor';
		$data['contenido_principal']='Proveedor/proveerdorView';
		$data['datos'] = $this->mpm->mostrarProveedor();
		if ($this->uri->segment(3)!='') {
			$idproveedor = $this->uri->segment(3);
			$data['pro'] = $this->mpm->traerProveedor($idproveedor);
			$pro = $this->mpm->traerProveedor($idproveedor);
			if (isset($data['pro']) || isset($pro)) {
				$data['accion'] = 'actualizar';

			}else{
				$data['accion'] = 'insertar';
			}
		}
		$this->load->view('templete_principal',$data);
	}

	public function insertar()
		{

			$maestro_proveedor=array(
			'nombre'=>$this->input->post('nombre'),
			'direccion'=>$this->input->post('direccion'),
			'telefono'=>$this->input->post('telefono')
			);
			
			$this->mpm->insertarProveedor($maestro_proveedor);
			$this->viewProveedor();
 		}

 		public function actualizar()
	{
		
			$maestro_proveedor=array(
			'nombre'=>$this->input->post('nombre'),
			'direccion'=>$this->input->post('direccion'),
			'telefono'=>$this->input->post('telefono')
			);
		$idproveedor=$this->input->post('idproveedor');
		$this->mpm->actualizarProveedor($idproveedor,$maestro_proveedor);
		//print_r($persona);
		$this->viewProveedor();
	}

	public function eliminar($idproveedor)
	{
		$this->mpm->EliminarProveedor($idproveedor);
		//print_r($var);
		$this->viewProveedor();
		
	}

}
?>