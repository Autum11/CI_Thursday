<?php
Class Test_model extends CI_model{

    public function getCustomer(){
        $names = array (
            array("fn"=>'Ann',"ln"=>'Smith'),
            array("fn"=>'Suman',"ln"=>'Kharel'),
            array("fn"=>'Hari',"ln"=>'Bahadur')
        );
        return $names;
    }
} 

