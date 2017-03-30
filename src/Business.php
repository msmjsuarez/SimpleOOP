<?php
/**
 * Created by PhpStorm.
 * User: MJ
 * Date: 3/30/2017
 * Time: 9:56 AM
 */
class Business {
    protected $staff;
    public function __construct(Staff $staff)
    {
        $this->staff = $staff;
    }
    public function hire(Person $person)
    {
        $this->staff->add($person);
    }

    /**
     * @return Staff
     */
    public function getStaffMembers()
    {
        return $this->staff->members();
    }
}