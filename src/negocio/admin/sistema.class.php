<?php
require_once(__dir__."/config.php");

class sistema{
    
    var $db;

    function conectar(){
       $this->db = new PDO(dbdriver.":host=".dbhost.";dbname=".dbname,dbuser, dbpassword);

    }
};

