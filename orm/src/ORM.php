<?php
namespace Phoenix\Orm;

class ORM
{
    /**
     * @var array Connexion
     */
    protected $connexion;

    /**
     * @var array
     */
    protected $repositories;

    /**
     * @param Connexion $connexion
     */
    public function __construct(Connexion $connexion)
    {
        $this->connexion = $connexion;
        $this->connexion->connect();
    }

    /**
     * @param string $entity
     * @return Repository
     */
    public function getRepository(string $entity): Repository
    {
        if (isset($this->repositories[$entity])) {
            return $this->repositories[$entity];
        }

        $this->repositories[$entity] = new Repository($entity, $this->connexion->getConnexion());

        return $this->repositories[$entity];
    }

}