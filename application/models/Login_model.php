<?php

    class Login_model extends CI_Model{

        function can_login($email,$contraseña){

            $this->db->where('Email',$email);
            $query = $this->db->get('usuario');
            if($query->num_rows() > 0){

                foreach($query->result() as $row){
                    if($row->is_email_verified == 'yes'){
                        $store_password = $this->encrypt->decode($row->Contraseña);
                        if($contraseña = $store_password){
                            $this->session->set_userdata('ID',$row->ID);
                        }
                        else{
                            return 'Contraseña incorrecta';
                        }
                    }
                    else{
                        return 'Primero verifica tu correo de confirmación';
                    }
                }

            }
            else{
                return 'Email incorrecto';
            }
            $this->db->where('Contraseña');

        }

    }



?>