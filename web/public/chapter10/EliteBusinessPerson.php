<?php
require_once 'BusinessPerson.php';

class EliteBusinessPerson extends BusinessPerson
{
    public function work()
    {
        print "<p/>{$this->getFirstName()}{$this->getLastName()} is working so HARD";
    }
}