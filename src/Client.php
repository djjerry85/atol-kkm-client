<?php
namespace KKMClient;

use GuzzleHttp\Client as Http;
use KKMClient\Exceptions\UnknownKKMCommand;
use JMS\Serializer\Exception\LogicException;
use KKMClient\Interfaces\CommandInterface;
use KKMClient\Factories\QueriesFactory;
use Autoload\Annotations;
use KKMClient\Interfaces\KKMCommandHandler;

/**
 * Class Client
 * @package KKMClient
 * Позволяет совершать запросы к серверу ККМ
 */
class Client implements KKMCommandHandler
{
    /**
     * @var Http
     */
    private \GuzzleHttp\Client $http;

    private string $url;

    private \KKMClient\Factories\QueriesFactory $factory;

    /**
     * Client constructor.
     * @param $url  string  url ККМ сервера
     * @param array $options
     * @param bool $async
     * @throws \Exception
     */
    public function __construct (string $url, array $options, bool $async = false)
    {
        $url .= '/Execute';

        if ($async) {
            $url .= '/async/';
        } else {
            $url .= '/sync/';
        }

        $this->url = $url;
        if(!isset($options['user']) || !$options['user'])
            throw new \Exception("User name has to be provided in options array");
        if(!isset($options['pass'])) $options['pass'] = '';
        $config = [
            'base_uri' => $url,
            'auth' => [
                $options['user'], $options['pass']
            ],
            'verify' => false,
            'timeout' => 30
        ];
        $this->http = new Http($config);
        $this->factory = new QueriesFactory();
        //Annotations::registry();
    }

    /**
     * @param $attributes
     */
    public function resolveCommand( $attributes )
    {
        if(!isset($attributes['Command'])) {
            throw new LogicException("Wrong request body!");
        }

        $name = $attributes['Command'];
        $command = $this->factory->$name($attributes);
        return $command;
    }

    public function executeCommand( CommandInterface $command )
    {
        if(!$command->getName())
            throw new UnknownKKMCommand($command);
        $serializedCommand = $this->factory->serializeCommand($command);



        //echo $serializedCommand; exit;

        $response = $this->http->request('post', '', ['body' => $serializedCommand]);

        if ( $response && $response->getStatusCode() == 200 ) {
            return $this->factory->deSerializeResponse($response->getBody(), $command->getResponseClassName());
        }
    }
}
