<?php

namespace KKMClient\Models\Queries\Chunks;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\AccessType;
use KKMClient\Models\Queries\Chunks\EGAIS;


/**
 * Class RegisterChunk
 * @package KKMClient\Queries\Chunks
 */
#[AccessType(type:'public_method')]
class RegisterChunk
{
    /**
     * @var string
     */
    #[SerializedName('Name')]
    #[Type('string')] // Наименование товара (64 символа)
    protected $name;

    /**
     * @var integer
     */
    #[SerializedName('Quantity')]
    #[Type('integer')] // Количество товара
    protected $quantity;

    /**
     * @var float
     */
    #[SerializedName('Price')]
    #[Type('float')] // Стоимость шт. без скидки
    protected $price;

    /**
     * @var float
     */
    #[SerializedName('Amount')]
    #[Type('float')] // Конечная сумма строки с учётом всех скидок/наценок
    protected $amount;

    /**
     * @var integer
     */
    #[SerializedName('Department')]
    #[Type('integer')] // Отдел учёта.
    protected $department;

    /**
     * @var integer
     */
    #[SerializedName('Tax')]
    #[Type('integer')] // Ставка НДС (%) / -1 НДС не облагается.
    protected int $tax = -1;

    /**
     * @var string
     */
    #[SerializedName('EAN13')]
    #[Type('string')] // Штрихкод EAN13 для передачи в ОФД (Не печатается)
    protected $ean13;

    /**
     * @var \KKMClient\Models\Queries\Chunks\EGAIS
     */
    #[SerializedName('EGAIS')]
    #[Type('KKMClient\Models\Queries\Chunks\EGAIS')] // Данные для ЕГАИС.
    protected $egais;


    /**
     * // Признак способа расчета. Тег ОФД 1214. Для ФФД.1.05 и выше обязательное поле
     * // 1: "ПРЕДОПЛАТА 100% (Полная предварительная оплата до момента передачи предмета расчета)"
     * // 2: "ПРЕДОПЛАТА (Частичная предварительная оплата до момента передачи предмета расчета)"
     * // 3: "АВАНС"
     * // 4: "ПОЛНЫЙ РАСЧЕТ (Полная оплата, в том числе с учетом аванса в момент передачи предмета расчета)"
     * // 5: "ЧАСТИЧНЫЙ РАСЧЕТ И КРЕДИТ (Частичная оплата предмета расчета в момент его передачи с последующей оплатой в кредит )"
     * // 6: "ПЕРЕДАЧА В КРЕДИТ (Передача предмета расчета без его оплаты в момент его передачи с последующей оплатой в кредит)"
     * // 7: "ОПЛАТА КРЕДИТА (Оплата предмета расчета после его передачи с оплатой в кредит )"
     */
    #[SerializedName('SignMethodCalculation')]
    #[Type('integer')]
    protected int $signMethodCalculation = 4;


    /**
     * // Признак предмета расчета. Тег ОФД 1212. Для ФФД.1.05 и выше обязательное поле
     * // 1: "ТОВАР (наименование и иные сведения, описывающие товар)"
     * // 2: "ПОДАКЦИЗНЫЙ ТОВАР (наименование и иные сведения, описывающие товар)"
     * // 3: "РАБОТА (наименование и иные сведения, описывающие работу)"
     * // 4: "УСЛУГА (наименование и иные сведения, описывающие услугу)"
     * // 5: "СТАВКА АЗАРТНОЙ ИГРЫ (при осуществлении деятельности по проведению азартных игр)"
     * // 6: "ВЫИГРЫШ АЗАРТНОЙ ИГРЫ (при осуществлении деятельности по проведению азартных игр)"
     * // 7: "ЛОТЕРЕЙНЫЙ БИЛЕТ (при осуществлении деятельности по проведению лотерей)"
     * // 8: "ВЫИГРЫШ ЛОТЕРЕИ (при осуществлении деятельности по проведению лотерей)"
     * // 9: "ПРЕДОСТАВЛЕНИЕ РИД (предоставлении прав на использование результатов интеллектуальной деятельности или средств индивидуализации)"
     * // 10: "ПЛАТЕЖ (аванс, задаток, предоплата, кредит, взнос в счет оплаты, пени, штраф, вознаграждение, бонус и иной аналогичный предмет расчета)"
     * // 11: "АГЕНТСКОЕ ВОЗНАГРАЖДЕНИЕ (вознаграждение (банковского)платежного агента/субагента, комиссионера, поверенного или иным агентом)"
     * // 12: "СОСТАВНОЙ ПРЕДМЕТ РАСЧЕТА (предмет расчета, состоящем из предметов, каждому из которых может быть присвоено вышестоящее значение"
     * // 13: "ИНОЙ ПРЕДМЕТ РАСЧЕТА (предмет расчета, не относящемуся к предметам расчета, которым может быть присвоено вышестоящее значение"
     * // 14: "ИМУЩЕСТВЕННОЕ ПРАВО" (передача имущественных прав)
     * // 15: "ВНЕРЕАЛИЗАЦИОННЫЙ ДОХОД"
     * // 16: "СТРАХОВЫЕ ВЗНОСЫ" (суммы расходов, уменьшающих сумму налога (авансовых платежей) в соответствии с пунктом 3.1 статьи 346.21 Налогового кодекса Российской Федерации)
     * // 17: "ТОРГОВЫЙ СБОР" (суммы уплаченного торгового сбора)
     * // 18: "КУРОРТНЫЙ СБОР"
     * // 19: "ЗАЛОГ"
     * // 20: "РАСХОД" - суммы произведенных расходов в соответствии со статьей 346.16 Налогового кодекса Российской Федерации, уменьшающих доход
     * // 21: "ВЗНОСЫ НА ОБЯЗАТЕЛЬНОЕ ПЕНСИОННОЕ СТРАХОВАНИЕ ИП" или "ВЗНОСЫ НА ОПС ИП"
     * // 22: "ВЗНОСЫ НА ОБЯЗАТЕЛЬНОЕ ПЕНСИОННОЕ СТРАХОВАНИЕ" или "ВЗНОСЫ НА ОПС"
     * // 23: "ВЗНОСЫ НА ОБЯЗАТЕЛЬНОЕ МЕДИЦИНСКОЕ СТРАХОВАНИЕ ИП" или "ВЗНОСЫ НА ОМС ИП"
     * // 24: "ВЗНОСЫ НА ОБЯЗАТЕЛЬНОЕ МЕДИЦИНСКОЕ СТРАХОВАНИЕ" или "ВЗНОСЫ НА ОМС"
     * // 25: "ВЗНОСЫ НА ОБЯЗАТЕЛЬНОЕ СОЦИАЛЬНОЕ СТРАХОВАНИЕ" или "ВЗНОСЫ НА ОСС"
     * // 26: "ПЛАТЕЖ КАЗИНО" прием и выплата денежных средств при осуществлении казино и залами игровых автоматов расчетов с использованием обменных знаков игорного заведения
     */
    #[SerializedName('SignCalculationObject')]
    #[Type('integer')]
    protected int $signCalculationObject = 1;


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
    public function setName ( string $name ): static
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
    public function setQuantity ( int $quantity ): static
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
    public function setPrice ( float $price ): static
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
    public function setAmount ( float $amount ): static
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
    public function setDepartment ( int $department ): static
    {
        $this->department = $department;
        return $this;
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
    public function setTax ( int $tax ): static
    {
        $this->tax = $tax;
        return $this;
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
    public function setEan13 ( string $ean13 ): static
    {
        $this->ean13 = $ean13;
        return $this;
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
    public function setEgais ( EGAIS $egais ): static
    {
        $this->egais = $egais;
        return $this;
    }

    public function setSignMethodCalculation(int $signMethodCalculation): static
    {
        $this->signMethodCalculation = $signMethodCalculation;
        return $this;
    }

    public function getSignMethodCalculation(): int
    {
        return $this->signMethodCalculation;
    }

    public function setSignCalculationObject(int $signCalculationObject): static
    {
        $this->signCalculationObject = $signCalculationObject;
        return $this;
    }

    public function getSignCalculationObject(): int
    {
        return $this->signCalculationObject;
    }


}
