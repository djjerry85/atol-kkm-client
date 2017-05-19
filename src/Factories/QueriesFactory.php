<?php

namespace KKMClient\Factories;

use JMS\Serializer\EventDispatcher\EventDispatcher;
use JMS\Serializer\Serializer;
use JMS\Serializer\SerializerBuilder;
use KHerGe\JSON\JSON;
use KKMClient\Exceptions\UnknownKKMCommand;
use KKMClient\Models\Queries\Enums\Commands;

/**
 * Class QueriesFactory
 * @package KKMClient\Factories
 */
class QueriesFactory
{

    /**
     * @var Serializer
     */
    protected $serializer;

    /**
     * @var JSON
     */
    protected $json;

    /**
     * @var array
     */
    protected $devices = [];

    /**
     * @var array
     */
    protected $commands = [];

    /**
     * QueriesFactory constructor.
     */
    public function __construct ()
    {
        $this->serializer   = SerializerBuilder::create()->configureListeners(function(EventDispatcher $dispatcher) {
        })->build();
        $this->commands     = ReflectionFactory::getReflection(Commands::class)->getConstants();
        $this->json = new JSON();
    }

    /**
     * @param $name
     * @param $arguments
     * @return array|\JMS\Serializer\scalar|mixed|object
     * @throws UnknownKKMCommand
     */
    public function __call ( $name, $arguments )
    {
        $name = ucfirst($name);
        if (!in_array($name, $this->commands)) {
            throw new UnknownKKMCommand("Command {$name} not implemented or not supported by KKMServer");
        }
        $class          = "KKMClient\\Models\\Queries\\Commands\\".$name;
        $attributes     = $this->encodeAttributes($arguments[0], $class);
        $queryObject    = $this->serializer->deserialize($attributes, $class, 'json');

        return $queryObject;
    }

    /**
     * @param $attributes
     *
     * @return string
     */
    protected function encodeAttributes( $attributes)
    {
        return $this->json->encode($attributes);
    }
}