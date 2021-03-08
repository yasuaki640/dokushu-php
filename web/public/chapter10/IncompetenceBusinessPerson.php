<?php
require_once 'BusinessPerson.php';

class IncompetenceBusinessPerson extends BusinessPerson
{
    public function work()
    {
        parent::work();
        print 'But is while slacking off';
    }
}