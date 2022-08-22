<?php defined('BASEPATH') OR exit('No direct script access allowed'); 
 
class Compra extends CI_Controller{ 
     
    function  __construct(){ 
        parent::__construct(); 
         
        // Load paypal library 
        $this->load->library('paypal_lib'); 
         
        // Load product model 
        $this->load->model('comprar'); 

        $this->load->library('cart');
    } 
     
    function index(){ 
        $data = array(); 
         
        // Get products from the database 
        $data['products'] = $this->comprar->getRows(); 
         
        // Pass product data to the view 
        $this->load->view('products/index', $data); 
    } 
     
    function buy(){ 
        // Set variables for paypal form 
        $returnURL = base_url().'index.php/paypal/success'; //payment success url 
        $cancelURL = base_url().'index.php/paypal/cancel'; //payment cancel url 
        $notifyURL = base_url().'index.php/paypal/ipn'; //ipn url 
         
        // Get product data from the database 
        //$product = $this->comprar->getRows($id); 
         
        // Get current user ID from the session (optional) 
        $userID = $this->session->userdata('ID');
         
        // Add fields to paypal form 
        $this->paypal_lib->add_field('return', $returnURL); 
        $this->paypal_lib->add_field('cancel_return', $cancelURL); 
        $this->paypal_lib->add_field('notify_url', $notifyURL); 
        $this->paypal_lib->add_field('item_name', "Libros"); 
        $this->paypal_lib->add_field('custom', $userID); 
        //$this->paypal_lib->add_field('item_number',  $product['ID']); 
        $this->paypal_lib->add_field('amount',  $this->cart->total()); 
        $this->paypal_lib->image(base_url("imgs/iconos/Logo.png"));
         
        // Render paypal form 
        $this->paypal_lib->paypal_auto_form(); 
    } 
}