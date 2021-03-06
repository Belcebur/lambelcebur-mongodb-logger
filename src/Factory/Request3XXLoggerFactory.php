<?php


namespace LamBelcebur\MongoDBLogger\Factory;


use Interop\Container\ContainerInterface;
use Laminas\Log\Logger;

class Request3XXLoggerFactory extends MongoDBLoggerFactory
{
    public const SERVICE_NAME = 'Request3XXLogger';

    /**
     * @param ContainerInterface $container
     * @param string             $requestedName
     * @param null|array         $options
     *
     * @return Logger
     */
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null): Logger
    {
        return parent::__invoke($container, $requestedName, ['name' => self::SERVICE_NAME]);
    }
}

