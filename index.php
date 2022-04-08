<?php 
header('Content-Type: text/html; charset=utf-8');

    require __DIR__ . "/inc/bootstrap.php";
    require PROJECT_ROOT_PATH . "/Controller/Api/IndexController.php";
  
    $url = $_SERVER['PHP_SELF'];
    $url_array = explode('/',$url);
    $slug = end($url_array);
    $dominio = $_SERVER['HTTP_HOST']   . $_SERVER['REQUEST_URI'];

    $dominio = str_replace("/".$slug, '', $dominio);
    
    $getPage = new IndexController();
    
    $html =  str_replace('&#039;', "'", $getPage->GetPage($dominio, $slug));
    print_r($html);
