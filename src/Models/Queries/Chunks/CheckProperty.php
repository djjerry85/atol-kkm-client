<?php

namespace KKMClient\Models\Queries\Chunks;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\AccessType;
use JMS\Serializer\Annotation\Accessor;
use JMS\Serializer\Annotation\Type;

/**
 * Class CheckProperty
 * @package KKMClient\Queries
 */
#[AccessType(type:'public_method')]
class CheckProperty
{
    /**
     * @var boolean
     */
    #[SerializedName('Print')]
    #[Accessor(getter: 'isPrint', setter: 'setPrint')]
    #[Type('boolean')]
    protected $print;

    /**
     * @var boolean
     */
    #[SerializedName('PrintInHeader')]
    #[Accessor(getter: 'isPrintInHeader', setter: 'setPrintInHeader')]
    #[Type('boolean')]
    protected $printInHeader;

    /**
     * @var integer
     */
    #[SerializedName('Teg')]
    #[Type('integer')]
    protected $tag;

    /**
     * @var string
     */
    #[SerializedName('Prop')]
    #[Type('string')]
    protected $value;

    public function __construct ()
    {

    }

    /**
     * @return bool
     */
    public function isPrint (): bool
    {
        return $this->print;
    }

    /**
     * @param bool $print
     */
    public function setPrint ( bool $print ): void
    {
        $this->print = $print;
    }

    /**
     * @return bool
     */
    public function isPrintInHeader (): bool
    {
        return $this->printInHeader;
    }

    /**
     * @param bool $printInHeader
     */
    public function setPrintInHeader ( bool $printInHeader ): void
    {
        $this->printInHeader = $printInHeader;
    }

    /**
     * @return int
     */
    public function getTag (): int
    {
        return $this->tag;
    }

    /**
     * @param int $tag
     */
    public function setTag ( int $tag ): void
    {
        $this->tag = $tag;
    }

    /**
     * @return string
     */
    public function getValue (): string
    {
        return $this->value;
    }

    /**
     * @param string $value
     */
    public function setValue ( string $value ): void
    {
        $this->value = $value;
    }


}
