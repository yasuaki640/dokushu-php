<?php
declare(strict_types=1);

interface Animal
{
    public function outputVoice(): string;
}

class Cat implements Animal
{
    public final function outputVoice(): string
    {
        return 'meow';
    }
}

class Dog implements Animal
{
    public final function outputVoice(): string
    {
        return 'bow';
    }
}