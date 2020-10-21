<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class maestro_producto extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('maestro_producto_model','mpm',true);
	}

	public function index()
	{
		$data['title']='Registro Maestro producto';
		$data['contenido_principal']='inicio';
		$this->load->view('templete_principal',$data);
	}

	public function viewProducto()
	{
		$data['title']='Registro Maestro producto';
		$data['contenido_principal']='Producto/productoView';
		$data['datos'] = $this->mpm->mostrarProducto();
		if ($this->uri->segment(3)!='') {
			$id_codigo = $this->uri->segment(3);
			$data['pro'] = $this->mpm->traerProducto($id_codigo);
			$pro = $this->mpm->traerProducto($id_codigo);
			if (isset($data['pro']) || isset($pro)) {
				/*$data['idmascota'] = '<p><input type="hidden" name="idmascota" value="'.$this->uri->segment(3).'"></p>';*/
				$data['accion'] = 'actualizar';

			}else{
				$data['accion'] = 'insertar';
			}
		}
		$this->load->view('templete_principal',$data);
	}

	public function insertar()
		{

			$maestro_producto=array(
			'nombre'=>$this->input->post('nombre'),
			'precio_base'=>$this->input->post('precio_base'),
			'costo'=>$this->input->post('costo'),
			'disponible_website'=>$this->input->post('disponible_website')
			);
			
			$this->mpm->insertar_producto($maestro_producto);
			$this->viewProducto();
 		}

 		public function actualizar()
	{
		
		$maestro_producto=array(
			'nombre'=>$this->input->post('nombre'),
			'precio_base'=>$this->input->post('precio_base'),
			'costo'=>$this->input->post('costo'),
			'disponible_website'=>$this->input->post('disponible_website')
			);
		$id_codigo=$this->input->post('id_codigo');
		$this->mpm->actualizar_producto($id_codigo,$maestro_producto);
		//print_r($persona);
		$this->viewProducto();
	}

	public function eliminar($id_codigo)
	{
		$this->mpm->EliminarProducto($id_codigo);
		//print_r($var);
		$this->viewProducto();
		
	}

}
?>