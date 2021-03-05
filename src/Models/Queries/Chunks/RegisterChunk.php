<?php

namespace KKMClient\Models\Queries\Chunks;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\AccessType;
use KKMClient\Models\Queries\Chunks\EGAIS;


/**
 * Class RegisterChunk
 * @package KKMClient\Queries\Chunks
 * @AccessType("public_method")
 */
class RegisterChunk
{
    /**
     * @var string
     * @SerializedName("Name")
     * @Type("string")
     * Наименование товара (64 символа)
     */
    protected $name;

    /**
     * @var integer
     * @SerializedName("Quantity")
     * @Type("integer")
     * Количество товара
     */
    protected $quantity;

    /**
     * @var float
     * @SerializedName("Price")
     * @Type("float")
     * Стоимость шт. без скидки
     */
    protected $price;

    /**
     * @var float
     * @SerializedName("Amount")
     * @Type("float")
     * Конечная сумма строки с учётом всех скидок/наценок
     */
    protected $amount;

    /**
     * @var integer
     * @SerializedName("Department")
     * @Type("integer")
     * Отдел учёта.
     */
    protected $department;

    /**
     * @var integer
     * @SerializedName("Tax")
     * @Type("integer")
     * Ставка НДС (%) / -1 НДС не облагается.
     */
    protected $tax;

    /**
     * @var string
     * @SerializedName("EAN13")
     * @Type("string")
     * Штрихкод EAN13 для передачи в ОФД (Не печатается)
     */
    protected $ean13;

    /**
     * @var \KKMClient\Models\Queries\Chunks\EGAIS
     * @SerializedName("EGAIS")
     * @Type("KKMClient\Models\Queries\Chunks\EGAIS")
     * Данные для ЕГАИС.
     */
    protected $egais;

    public function __construct () { }

    /**
     * @return string
     */
    public function getName (): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName ( string $name )
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return int
     */
    public function getQuantity (): int
    {
        return $this->quantity;
    }

    /**
     * @param int $quantity
     */
    public function setQuantity ( int $quantity )
    {
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * @return float
     */
    public function getPrice (): float
    {
        return $this->price;
    }

    /**
     * @param float $price
     */
    public function setPrice ( float $price )
    {
        $this->price = $price;
        return $this;
    }

    /**
     * @return float
     */
    public function getAmount (): float
    {
        return $this->amount;
    }

    /**
     * @param float $amount
     */
    public function setAmount ( float $amount )
    {
        $this->amount = $amount;
        return $this;
    }

    /**
     * @return int
     */
    public function getDepartment (): int
    {
        return $this->department;
    }

    /**
     * @param int $department
     */
    public function setDepartment ( int $department )
    {
        $this->department = $department;
    }

    /**
     * @return int
     */
    public function getTax (): int
    {
        return $this->tax;
    }

    /**
     * @param int $tax
     */
    public function setTax ( int $tax )
    {
        $this->tax = $tax;
    }

    /**
     * @return string
     */
    public function getEan13 ()
    {
        return $this->ean13;
    }

    /**
     * @param string $ean13
     */
    public function setEan13 ( string $ean13 )
    {
        $this->ean13 = $ean13;
    }

    /**
     * @return \KKMClient\Models\Queries\Chunks\EGAIS
     */
    public function getEgais ()
    {
        return $this->egais;
    }

    /**
     * @param \KKMClient\Models\Queries\Chunks\EGAIS $egais
     */
    public function setEgais ( EGAIS $egais )
    {
        $this->egais = $egais;
    }


}
