<?php

    class Login_model extends CI_Model{

        function can_login($email,$contraseña){

            $this->db->where('Email',$email);
            $query = $this->db->get('usuario');
            if($query->num_rows() > 0){

                foreach($query->result() as $row){
                    if($row->is_email_verified == 'yes'){
                        
                        if(password_verify($contraseña,$row->Contraseña)){
                            $this->session->set_userdata('ID',$row->ID);
                        }
                        else{
                            return '<div style="background-color:red; margin:0; width:100%">
                                        <h3 style="text-align:center; margin:0;">El email ingresado o la contraseña ingresada es incorrecto</h3>
                                    </div>';
                        }
                    }
                    else{
                        return '<div style="background-color:#E6BF00; margin:0; width:100%">
                        <h3 style="text-align:center;color:white; margin:0;">Primero verifica tu correo de confirmación</h3>
                    </div>';
                    }
                }

            }
            else{
                return '<div style="background-color:red; margin:0; width:100%">
                <h3 style="text-align:center; margin:0;">El email ingresado o la contraseña ingresada es incorrecto</h3>
            </div>';
            }
            $this->db->where('Contraseña');

        }

    }



?>