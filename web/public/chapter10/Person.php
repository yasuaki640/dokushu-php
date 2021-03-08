<?php
declare(strict_types=1);

class Person
{
    private string $firstName;

    private string $lastName;

    public function __construct($firstName, $lastName)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }

    public function setFirstName(string $firstName): void
    {
        $this->firstName = $firstName;
    }

    public function setLastName(string $lastName): void
    {
        $this->lastName = $lastName;
    }

    public function show(): void
    {
        print "My name is {$this->firstName} {$this->lastName}.";
    }
}