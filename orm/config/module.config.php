<?php
namespace Phoenix\Orm;

return [
    'service_manager' => [
        'factories' => [
            ORM::class => ORMFactory::class,
            Connexion::class => ConnexionFactory::class,
        ],
    ],
];