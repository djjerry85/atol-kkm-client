<?php

namespace KKMClient\Models\Responses;


use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use KKMClient\Interfaces\ResponseInterface;
use KKMClient\Traits\CommonResponseTrait;

class CloseShift implements ResponseInterface
{
    use CommonResponseTrait;

    #[SerializedName('CheckNumber')]
    #[Type('integer')]
    protected $checkNumber;

    #[SerializedName('SessionNumber')]
    #[Type('integer')]
    protected $sessionNumber;

    public function setCheckNumber($checkNumber)
    {
        $this->checkNumber = $checkNumber;
        return $this;
    }

    public function getCheckNumber()
    {
        return $this->checkNumber;
    }

    public function setSessionNumber($sessionNumber)
    {
        $this->sessionNumber = $sessionNumber;
        return $this;
    }

    public function getSessionNumber()
    {
        return $this->sessionNumber;
    }

    

}
