<?php

/**
 * Created by PhpStorm.
 * User: ssynhtn
 * Date: 2018/6/18
 * Time: 12:42
 */
namespace Ssynhtn\Hello;

class Cat {
    function meow() {
        echo "cat meowing";
    }

    public function __toString()
    {
        return "a cute cat";
    }
}

function cat_and_dog() {
    $cat = new Cat();
    $dog = new Dog();
    echo "created $cat and $dog";
}