<?php
class CloneController extends BaseController
{
    /**
     * "/user/list" Endpoint - Get list of users
     */

    public function deleteAll($dir)
    {
        foreach (glob($dir . '/*') as $file) {
            if (is_dir($file))
            $this->deleteAll($file);
            else
                unlink($file);
        }
        rmdir($dir);
    }


    public function ClonePages($token)
    {
        $CloneModel = new CloneModel();
        $clone = $CloneModel->getToken($token);
        if (count($clone) == 1) {
            $pasta = "public/pages/page-" . $clone[0]['user_id'] . "-" . $clone[0]['id'];
            if (file_exists($pasta)) {
                $this->deleteAll($pasta);
            }
            $url = $clone[0]['url_clonada'];
            //dd("node clone.mjs --url=" . $url . " --diretory=" . $pasta . " &");
            exec("node clone.mjs --url=" . $url . " --diretory=" . $pasta . " &", $output);

            $getURL = $CloneModel->getURLAPI();

            echo  $getURL[0]['value'] . "/public/pages/page-" . $clone[0]['user_id'] . "-" . $clone[0]['id'] . '/index.html';
        } else {
        };
    }



    public function ReplacePages($token)
    {
        $CloneModel = new CloneModel();
        $clone = $CloneModel->getToken($token);
        if (count($clone) == 1) {
            $pasta = "public/pages/page-" . $clone[0]['user_id'] . "-" . $clone[0]['id'];
            $url = $clone[0]['url_clonada'];
            //dd("node clone.mjs --url=" . $url . " --diretory=" . $pasta . " &");
            exec("node clone.mjs --url=" . $url . " --diretory=" . $pasta . " &", $output);
        } else {
        };
    }
}
