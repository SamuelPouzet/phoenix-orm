<?php

namespace Phoenix\Mapper;
use Interop\Container\ContainerInterface;
class Column
{
    protected string $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getColumn()
    {
        return $this->name;
    }
}