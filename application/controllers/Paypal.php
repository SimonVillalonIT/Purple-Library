<?php defined('BASEPATH') OR exit('No direct script access allowed'); 
 
class Paypal extends CI_Controller{ 
     
     function  __construct(){ 
        parent::__construct(); 
         
        // Load paypal library 
        $this->load->library('paypal_lib'); 
         
        // Load product model 
        $this->load->model('comprar'); 
         
        // Load payment model 
        $this->load->model('payment'); 
     } 
      
    function success(){ 
        $this->load->view('paypal/success'); 
    } 
      
     function cancel(){ 
        $this->load->view('paypal/cancel'); 
     }  
}