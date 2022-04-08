<?php
class IndexController extends BaseController
{
    /**
     * "/user/list" Endpoint - Get list of users
     */
    public function GetPage($dominio,$slug)
    {    
            $IndexModel = new IndexModel();
            $getUrl = $IndexModel->getHTML($dominio,$slug);
            return $getUrl;
    }

}