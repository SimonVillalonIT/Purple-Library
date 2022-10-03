<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller{
    
    function  __construct(){
        parent::__construct();
        
        // Load cart library
        $this->load->library('cart');
        
        // Load product model
        $this->load->model('product');
    }
    
    function index(){
        if(empty($this->session->userdata("ID"))){
            redirect("Inicio_controller");
        }
        $data = array();
        
        // Fetch products from the database
        $data['products'] = $this->product->getRows();
        
        // Load the product list view
        $this->load->view('products/index', $data);
    }
    
    function addToCart($proID){
        if(empty($this->session->userdata("ID"))){
            redirect("Inicio_controller");
        }
        // Fetch specific product by ID
        $product = $this->product->getRows($proID);
        // Add product to the cart
        $data = array(
            'id'    => $product['ID'],
            'qty'    => 1,
            'price'    => $product['Precio'],
            'name'    => $product['Titulo'],
            'image' => $product['img']
        );
        $this->cart->insert($data);
        
        // Redirect to the cart page
        redirect('cart/');
    }
    
}