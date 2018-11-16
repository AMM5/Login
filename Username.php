<?php
/**
 * Created by PhpStorm.
 * User: diang
 * Date: 16/11/2018
 * Time: 17:03
 */

class Username {
    var $username;
    var $password;

    function __construct($username,$password) {
        $this->username = $username;
        $this->password = $password;
    }
}