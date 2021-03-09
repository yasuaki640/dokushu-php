<?php


trait MachineTrait
{
    private $starting = 'starting...run!';

    public function run()
    {
        print $this->starting;
    }
}