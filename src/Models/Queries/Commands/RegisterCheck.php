<?php

namespace KKMClient\Models\Queries\Commands;

use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\AccessType;
use JMS\Serializer\Annotation\Accessor;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\Expose;
use KKMClient\Interfaces\CommandInterface;
use KKMClient\Models\Queries\Chunks\CheckProperty;
use KKMClient\Models\Queries\Chunks\CheckString;
use KKMClient\Traits\CommonCommandTrait;

/**
 * Class RegisterCheck
 * @package KKMClient\Models\Queries\Commands
 */
#[ExclusionPolicy('none')]
class RegisterCheck implements CommandInterface
{
    use CommonCommandTrait;

    #[SerializedName('KktNumber')]
    #[Type('string')]
    #[Accessor(getter: 'getFactoryNumber', setter: 'setFactoryNumber')]
    private string $factoryNumber = "";

    #[SerializedName('InnKkm')]
    #[Type('string')]
    #[AccessType(type: 'public_method')]
    #[Accessor(getter: 'getKkmInn', setter: 'setKkmInn')]
    private string $kkmInn = "";

    #[SerializedName('IsFiscalCheck')]
    #[Type('boolean')]
    #[Accessor(getter: 'isFiscal', setter: 'setFiscal')]
    private bool $fiscal = false;

    #[SerializedName('TypeCheck')]
    #[Type('integer')]
    private ?int $checkType = null;

    #[SerializedName('CancelOpenedCheck')]
    #[Type('boolean')]
    #[Accessor(getter: 'getOpenedCheckCancellation', setter: 'setOpenedCheckCancellation')]
    private bool $cancelOpenedCheck = false;

    #[SerializedName('NotPrint')]
    #[Type('boolean')]
    #[Accessor(getter: 'isPrint', setter: 'setPrint')]
    private bool $print = false;

    #[SerializedName('CashierName')]
    #[Type('string')]
    private string $cashierName = '';

    #[SerializedName('ClientAddress')]
    #[Type('string')]
    #[Accessor(getter: 'getClientAddress', setter: 'setClientAddress')]
    private string $clientAddress = '';

    #[SerializedName('TaxVariant')]
    //#[Type('integer')]
    private $tax = '';

    #[SerializedName('CheckProps')]
    #[Type('array<KKMClient\Models\Queries\Chunks\CheckProperty>')]
    #[Accessor(getter: 'getProps', setter: 'setProps')]
    private array $props = [];

    #[SerializedName('AdditionalProps')]
    #[Type('array<KKMClient\Models\Queries\Chunks\AdditionalCheckProperty>')]
    #[Accessor(getter: 'getAdditionalProps', setter: 'setAdditionalProps')]
    private array $additionalProps = [];

    #[SerializedName('CheckStrings')]
    #[Type('array<KKMClient\Models\Queries\Chunks\CheckString>')]
    #[Accessor(getter: 'getStrings', setter: 'setStrings')]
    private array $strings = [];



    #[SerializedName('CashLessType1')]
    #[Type('float')]
    private ?float $cashlessPayment1 = null;

    #[SerializedName('CashLessType2')]
    #[Type('float')]
    private ?float $cashlessPayment2 = null;

    #[SerializedName('CashLessType3')]
    #[Type('float')]
    private ?float $cashlessPayment3 = null;


    /** Печатать Слип-чек после чека (а не в чеке)  */
    #[SerializedName('PrintSlipAfterCheck')]
    #[Type('boolean')]
    protected bool $printSlipAfterCheck = false;


    /** Печатать Слип-чек дополнительно для кассира (основной слип-чек уже будет печататся в составе чека) */
    #[SerializedName('PrintSlipForCashier')]
    #[Type('boolean')]
    protected bool $printSlipForCashier = false;

    // Наличная оплата (2 знака после запятой), Тег 1031
    #[SerializedName('Cash')]
    #[Type('float')]
    private float $cash = 0;

    // Сумма электронной оплаты (2 знака после запятой), Тег 1081
    #[SerializedName('ElectronicPayment')]
    #[Type('float')]
    private float $electronicPayment = 0;

    // Сумма из предоплаты (зачетом аванса) (2 знака после запятой), Тег 1215
    #[SerializedName('AdvancePayment')]
    #[Type('float')]
    private float $advancePayment = 0;

    // Сумма постоплатой(в кредит) (2 знака после запятой), Тег 1216
    #[SerializedName('Credit')]
    #[Type('float')]
    private float $credit = 0;

    // Сумма оплаты встречным предоставлением (сертификаты, др. мат.ценности) (2 знака после запятой), Тег 1217
    #[SerializedName('CashProvision')]
    #[Type('float')]
    private float $cashProvision = 0;



    public function getName () : string
    {
        return 'RegisterCheck';
    }

    /**
     * @return string
     */
    public function getKkmInn (): string
    {
        return $this->kkmInn;
    }

    /**
     * @param string $kkmInn
     * @return $this
     */
    public function setKkmInn ( string $kkmInn ): static
    {
        $this->kkmInn = $kkmInn;
        return $this;
    }

    /**
     * @return bool
     */
    public function isFiscal (): bool
    {
        return $this->fiscal;
    }

    /**
     * @param bool $isFiscal
     * @return $this
     */
    public function setFiscal ( bool $isFiscal ): static
    {
        $this->fiscal = $isFiscal;
        return $this;
    }

    /**
     * @return int
     */
    public function getCheckType (): ?int
    {
        return $this->checkType;
    }

    /**
     * @param int $checkType
     * @return $this
     */
    public function setCheckType ( int $checkType ): static
    {
        $this->checkType = $checkType;
        return $this;
    }

    /**
     * @return bool
     */
    public function getOpenedCheckCancellation (): bool
    {
        return $this->cancelOpenedCheck;
    }

    /**
     * @param bool $cancelOpenedCheck
     * @return $this
     */
    public function setOpenedCheckCancellation ( bool $cancelOpenedCheck ): static
    {
        $this->cancelOpenedCheck = $cancelOpenedCheck;
        return $this;
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
     * @return $this
     */
    public function setPrint ( bool $print ): static
    {
        $this->print = $print;
        return $this;
    }

    /**
     * @return string
     */
    public function getCashierName (): string
    {
        return $this->cashierName;
    }

    /**
     * @param string $cashierName
     * @return $this
     */
    public function setCashierName ( string $cashierName ): static
    {
        $this->cashierName = $cashierName;
        return $this;
    }

    /**
     * @return int
     */
    public function getTax ()
    {
        return $this->tax ?? '';
    }

    /**
     * @param int $tax
     * @return $this
     */
    public function setTax ( $tax ): static
    {
        $this->tax = $tax;
        return $this;
    }

    /**
     * @return array
     */
    public function getAdditionalProps (): array
    {
        return $this->additionalProps;
    }

    /**
     * @param array $additionalProps
     * @return $this
     */
    public function setAdditionalProps ( array $additionalProps ): static
    {
        $this->additionalProps = $additionalProps;
        return $this;
    }



    /**
     * @return array
     */
    public function getProps (): array
    {
        return $this->props;
    }

    /**
     * @param array $props
     * @return $this
     */
    public function setProps ( array $props ): static
    {
        $this->props = $props;
        return $this;
    }

    /**
     * @param CheckProperty $prop
     * @return $this
     */
    public function addProp ( CheckProperty $prop ): static
    {
        $this->props[] = $prop;
        return $this;
    }

    /**
     * @return array
     */
    public function getStrings (): array
    {
        return $this->strings;
    }

    /**
     * @param array $strings
     * @return $this
     */
    public function setStrings ( array $strings ): static
    {
        $this->strings = $strings;
        return $this;
    }

    /**
     * @param CheckString $string
     * @return $this
     */
    public function addString( CheckString $string ): static
    {
        $this->strings[] = $string;
        return $this;
    }




    /**
     * @return float
     */
    public function getCashlessPayment1 ()
    {
        return $this->cashlessPayment1;
    }

    /**
     * @param float $cashlessPayment1
     * @return $this
     */
    public function setCashlessPayment1 ( float $cashlessPayment1 ): static
    {
        $this->cashlessPayment1 = $cashlessPayment1;
        return $this;
    }

    /**
     * @return float
     */
    public function getCashlessPayment2 ()
    {
        return $this->cashlessPayment2;
    }

    /**
     * @param float $cashlessPayment2
     * @return $this
     */
    public function setCashlessPayment2 ( float $cashlessPayment2 ): static
    {
        $this->cashlessPayment2 = $cashlessPayment2;
        return $this;
    }

    /**
     * @return float
     */
    public function getCashlessPayment3 ()
    {
        return $this->cashlessPayment3;
    }

    /**
     * @param float $cashlessPayment3
     * @return $this
     */
    public function setCashlessPayment3 ( float $cashlessPayment3 ): static
    {
        $this->cashlessPayment3 = $cashlessPayment3;
        return $this;
    }

    /**
     * @return string
     */
    public function getClientAddress (): string
    {
        return $this->clientAddress;
    }

    /**
     * @param string $clientAddress
     * @return $this
     */
    public function setClientAddress ( string $clientAddress ): static
    {
        $this->clientAddress = $clientAddress;
        return $this;
    }

    /**
     * @return string
     */
    public function getFactoryNumber (): string
    {
        return $this->factoryNumber;
    }

    /**
     * @param string $deviceNumber
     * @return $this
     */
    public function setFactoryNumber ( string $deviceNumber ): static
    {
        $this->factoryNumber = $deviceNumber;
        return $this;
    }

    public function setPrintSlipForCashier(bool $printSlipForCashier): static
    {
        $this->printSlipForCashier = $printSlipForCashier;
        return $this;
    }

    public function getPrintSlipForCashier(): bool
    {
        return $this->printSlipForCashier;
    }

    public function setPrintSlipAfterCheck(bool $printSlipAfterCheck): static
    {
        $this->printSlipAfterCheck = $printSlipAfterCheck;
        return $this;
    }

    public function getPrintSlipAfterCheck(): bool
    {
        return $this->printSlipAfterCheck;
    }

    public function getCash(): float
    {
        return $this->cash;
    }

    public function setCash ( float $cash ): static
    {
        $this->cash = round($cash, 2, PHP_ROUND_HALF_DOWN);
        return $this;
    }

    public function setElectronicPayment(float $electronicPayment): static
    {
        $this->electronicPayment = round($electronicPayment, 2, PHP_ROUND_HALF_DOWN);;
        return $this;
    }

    public function getElectronicPayment(): float
    {
        return $this->electronicPayment;
    }

    public function setAdvancePayment(float $advancePayment): static
    {
        $this->advancePayment = round($advancePayment, 2, PHP_ROUND_HALF_DOWN);;
        return $this;
    }

    public function getAdvancePayment(): float
    {
        return $this->advancePayment;
    }

    public function setCredit(float $credit): static
    {
        $this->credit = round($credit, 2, PHP_ROUND_HALF_DOWN);;
        return $this;
    }

    public function getCredit(): float
    {
        return $this->credit;
    }

    public function setCashProvision(float $cashProvision): static
    {
        $this->cashProvision = round($cashProvision, 2, PHP_ROUND_HALF_DOWN);;
        return $this;
    }

    public function getCashProvision(): float
    {
        return $this->cashProvision;
    }
}
