<?php

namespace KKMClient\Models\Responses;


use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\AccessType;
use JMS\Serializer\Annotation\Accessor;
use KKMClient\Traits\CommonResponseTrait;
use KKMClient\Interfaces\ResponseInterface;

/**
 * Class DeviceInfo
 * @package KKMClient\Models\Devices
 */
#[AccessType(type:'public_method')]
class DeviceInformation implements ResponseInterface
{
    use CommonResponseTrait;

    const SESSION_CLOSED    = 1;
    const SESSION_OPENED    = 2;
    const SESSION_EXPIRED   = 3;

    /**
     * @var integer
     */
    #[SerializedName('CheckNumber')]
    #[Type('integer')]
    protected $lastCheckNumber;

    /**
     * @var integer
     */
    #[SerializedName('SessionNumber')]
    #[Type('integer')]
    protected $sessionNumber;

    /**
     * @var integer
     */
    #[SerializedName('LineLength')]
    #[Type('integer')]
    protected $lineLength;

    /**
     * @var string
     */
    #[SerializedName('URL')]
    #[Type('string')]
    protected $url;

    /**
     * @var \KKMClient\Models\Responses\Chunks\InformationChunk
     */
    #[SerializedName('Info')]
    #[Type('KKMClient\Models\Responses\Chunks\InformationChunk')]
    protected $information;

    /**
     * @return int
     */
    public function getLastCheckNumber (): int
    {
        return $this->lastCheckNumber;
    }

    /**
     * @param int $lastCheckNumber
     */
    public function setLastCheckNumber ( int $lastCheckNumber ): void
    {
        $this->lastCheckNumber = $lastCheckNumber;
    }

    /**
     * @return int
     */
    public function getSessionNumber (): int
    {
        return $this->sessionNumber;
    }

    /**
     * @param int $sessionNumber
     */
    public function setSessionNumber ( int $sessionNumber ): void
    {
        $this->sessionNumber = $sessionNumber;
    }

    /**
     * @return int
     */
    public function getLineLength (): int
    {
        return $this->lineLength;
    }

    /**
     * @param int $lineLength
     */
    public function setLineLength ( int $lineLength ): void
    {
        $this->lineLength = $lineLength;
    }

    /**
     * @return string
     */
    public function getUrl ()
    {
        return $this->url;
    }

    /**
     * @param string $url
     */
    public function setUrl ( string $url = '' ): void
    {
        $this->url = $url;
    }

    /**
     * @return Chunks\InformationChunk
     */
    public function getInformation (): Chunks\InformationChunk
    {
        return $this->information;
    }

    /**
     * @param Chunks\InformationChunk $information
     */
    public function setInformation ( Chunks\InformationChunk $information ): void
    {
        $this->information = $information;
    }
}
