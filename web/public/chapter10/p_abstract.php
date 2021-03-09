<?php
declare(strict_types=1);

abstract class Animal
{
    public abstract function outputVoice(): string;
}

class Cat extends Animal{
    public final function outputVoice(): string
    {
        return 'meow';
    }
}

class Dog extends Animal{
    public final function outputVoice(): string
    {
        return 'bow';
    }
}