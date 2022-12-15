<?php

namespace Phoenix\Orm;

/**
 *
 */
class Connexion
{
    /**
     * @var string
     */
    protected string $dbName;
    /**
     * @var string
     */
    protected string $host;
    /**
     * @var string
     */
    protected string $user;
    /**
     * @var string $charset
     */
    protected string $charset = 'utf-8';
    /**
     * @var string
     */
    protected string $password;

    /**
     * @var \PDO
     */
    protected \PDO $pdo;

    /**
     * @param array $config
     * @return void
     */
    public function setParams(array $config): void
    {
        $this->dbName = $config['dbName'];
        $this->host = $config['host'];
        $this->user = $config['user'];
        $this->password = $config['password'];
        $this->charset = $config['charset'];
    }

    public function connect(): \PDO
    {
        $this->pdo = new \PDO(
            sprintf('mysql:host=%1$s;dbname=%2$s;charset=%3$s',
                $this->host,
                $this->dbName,
                $this->charset
            ),
            $this->user,
            $this->password
        );
        return $this->pdo;
    }

    public function getConnexion()
    {
        return $this->pdo;
    }


}