<?php

namespace KKMClient\Models\Queries\Commands;


use KKMClient\Interfaces\CommandInterface;
use KKMClient\Traits\CommonCommandTrait;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\Accessor;
use JMS\Serializer\Annotation\AccessType;
use JMS\Serializer\Annotation\SerializedName;

/**
 * Class DeviceList
 * @package KKMClient\Models\Queries\Commands
 */
#[AccessType(type:'public_method')]
class DeviceList implements CommandInterface
{
    use CommonCommandTrait;

    #[SerializedName('Active')]
    #[Type('boolean')]
    #[Accessor(getter: 'isActive', setter: 'setActive')]
    private bool $active = true;

    /**
     * @var bool|null
     */
    #[SerializedName('OnOff')]
    #[Accessor(getter: 'isDisabled', setter: 'setDisabled')]
    #[Type('boolean')]
    private $disabled = null;

    /**
     * @var bool|null
     */
    #[SerializedName('OFD_Error')]
    #[Accessor(getter: 'hasOfdError', setter: 'setOfdError')]
    #[Type('boolean')]
    private $ofdError = null;

    #[SerializedName('OFD_DateErrorDoc')]
    #[Accessor(getter: 'hasOfdError', setter: 'setOfdError')]
    #[Type("DateTime<'Y-m-dTH:i:s'>")]
    private ?\DateTime $lastOfdErrorDate = null;

    #[SerializedName('FN_DateEnd')]
    #[Accessor(getter: 'getLastFnDate', setter: 'setLastFnDate')]
    #[Type("DateTime<'Y-m-dTH:i:s'>")]
    private ?\DateTime $lastFnDate = null;

    #[SerializedName('FN_MemOverFlow')]
    #[Accessor(getter: 'hasMemoryOverflow', setter: 'setMemoryOverflow')]
    #[Type('boolean')]
    private ?bool $memoryOverflow = null;

    #[SerializedName('FN_IsFiscal')]
    #[Accessor(getter: 'isFiscal', setter: 'setFiscal')]
    #[Type('boolean')]
    private ?bool $fiscal = null;

    /**
     * @return bool
     */
    public function isActive (): bool
    {
        return $this->active;
    }

    /**
     * @param bool $active
     */
    public function setActive ( bool $active ): void
    {
        $this->active = $active;
    }

    /**
     * @return bool|null
     */
    public function isDisabled ()
    {
        return $this->disabled;
    }

    /**
     * @param bool|null $disabled
     */
    public function setDisabled ( $disabled ): void
    {
        $this->disabled = $disabled;
    }

    /**
     * @return bool|null
     */
    public function hasOfdError ()
    {
        return $this->ofdError;
    }

    /**
     * @param bool|null $ofdError
     */
    public function setOfdError ( $ofdError ): void
    {
        $this->ofdError = $ofdError;
    }

    /**
     * @return \DateTime|null
     */
    public function getLastOfdErrorDate ()
    {
        return $this->lastOfdErrorDate;
    }

    /**
     * @param \DateTime|null $lastOfdErrorDate
     */
    public function setLastOfdErrorDate ( \DateTime $lastOfdErrorDate = null ): void
    {
        $this->lastOfdErrorDate = $lastOfdErrorDate;
    }

    /**
     * @return \DateTime|null
     */
    public function getLastFnDate ()
    {
        return $this->lastFnDate;
    }

    /**
     * @param \DateTime|null $lastFnDate
     */
    public function setLastFnDate ( \DateTime $lastFnDate = null ): void
    {
        $this->lastFnDate = $lastFnDate;
    }

    /**
     * @return bool|null
     */
    public function hasMemoryOverflow ()
    {
        return $this->memoryOverflow;
    }

    /**
     * @param bool|null $memoryOverflow
     */
    public function setMemoryOverflow ( bool $memoryOverflow = null ): void
    {
        $this->memoryOverflow = $memoryOverflow;
    }

    /**
     * @return bool|null
     */
    public function isFiscal ()
    {
        return $this->fiscal;
    }

    /**
     * @param bool|null $fiscal
     */
    public function setFiscal ( bool $fiscal = null ): void
    {
        $this->fiscal = $fiscal;
    }

    public function getName() : string
    {
        return "List";
    }
}
