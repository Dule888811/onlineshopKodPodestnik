<?php

class Admin_Model {
    
    public function __construct() {
        $this->db = new PDO(DB_TYPE.':host='.DB_HOST.';dbname='.DB_NAME ,DB_USER, DB_PASS);
        $this->db->exec("SET character_set_connection = 'utf8',
                             character_set_server = 'utf8',
                             character_set_client = 'utf8',
                             character_set_database = 'utf8',
                             character_set_results = 'utf8'
                        ");
    }
    
}
?>
