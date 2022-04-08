<?php

require __DIR__ . "/inc/bootstrap.php";

if(isset($_GET['token'])) {
    require PROJECT_ROOT_PATH . "/Controller/Api/CloneController.php";
     
    $token = $_GET['token'];
    $objFeedController = new CloneController();
    $objFeedController->ReplacePages($token);

} else {
    header("HTTP/1.1 404 não encontrado");
    exit;
}

//require PROJECT_ROOT_PATH . "/Controller/Api/UserController.php";

//$objFeedController = new UserController();
//$strMethodName = $uri[3] . 'Action';
//$objFeedController->{$strMethodName}();
?>