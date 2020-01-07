<?php
/**
 * Created by PhpStorm.
 * User: ashaddad
 * Date: 06.03.19
 * Time: 14:06
 */

require 'core/includes.php';

// get the requested url
@$url = $_GET['url'];

// Removes whitespaces
$url = trim($url, '/');

// Splits a string
$url = explode('/', $url);
$file = 'controller/'.$url[0].'.php';


if (file_exists($file)) {

    require $file;
    $Controller = new $url[0];

} elseif($url[0] == '') {

    require 'controller/index.php';
    $Controller = new index();

}else {
    require 'controller/error404.php';
    $Controller = new error404();
}







