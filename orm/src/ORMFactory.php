<?php

namespace Phoenix\Orm;

use Interop\Container\ContainerInterface;
use Laminas\ServiceManager\Factory\FactoryInterface;

/**
 *
 */
class ORMFactory implements FactoryInterface
{
    /**
     * @param ContainerInterface $container
     * @param $requestedName
     * @param array|null $options
     * @return ORM
     * @throws \Psr\Container\ContainerExceptionInterface
     * @throws \Psr\Container\NotFoundExceptionInterface
     * @todo permettre des connexions autre que celle par défaut
     */
    public function __invoke(ContainerInterface $container, $requestedName, ?array $options = null)
    {
       $config = $container->get('Config')['database'];
       $connexion = $container->get(Connexion::class);
       $connexion->setParams($config['default']);
       return new ORM($connexion);
    }

}