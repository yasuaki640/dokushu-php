<?php
declare(strict_types=1);

require_once 'MyClass.php';

class MyChildClass extends MyClass
{
    public function __construct(string $data)
    {
        parent::__construct($data);
    }

    public function getData(): string
    {
        return '~' . parent::getData() . '~';
    }
}