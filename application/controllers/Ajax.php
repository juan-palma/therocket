<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
		
class Ajax extends CI_Controller {
	public function __construct(){
		parent::__construct();
	}
	
	public function index(){
		
	}
	
	
	
		
	public function footerForm(){
		$json = array();
		$json['status'] = 'ok';
		$json['valores'] = array();
		$json['errores']  = array();
		
		$encontrar = array("\r\n", "\n", "\r");
		$remplazar = '';
		
		//Consulta - GENERAL
		$this->basic_modal->clean();
		$this->basic_modal->tabla = 'contenido';
		$this->basic_modal->campos = 'contenido_info';
		$this->basic_modal->condicion = array( "contenido_pagina" => 'general' );
		
		$respuesta = $this->basic_modal->genericSelect('sistema');
		$consulta = (is_array($respuesta) && count($respuesta) > 0) ? $respuesta[0] : '';
		$clean = (isset($consulta) && property_exists($consulta, 'contenido_info')) ? str_replace($encontrar, $remplazar, $consulta->contenido_info) : '';
		$cleanObjecDB = ( is_object(json_decode($clean)) ) ? json_decode($clean) : new stdClass();
		
		
		$this->load->helper('mail');
		require(VIEWPATH.'admin/customers_parametros.php');
		
		$idaMail_data['destino_mail'][] = $cleanObjecDB->correo;
		$idaMail_data['origen_mail'] = $cleanObjecDB->correo_form;
		$idaMail_data['reply_mail'] = $cleanObjecDB->correo;
		$idaMail_data['username'] = $cleanObjecDB->correo_form;
		$idaMail_data['password'] = $cleanObjecDB->correo_pass;
				
		
		$template = FCPATH.'assets/public/template/contactoForm.php';
		$info = array();
		$info['nombre'] = $_POST['nombre'];
		$info['mail'] = $_POST['correo'];
		$info['mensaje'] = $_POST['comentarios'];
		$info['logo'] = base_url('assets/public/img/logo.svg');
		$info['empresa'] = 'The Rocket TV';
		$info['sitio'] = base_url();
		
		
		if($_POST['nombre'] !== '' && $_POST['correo']){
			$respMail = ida_sendMail($template, $info, $idaMail_data);
			if($respMail){
				$json['valores'][] = 'Se envió el correo de manera correcta.';
			} else{
				$json['status'] = 'error';
				$json['errores'][]  = 'Error interno al enviar el correo';
			}

		} else{
			$json['status'] = 'error';
			$json['errores'][]  = 'Es necesario que todos los campos tengan un valor.';
		}
		
		
		echo( json_encode($json) );
	}
	
	
	
	
					
		
	
	public function clean(){
		unset(
	        $_SESSION['formData']
		);
		
		redirect(base_url('inicio'));
	}

	
}



