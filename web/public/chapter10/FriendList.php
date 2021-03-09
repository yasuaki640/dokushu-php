<?php
declare(strict_types=1);
require_once 'Person.php';

class FriendList implements IteratorAggregate
{
    public string $version = '1.0.0';
    public string $name = 'friends list';
    private array $list = [];

    public function getIterator(): Traversable
    {
        return new ArrayIterator($this->list);
    }

    public function add(Person $p)
    {
        $this->list[] = $p;
    }
}