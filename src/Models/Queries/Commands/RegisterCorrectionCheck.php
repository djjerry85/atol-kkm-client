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
 * Class RegisterCorrectionCheck
 * @package KKMClient\Models\Queries\Commands
 */
#[ExclusionPolicy('none')]
class RegisterCorrectionCheck extends RegisterCheck
{
    /**
     * Тип коррекции 0 - самостоятельно 1 - по предписанию, Тег 1173, Только для чеков коррекции!
     * CorrectionType: 0,
     */
    #[SerializedName('CorrectionType')]
    #[Type('integer')]
    private int $correctionType = 0;

    /**
     * Дата документа основания для коррекции, Тег ОФД 1178, Только для чеков коррекции!
     * CorrectionBaseDate: '2017-06-21T15:30:45',
     */
    #[SerializedName('CorrectionBaseDate')]
    #[Type('string')]
    private ?string $correctionBaseDate = null;

    /**
     * Номер документа основания для коррекции, Тег ОФД 1179, Только для чеков коррекции!
     * CorrectionBaseNumber: "MOS-4516",
     */
    #[SerializedName('CorrectionBaseNumber')]
    #[Type('string')]
    private ?string $correctionBaseNumber = null;

    public function setCorrectionType(int $correctionType): RegisterCorrectionCheck
    {
        $this->correctionType = $correctionType;
        return $this;
    }

    public function setCorrectionBaseDate(?string $correctionBaseDate): RegisterCorrectionCheck
    {
        $this->correctionBaseDate = $correctionBaseDate;
        return $this;
    }

    public function setCorrectionBaseNumber(?string $correctionBaseNumber): RegisterCorrectionCheck
    {
        $this->correctionBaseNumber = $correctionBaseNumber;
        return $this;
    }
    
}
