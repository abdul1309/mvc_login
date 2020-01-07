<?php
/**
 * Created by PhpStorm.
 * User: ashaddad
 * Date: 06.03.19
 * Time: 14:37
 */

/**
 * Class View
 *
 * Methods:
 * render: upload the page.
 */
class View {

    var $rended = false;
    public function render ($page) {
        if ($this->rended){
            return false;
        }
        $file = 'view/'.$page.'.php';
        require $file;
        $this->rended = true;
    }

}