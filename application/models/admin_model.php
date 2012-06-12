<?php

class Admin_model extends CI_Model {
    
    function __construct()
    {
        
    }
    
    public function verify_user($name, $password)
    {
        $q = $this
                ->db
                ->where('usr_name', $name)
                ->where('usr_password', sha1($password))
                ->limit(1)
                ->get('usr_users');
        
        if ( $q->num_rows > 0 ) {
            return $q->row();
            
            /* // view the object
            echo '<pre>';
            print_r($q->row());
            echo '</pre>';
            */
        }
        return false;
    }
}

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
