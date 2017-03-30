<?php
use Acme\Users\Person;
use Acme\Staff;
use Acme\Business;

$mariah = new Person('Mariah Kaye');
$staff = new Staff([$mariah]);
$google = new Business($staff);
$google->hire(new Person('Jane Doe'));
var_dump($google->getStaffMembers());

