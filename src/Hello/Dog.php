<?php

/**
 * Created by PhpStorm.
 * User: ssynhtn
 * Date: 2018/6/18
 * Time: 12:36
 */
namespace Ssynhtn\Hello;

class Dog {
    function bark() {
        echo "dog barking";
    }

    public function __toString()
    {
        return "a good boy";
    }
}