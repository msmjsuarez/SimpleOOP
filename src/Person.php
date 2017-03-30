<?php
/**
 * Created by PhpStorm.
 * User: MJ
 * Date: 3/30/2017
 * Time: 9:56 AM
 */
class Person {
    protected $name;
    public function __construct($name)
    {
        $this->name = $name;
    }
}