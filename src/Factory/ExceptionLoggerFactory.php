<?php


namespace LamBelcebur\MongoDBLogger\Factory;


use Interop\Container\ContainerInterface;
use Laminas\Log\Logger;

class ExceptionLoggerFactory extends MongoDBLoggerFactory
{

    public const SERVICE_NAME = 'ExceptionLogger';

    /**
     * @param ContainerInterface $container
     * @param string             $requestedName
     * @param null|array         $options
     *
     * @return Logger
     */
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null): Logger
    {
        $logger = parent::__invoke($container, $requestedName, ['name' => self::SERVICE_NAME]);
        Logger::registerExceptionHandler($logger);
        return $logger;
    }
}

