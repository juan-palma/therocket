<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
		
class Inicio extends CI_Controller {
	public function __construct(){
		parent::__construct();
	}
		
	public function index(){
		
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
		$data['generalDB'] = $cleanObjecDB;
		
		
		
		//Consulta - HOME-INICIO
		$this->basic_modal->clean();
		$this->basic_modal->tabla = 'contenido';
		$this->basic_modal->campos = 'contenido_info';
		$this->basic_modal->condicion = array( "contenido_pagina" => 'home', "contenido_seccion" => 'inicio' );
		
		$isInicio = $this->basic_modal->genericSelect('sistema');
		$consulta = (is_array($isInicio) && count($isInicio) > 0) ? $isInicio[0] : '';
		$nuevoValor = (isset($consulta) && property_exists($consulta, 'contenido_info')) ? str_replace($encontrar, $remplazar, $consulta->contenido_info) : '';
		$valoresDB = ( is_object(json_decode($nuevoValor)) ) ? json_decode($nuevoValor) : new stdClass();
		$data['inicioDB'] = $valoresDB;
		
		
		
/*
		//Consulta - HOME-QUINES SOMOS
		$this->basic_modal->clean();
		$this->basic_modal->tabla = 'contenido';
		$this->basic_modal->campos = 'contenido_info';
		$this->basic_modal->condicion = array( "contenido_pagina" => 'home', "contenido_seccion" => 'somos' );
		
		$isSomos = $this->basic_modal->genericSelect('sistema');
		$consulta = (is_array($isSomos) && count($isSomos) > 0) ? $isSomos[0] : '';
		$nuevoValor = (isset($consulta) && property_exists($consulta, 'contenido_info')) ? str_replace($encontrar, $remplazar, $consulta->contenido_info) : '';
		$valoresDB = ( is_object(json_decode($nuevoValor)) ) ? json_decode($nuevoValor) : new stdClass();
		$data['somosDB'] = $valoresDB;
*/
		
		
		
/*
		//Consulta - HOME-SERVICIOS
		$this->basic_modal->clean();
		$this->basic_modal->tabla = 'contenido';
		$this->basic_modal->campos = 'contenido_info';
		$this->basic_modal->condicion = array( "contenido_pagina" => 'home', "contenido_seccion" => 'servicios' );
		
		$isServicio = $this->basic_modal->genericSelect('sistema');
		$consulta = (is_array($isServicio) && count($isServicio) > 0) ? $isServicio[0] : '';
		$nuevoValor = (isset($consulta) && property_exists($consulta, 'contenido_info')) ? str_replace($encontrar, $remplazar, $consulta->contenido_info) : '';
		$valoresDB = ( is_object(json_decode($nuevoValor)) ) ? json_decode($nuevoValor) : new stdClass();
		$data['serviciosDB'] = $valoresDB;
*/
		
		
		
		
/*
		//Consulta - HOME-PORTAFOLIOS
		$this->basic_modal->clean();
		$this->basic_modal->tabla = 'contenido';
		$this->basic_modal->campos = 'contenido_info';
		$this->basic_modal->condicion = array( "contenido_pagina" => 'home', "contenido_seccion" => 'portafolio' );
		
		$isPortafolio = $this->basic_modal->genericSelect('sistema');
		$consulta = (is_array($isPortafolio) && count($isPortafolio) > 0) ? $isPortafolio[0] : '';
		$nuevoValor = (isset($consulta) && property_exists($consulta, 'contenido_info')) ? str_replace($encontrar, $remplazar, $consulta->contenido_info) : '';
		$valoresDB = ( is_object(json_decode($nuevoValor)) ) ? json_decode($nuevoValor) : new stdClass();
		$data['portafolioDB'] = $valoresDB;
*/
		
		
		
		
/*
		//Consulta - HOME-CLIENTES
		$this->basic_modal->clean();
		$this->basic_modal->tabla = 'contenido';
		$this->basic_modal->campos = 'contenido_info';
		$this->basic_modal->condicion = array( "contenido_pagina" => 'home', "contenido_seccion" => 'clientes' );
		
		$respuesta = $this->basic_modal->genericSelect('sistema');
		$consulta = (is_array($respuesta) && count($respuesta) > 0) ? $respuesta[0] : '';
		$clean = (isset($consulta) && property_exists($consulta, 'contenido_info')) ? str_replace($encontrar, $remplazar, $consulta->contenido_info) : '';
		$cleanClientesDB = ( is_object(json_decode($clean)) ) ? json_decode($clean) : new stdClass();
		$data['clientesDB'] = $cleanClientesDB;
*/
		
		
		
		
		
/*
		//Consulta - FOOTER-ALIANZAS
		$this->basic_modal->clean();
		$this->basic_modal->tabla = 'contenido';
		$this->basic_modal->campos = 'contenido_info';
		$this->basic_modal->condicion = array( "contenido_pagina" => 'footer', "contenido_seccion" => 'alianzas' );
		
		$respuesta = $this->basic_modal->genericSelect('sistema');
		$consulta = (is_array($respuesta) && count($respuesta) > 0) ? $respuesta[0] : '';
		$clean = (isset($consulta) && property_exists($consulta, 'contenido_info')) ? str_replace($encontrar, $remplazar, $consulta->contenido_info) : '';
		$cleanAlianzasDB = ( is_object(json_decode($clean)) ) ? json_decode($clean) : new stdClass();
		$data['alianzasDB'] = $cleanAlianzasDB;
*/


		
/*
		//Consulta - HOME-SECCIONES
		$this->basic_modal->clean();
		$this->basic_modal->tabla = 'contenido';
		$this->basic_modal->campos = 'contenido_info';
		$this->basic_modal->condicion = array( "contenido_pagina" => 'home', "contenido_seccion" => 'servicios' );
		
		$isServicio = $this->basic_modal->genericSelect('sistema');
		$consulta = (is_array($isServicio) && count($isServicio) > 0) ? $isServicio[0] : '';
		$nuevoValor = (isset($consulta) && property_exists($consulta, 'contenido_info')) ? str_replace($encontrar, $remplazar, $consulta->contenido_info) : '';
		$valoresDB = ( is_object(json_decode($nuevoValor)) ) ? json_decode($nuevoValor) : new stdClass();
		$data['serviciosDB'] = $valoresDB;
		
		
		
		//Consulta - HOME-CLIENTES
		$this->basic_modal->clean();
		$this->basic_modal->tabla = 'contenido';
		$this->basic_modal->campos = 'contenido_info';
		$this->basic_modal->condicion = array( "contenido_pagina" => 'home', "contenido_seccion" => 'clientes' );
		
		$respuesta = $this->basic_modal->genericSelect('sistema');
		$consulta = (is_array($respuesta) && count($respuesta) > 0) ? $respuesta[0] : '';
		$clean = (isset($consulta) && property_exists($consulta, 'contenido_info')) ? str_replace($encontrar, $remplazar, $consulta->contenido_info) : '';
		$cleanClientesDB = ( is_object(json_decode($clean)) ) ? json_decode($clean) : new stdClass();
		$data['clientesDB'] = $cleanClientesDB;
		
		
		
		//Consulta - HOME-PORTAFOLIOS
		$this->basic_modal->clean();
		$this->basic_modal->tabla = 'contenido';
		$this->basic_modal->campos = 'contenido_info';
		$this->basic_modal->condicion = array( "contenido_pagina" => 'home', "contenido_seccion" => 'portafolios' );
		
		$respuesta = $this->basic_modal->genericSelect('sistema');
		$consulta = (is_array($respuesta) && count($respuesta) > 0) ? $respuesta[0] : '';
		$clean = (isset($consulta) && property_exists($consulta, 'contenido_info')) ? str_replace($encontrar, $remplazar, $consulta->contenido_info) : '';
		$cleanObjecDB = ( is_object(json_decode($clean)) ) ? json_decode($clean) : new stdClass();
		$data['portafoliosDB'] = $cleanObjecDB;
		
		
		
		//Consulta - HOME-NOSOTROS
		$this->basic_modal->clean();
		$this->basic_modal->tabla = 'contenido';
		$this->basic_modal->campos = 'contenido_info';
		$this->basic_modal->condicion = array( "contenido_pagina" => 'home', "contenido_seccion" => 'nosotros' );
		
		$respuesta = $this->basic_modal->genericSelect('sistema');
		$consulta = (is_array($respuesta) && count($respuesta) > 0) ? $respuesta[0] : '';
		$clean = (isset($consulta) && property_exists($consulta, 'contenido_info')) ? str_replace($encontrar, $remplazar, $consulta->contenido_info) : '';
		$cleanObjecDB = ( is_object(json_decode($clean)) ) ? json_decode($clean) : new stdClass();
		$data['nosotrosDB'] = $cleanObjecDB;
*/
		
		
		
		
		
		$data['titulo'] = "Home";
		$data['actual'] = "home";
		$data['desc'] = "The Rocket TV | Todo el entretenimiento en un solo lugar";
		
		$this->load->view('public/head', $data);
		$this->load->view('public/home', $data);
		$this->load->view('public/footer', $data);
	}
	
	
	
	
	public function send(){
		
	}
	
	
	
	public function pay($meses){
		echo($meses);
		
		// Set your secret key. Remember to switch to your live secret key in production.
		// See your keys here: https://dashboard.stripe.com/account/apikeys
		\Stripe\Stripe::setApiKey('sk_test_4eC39HqLyjWDarjtT1zdp7dc');
		
		$test = \Stripe\PaymentIntent::create([
		  'amount' => 1000,
		  'currency' => 'usd',
		  'payment_method_types' => ['card'],
		  'receipt_email' => 'soporte@idalibre.com',
		]);
		
		print_r(json_encode($test));
	}
	
	
	
	public function paySesion($meses){
		header('Content-Type: application/json');
		\Stripe\Stripe::setApiKey('sk_test_51IZ67TAqsKs1mUJ42OKj75pYhm8tk5vH6tnup7g8OmUPR3mmdGnrbD8LdyHDAtSNjVENHUK3S7weciIJSyM1UCqE00voxfz5pZ');
		
		
		$monto = false;
		
		switch($meses){
			case "1":
				$monto = 2000;
				$nombre = 'Plan 1 mes - The Rocket TV';
				$imagen = base_url( 'assets/public/img/paquete-1-mes-the-rocket-tv.jpg' );
			break;
			
			case "2":
				$monto = 3800;
				$nombre = 'Plan 2 meses - The Rocket TV';
				$imagen = base_url( 'assets/public/img/paquete-2-mes-the-rocket-tv.jpg' );
			break;
			
			case "3":
				$monto = 7000;
				$nombre = 'Plan 3 meses - The Rocket TV';
				$imagen = base_url( 'assets/public/img/paquete-3-mes-the-rocket-tv.jpg' );
			break;
			
			case "6":
				$monto = 13200;
				$nombre = 'Plan 6 meses - The Rocket TV';
				$imagen = base_url( 'assets/public/img/paquete-6-mes-the-rocket-tv.jpg' );
			break;
		}
		
		if($monto === false){
			echo json_encode(['id' => 'null']);
			return false;
		}
		
		
		
		
		$YOUR_DOMAIN = base_url('pago');
		
		$checkout_session = \Stripe\Checkout\Session::create([
		  'payment_method_types' => ['card'],
		  'line_items' => [[
		    'price_data' => [
		      'currency' => 'usd',
		      'unit_amount' => $monto,
		      'product_data' => [
		        'name' => $nombre,
		        'images' => [$imagen]
		      ]
		    ],
		    'quantity' => 1
		  ]],
		  'mode' => 'payment',
		  'success_url' => $YOUR_DOMAIN . '/exito',
		  'cancel_url' => $YOUR_DOMAIN . '/cancelado'
		]);
		
		//$this->session->set_userdata('userPaySession', $checkout_session->id);
		$this->session->set_flashdata('userPaySession', $checkout_session->id);
		$this->session->set_flashdata('userPayPaquete', $meses);
		
		echo json_encode(['id' => $checkout_session->id]);
				
	}
		
		
	
	public function clean(){
		unset(
	        $_SESSION['formData']
		);
		
		redirect(base_url('inicio'));
	}

	
}



