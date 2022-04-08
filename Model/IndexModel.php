<?php
require_once PROJECT_ROOT_PATH . "/Model/Database.php";

class IndexModel extends Database
{
    public function getHTML($dominio,$slug)
    {
        $idDominio = $this->select("SELECT id FROM dominios where nome = '" . $dominio . "'"); 
        //dd();
        $getHTML = $this->select("SELECT html FROM paginas_clonadas where dominio_id = '" . $idDominio[0]['id'] . "' AND Slug = '" . $slug . "'"); 
        return html_entity_decode($getHTML[0]['html'], ENT_QUOTES | ENT_IGNORE | ENT_SUBSTITUTE); 
    }
}