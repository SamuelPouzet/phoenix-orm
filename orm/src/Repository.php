<?php

namespace Phoenix\Orm;

use PDO;
use Phoenix\Mapper\Table;

/**
 *
 */
class Repository
{
    /**
     * @var \ReflectionClass
     */
    protected  $reflectedClass;

    /**
     * @var string
     */
    protected string $entityName;

    /**
     * @var PDO
     */
    protected PDO $connexion;


    /**
     * @param $entityName
     * @param $connexion
     */
    public function __construct(string $entityName, PDO $connexion)
    {
        $this->entityName = $entityName;
        $this->connexion = $connexion;
        $this->reflectedClass = new \ReflectionClass($this->entityName);
        $this->getTableName();
    }

    protected function getTableName()
    {
       $tableNames = $this->reflectedClass ;
       foreach($tableNames->getAttributes() as $attribute) {
           var_dump($attribute->getName());
           var_dump($attribute->getArguments());
           var_dump($attribute->newInstance());
       }
    }
}