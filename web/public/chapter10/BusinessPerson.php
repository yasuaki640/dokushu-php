<?php

require_once 'Person.php';

class BusinessPerson extends Person
{
    public function work()
    {
        print "<p/>{$this->getFirstName()}{$this->getLastName()} is working";
    }
}