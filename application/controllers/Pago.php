<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pago extends CI_Controller {
	public function __construct(){
		parent::__construct();
	}
	
	
	public function index(){
		
	}
	
	public function exito(){
		$stripe = new \Stripe\StripeClient( 'sk_test_51IZ67TAqsKs1mUJ42OKj75pYhm8tk5vH6tnup7g8OmUPR3mmdGnrbD8LdyHDAtSNjVENHUK3S7weciIJSyM1UCqE00voxfz5pZ' );
		$userSes = $stripe->checkout->sessions->retrieve( $this->session->flashdata('userPaySession'), [] );
		$correoUser = $userSes->customer_details->email;
		$pagoUser = $userSes->amount_subtotal;
		$payStatusUser = $userSes->payment_status;
		$paqueteUser = $this->session->flashdata('userPayPaquete');
		//print_r($userSes);
	}
	
	public function cancelado(){
		$stripe = new \Stripe\StripeClient( 'sk_test_51IZ67TAqsKs1mUJ42OKj75pYhm8tk5vH6tnup7g8OmUPR3mmdGnrbD8LdyHDAtSNjVENHUK3S7weciIJSyM1UCqE00voxfz5pZ' );
		$userSes = $stripe->checkout->sessions->retrieve( $this->session->flashdata('userPaySession'), [] );
		$correoUser = $userSes->customer_details->email;
		$pagoUser = $userSes->amount_subtotal;
		$payStatusUser = $userSes->payment_status;
		//print_r($userSes);
	}
	
}