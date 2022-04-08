<?php
require_once PROJECT_ROOT_PATH . "/Model/Database.php";

class CloneModel extends Database
{
    public function getToken($token)
    {
        return $this->select("SELECT * FROM paginas_clonadas where token = '" . $token . "'"); 
    }

    public function getURLAPI()
    {
        return $this->select("SELECT value FROM settings where display_name = 'CloneAPI'"); 
    }
}