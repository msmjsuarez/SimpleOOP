<?php
/**
 * Created by PhpStorm.
 * User: MJ
 * Date: 3/30/2017
 * Time: 9:59 AM
 */
class Staff {
    protected $members = [];
    public function __construct($members = [])
    {
        $this->members = $members;
    }
    public function add(Person $person)
    {
        $this->members[] = $person;
    }
    public function members()
    {
        return $this->members;
    }
}