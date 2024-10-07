<?php

namespace KKMClient\Models\Responses\Chunks;


use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\AccessType;
use JMS\Serializer\Annotation\Accessor;

/**
 * Class InformationChunk
 * @package KKMClient\Models\Devices\Chunks
 */
#[AccessType(type:'public_method')]
class InformationChunk
{
    /**
     * @var string
     */
    #[SerializedName('UrlServerOfd')]
    #[Type('string')]
    protected $ofdServer;

    /**
     * @var string
     */
    #[SerializedName('PortServerOfd')]
    #[Type('string')]
    protected $ofdServerPort;

    /**
     * @var string
     */
    #[SerializedName('NameOFD')]
    #[Type('string')]
    protected $ofdName;

    /**
     * @var string
     */
    #[SerializedName('UrlOfd')]
    #[Type('string')]
    protected $ofdUrl;

    /**
     * @var string
     */
    #[SerializedName('InnOfd')]
    #[Type('string')]
    protected $ofdTIN;

    /**
     * @var string
     */
    #[SerializedName('NameOrganization')]
    #[Type('string')]
    protected $ownerName;

    /**
     * @var string
     */
    #[SerializedName('TaxVariant')]
    #[Type('string')]
    protected $taxVariant;

    /**
     * @var string
     */
    #[SerializedName('AddressSettle')]
    #[Type('string')]
    protected $ownerAddress;

    /**
     * @var bool
     */
    #[SerializedName('EncryptionMode')]
    #[Type('boolean')]
    #[Accessor(getter: 'isEncryptionModeEnabled', setter: 'setEncryptionMode')]
    protected $encryptionMode;

    /**
     * @var bool
     */
    #[SerializedName('OfflineMode')]
    #[Type('boolean')]
    #[Accessor(getter: 'isOfflineModeEnabled', setter: 'setOfflineMode')]
    protected $offlineMode;

    /**
     * @var bool
     */
    #[SerializedName('AutomaticMode')]
    #[Type('boolean')]
    #[Accessor(getter: 'isAutomaticModeEnabled', setter: 'setAutomaticMode')]
    protected $automaticMode;

    /**
     * @var bool
     */
    #[SerializedName('InternetMode')]
    #[Type('boolean')]
    #[Accessor(getter: 'isInternetModeEnabled', setter: 'setInternetMode')]
    protected $internetMode;

    /**
     * @var bool
     */
    #[SerializedName('BSOMode')]
    #[Type('boolean')]
    #[Accessor(getter: 'isBSOModeEnabled', setter: 'setBSOMode')]
    protected $BSOMode;

    /**
     * @var bool
     */
    #[SerializedName('ServiceMode')]
    #[Type('boolean')]
    #[Accessor(getter: 'isServiceModeEnabled', setter: 'setServiceMode')]
    protected $serviceMode;

    /**
     * @var string
     */
    #[SerializedName('InnOrganization')]
    #[Type('string')]
    protected $ownerTIN;

    /**
     * @var string
     */
    #[SerializedName('KktNumber')]
    #[Type('string')]
    protected $kktNumber;

    /**
     * @var string
     */
    #[SerializedName('FnNumber')]
    #[Type('string')]
    protected $fnNumber;

    /**
     * @var string
     */
    #[SerializedName('RegNumber')]
    #[Type('string')]
    protected $regNumber;

    /**
     * @var string
     */
    #[SerializedName('Command')]
    #[Type('string')]
    protected $command;

    /**
     * @var bool
     */
    #[SerializedName('FN_IsFiscal')]
    #[Type('boolean')]
    #[Accessor(getter: 'isFiscal', setter: 'setFiscal')]
    protected $isFiscal;

    /**
     * @var string
     */
    #[SerializedName('OFD_Error')]
    #[Type('string')]
    protected $ofdError;

    /**
     * @var integer
     */
    #[SerializedName('OFD_NumErrorDoc')]
    #[Type('integer')]
    protected $ofdErrorDocNumber;

    /**
     * @var \DateTime
     */
    #[SerializedName('OFD_DateErrorDoc')]
    #[Type("DateTime<'Y-m-d\\TH:i:s'>")]
    protected $ofdErrorDocDate;

    /**
     * @var \DateTime
     */
    #[SerializedName('FN_DateEnd')]
    #[Type("DateTime<'Y-m-d\\TH:i:s'>")]
    protected $fnRegistrationEndingDate;

    /**
     * @var integer
     */
    #[SerializedName('SessionState')]
    #[Type('integer')]
    protected $sessionState;

    /**
     * @return string
     */
    public function getOfdServer (): string
    {
        return $this->ofdServer;
    }

    /**
     * @param string $ofdServer
     */
    public function setOfdServer ( string $ofdServer ): void
    {
        $this->ofdServer = $ofdServer;
    }

    /**
     * @return string
     */
    public function getOfdServerPort (): string
    {
        return $this->ofdServerPort;
    }

    /**
     * @param string $ofdServerPort
     */
    public function setOfdServerPort ( string $ofdServerPort ): void
    {
        $this->ofdServerPort = $ofdServerPort;
    }

    /**
     * @return string
     */
    public function getOfdName (): string
    {
        return $this->ofdName;
    }

    /**
     * @param string $ofdName
     */
    public function setOfdName ( string $ofdName ): void
    {
        $this->ofdName = $ofdName;
    }

    /**
     * @return string
     */
    public function getOfdUrl (): string
    {
        return $this->ofdUrl;
    }

    /**
     * @param string $ofdUrl
     */
    public function setOfdUrl ( string $ofdUrl ): void
    {
        $this->ofdUrl = $ofdUrl;
    }

    /**
     * @return string
     */
    public function getOfdTIN (): string
    {
        return $this->ofdTIN;
    }

    /**
     * @param string $ofdTIN
     */
    public function setOfdTIN ( string $ofdTIN ): void
    {
        $this->ofdTIN = $ofdTIN;
    }

    /**
     * @return string
     */
    public function getOwnerName (): string
    {
        return $this->ownerName;
    }

    /**
     * @param string $ownerName
     */
    public function setOwnerName ( string $ownerName ): void
    {
        $this->ownerName = $ownerName;
    }

    /**
     * @return string
     */
    public function getTaxVariant (): string
    {
        return $this->taxVariant;
    }

    /**
     * @param string $taxVariant
     */
    public function setTaxVariant ( string $taxVariant ): void
    {
        $this->taxVariant = $taxVariant;
    }

    /**
     * @return string
     */
    public function getOwnerAddress (): string
    {
        return $this->ownerAddress;
    }

    /**
     * @param string $ownerAddress
     */
    public function setOwnerAddress ( string $ownerAddress ): void
    {
        $this->ownerAddress = $ownerAddress;
    }

    /**
     * @return bool
     */
    public function isEncryptionModeEnabled (): bool
    {
        return $this->encryptionMode;
    }

    /**
     * @param bool $encryptionMode
     */
    public function setEncryptionMode ( bool $encryptionMode ): void
    {
        $this->encryptionMode = $encryptionMode;
    }

    /**
     * @return bool
     */
    public function isOfflineModeEnabled (): bool
    {
        return $this->offlineMode;
    }

    /**
     * @param bool $offlineMode
     */
    public function setOfflineMode ( bool $offlineMode ): void
    {
        $this->offlineMode = $offlineMode;
    }

    /**
     * @return bool
     */
    public function isAutomaticModeEnabled (): bool
    {
        return $this->automaticMode;
    }

    /**
     * @param bool $automaticMode
     */
    public function setAutomaticMode ( bool $automaticMode ): void
    {
        $this->automaticMode = $automaticMode;
    }

    /**
     * @return bool
     */
    public function isInternetModeEnabled (): bool
    {
        return $this->internetMode;
    }

    /**
     * @param bool $internetMode
     */
    public function setInternetMode ( bool $internetMode ): void
    {
        $this->internetMode = $internetMode;
    }

    /**
     * @return bool
     */
    public function isBSOModeEnabled (): bool
    {
        return $this->BSOMode;
    }

    /**
     * @param bool $BSOMode
     */
    public function setBSOMode ( bool $BSOMode ): void
    {
        $this->BSOMode = $BSOMode;
    }

    /**
     * @return bool
     */
    public function isServiceModeEnabled (): bool
    {
        return $this->serviceMode;
    }

    /**
     * @param bool $serviceMode
     */
    public function setServiceMode ( bool $serviceMode ): void
    {
        $this->serviceMode = $serviceMode;
    }

    /**
     * @return string
     */
    public function getOwnerTIN (): string
    {
        return $this->ownerTIN;
    }

    /**
     * @param string $ownerTIN
     */
    public function setOwnerTIN ( string $ownerTIN ): void
    {
        $this->ownerTIN = $ownerTIN;
    }

    /**
     * @return string
     */
    public function getKktNumber (): string
    {
        return $this->kktNumber;
    }

    /**
     * @param string $kktNumber
     */
    public function setKktNumber ( string $kktNumber ): void
    {
        $this->kktNumber = $kktNumber;
    }

    /**
     * @return string
     */
    public function getFnNumber (): string
    {
        return $this->fnNumber;
    }

    /**
     * @param string $fnNumber
     */
    public function setFnNumber ( string $fnNumber ): void
    {
        $this->fnNumber = $fnNumber;
    }

    /**
     * @return string
     */
    public function getRegNumber (): string
    {
        return $this->regNumber;
    }

    /**
     * @param string $regNumber
     */
    public function setRegNumber ( string $regNumber ): void
    {
        $this->regNumber = $regNumber;
    }

    /**
     * @return string
     */
    public function getCommand (): string
    {
        return $this->command;
    }

    /**
     * @param string $command
     */
    public function setCommand ( string $command ): void
    {
        $this->command = $command;
    }

    /**
     * @return bool
     */
    public function isFiscal (): bool
    {
        return $this->isFiscal;
    }

    /**
     * @param bool $isFiscal
     */
    public function setFiscal ( bool $isFiscal ): void
    {
        $this->isFiscal = $isFiscal;
    }

    /**
     * @return string
     */
    public function getOfdError (): string
    {
        return $this->ofdError;
    }

    /**
     * @param string $ofdError
     */
    public function setOfdError ( string $ofdError ): void
    {
        $this->ofdError = $ofdError;
    }

    /**
     * @return int
     */
    public function getOfdErrorDocNumber (): int
    {
        return $this->ofdErrorDocNumber;
    }

    /**
     * @param int $ofdErrorDocNumber
     */
    public function setOfdErrorDocNumber ( int $ofdErrorDocNumber ): void
    {
        $this->ofdErrorDocNumber = $ofdErrorDocNumber;
    }

    /**
     * @return \DateTime
     */
    public function getOfdErrorDocDate (): \DateTime
    {
        return $this->ofdErrorDocDate;
    }

    /**
     * @param \DateTime $ofdErrorDocDate
     */
    public function setOfdErrorDocDate ( \DateTime $ofdErrorDocDate ): void
    {
        $this->ofdErrorDocDate = $ofdErrorDocDate;
    }

    /**
     * @return \DateTime
     */
    public function getFnRegistrationEndingDate (): \DateTime
    {
        return $this->fnRegistrationEndingDate;
    }

    /**
     * @param \DateTime $fnRegistrationEndingDate
     */
    public function setFnRegistrationEndingDate ( \DateTime $fnRegistrationEndingDate ): void
    {
        $this->fnRegistrationEndingDate = $fnRegistrationEndingDate;
    }

    /**
     * @return int
     */
    public function getSessionState (): int
    {
        return $this->sessionState;
    }

    /**
     * @param int $sessionState
     */
    public function setSessionState ( int $sessionState ): void
    {
        $this->sessionState = $sessionState;
    }
}
