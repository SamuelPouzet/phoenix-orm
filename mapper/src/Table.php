<?php

namespace Phoenix\Mapper;

#[\Attribute]
class Table
{
    protected string $tableName;

    public function __construct($tableName)
    {
        $this->tableName = $tableName;
    }

    public function getTableName()
    {
        return $this->tableName;
    }
}