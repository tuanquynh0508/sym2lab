<?php

namespace Lab\SerializertestBundle\Model;

use JMS\Serializer\Annotation\Type;

class Customer
{
    /**
     * @var string
     * @Type("string")
     */
    public $customerKey;

    /**
     * @var string
     * @Type("string")
     */
    public $customerType;

    /**
     * @var CustomerHandle
     * @type("Lab\SerializertestBundle\Model\CustomerHandle")
     */
    public $defaultHandle;

    /**
     * @var string
     * @Type("string")
     */
    public $godFatherKey;

    /**
     * @var array
     * @Type("array<string, string>")
     */
    public $handleKeys;

    /**
     * @var string
     * @Type("string")
     */
    public $login;

    /**
     * @var string
     * @Type("string")
     */
    public $password;

    /**
     * @var string
     * @Type("string")
     */
    public $orangeCode;

    /**
     * @var string
     * @Type("string")
     */
    public $rateBand;

    /**
     * @var string
     * @Type("string")
     */
    public $partner;

    /**
     * @var string
     * @Type("string")
     */
    public $saariCode;

    /**
     * @var string
     * @Type("string")
     */
    public $hasRejection;

    /**
     * @var DateTime
     * @Type("DateTime")
     */
    public $creationDate;

    /**
     * @var DateTime
     * @Type("DateTime")
     */
    public $changeDate;

    /**
     * @var string
     * @Type("string")
     */
    public $createdBy;

    /**
     * @var DateTime
     * @Type("DateTime")
     */
    public $lastLoginDate;

    /**
     * @var DateTime
     * @Type("DateTime")
     */
    public $accountValidationDate;

    /**
     * @var string
     * @Type("string")
     */
    public $activationKey;

    /**
     * @var bool
     * @Type("boolean")
     */
    public $isMarguerite;

    /**
     * @var DateTime
     * @Type("DateTime")
     */
    public $dateRegistrationMarguerite;

    /**
     * @var string
     * @Type("string")
     */
    public $versionMarguerite;

    /**
     * @var bool
     * @Type("boolean")
     */
    public $isAccountValidated;

    /**
     * @var string
     * @Type("string")
     */
    public $segmentTVA;

    /**
     * @var string
     * @Type("string")
     */
    public $orderRef;

    /**
     * @var bool
     * @Type("boolean")
     */
    public $factureEuro;

    /**
     * @var string
     * @Type("string")
     */
    public $sendDocumentBy;

    /**
     * @var bool
     * @Type("boolean")
     */
    public $flagPresenceAnnuaireMVNO;

    /**
     * @var bool
     * @Type("boolean")
     */
    public $flagOnlyNomMVNO;

    /**
     * @var bool
     * @Type("boolean")
     */
    public $flagAdresseCompleteMVNO;

    /**
     * @var bool
     * @Type("boolean")
     */
    public $flagAntiprospectionMVNO;

    /**
     * @var bool
     * @Type("boolean")
     */
    public $flagPresenceAdresseEmail;

    /**
     * @var bool
     * @Type("boolean")
     */
    public $flagPresenceProfession;

    /**
     * @var bool
     * @Type("boolean")
     */
    public $flagReceptionCNI;

    /**
     * @var bool
     * @Type("boolean")
     */
    public $flagReceptionJD;

    /**
     * @var string
     * @Type("string")
     */
    public $siret;

    /**
     * @var string
     * @Type("string")
     */
    public $codeApe;

    /**
     * @var bool
     * @Type("boolean")
     */
    public $flagAntiannuaireInverseMVNO;

    /**
     * @var DateTime
     * @Type("DateTime")
     */
    public $birthDate;

    /**
     * @var array
     * @Type("array<string, string>")
     */
    public $customerRapprochement;

    /**
     * Get the value of Customer Key.
     *
     * @return string
     */
    public function getCustomerKey()
    {
        return $this->customerKey;
    }

    /**
     * Set the value of Customer Key.
     *
     * @param string customerKey
     *
     * @return self
     */
    public function setCustomerKey($customerKey)
    {
        $this->customerKey = $customerKey;

        return $this;
    }

    /**
     * Get the value of Customer Type.
     *
     * @return string
     */
    public function getCustomerType()
    {
        return $this->customerType;
    }

    /**
     * Set the value of Customer Type.
     *
     * @param string customerType
     *
     * @return self
     */
    public function setCustomerType($customerType)
    {
        $this->customerType = $customerType;

        return $this;
    }

    /**
     * Get the value of Default Handle.
     *
     * @return CustomerHandle
     */
    public function getDefaultHandle()
    {
        return $this->defaultHandle;
    }

    /**
     * Set the value of Default Handle.
     *
     * @param CustomerHandle $defaultHandle
     *
     * @return self
     */
    public function setDefaultHandle(CustomerHandle $defaultHandle)
    {
        $this->defaultHandle = $defaultHandle;

        return $this;
    }

    /**
     * Get the value of God Father Key.
     *
     * @return string
     */
    public function getGodFatherKey()
    {
        return $this->godFatherKey;
    }

    /**
     * Set the value of God Father Key.
     *
     * @param string godFatherKey
     *
     * @return self
     */
    public function setGodFatherKey($godFatherKey)
    {
        $this->godFatherKey = $godFatherKey;

        return $this;
    }

    /**
     * Get the value of Handle Keys.
     *
     * @return array
     */
    public function getHandleKeys()
    {
        return $this->handleKeys;
    }

    /**
     * Set the value of Handle Keys.
     *
     * @param array handleKeys
     *
     * @return self
     */
    public function setHandleKeys(array $handleKeys)
    {
        $this->handleKeys = $handleKeys;

        return $this;
    }

    /**
     * Get the value of Login.
     *
     * @return string
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * Set the value of Login.
     *
     * @param string login
     *
     * @return self
     */
    public function setLogin($login)
    {
        $this->login = $login;

        return $this;
    }

    /**
     * Get the value of Password.
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set the value of Password.
     *
     * @param string password
     *
     * @return self
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get the value of Orange Code.
     *
     * @return string
     */
    public function getOrangeCode()
    {
        return $this->orangeCode;
    }

    /**
     * Set the value of Orange Code.
     *
     * @param string orangeCode
     *
     * @return self
     */
    public function setOrangeCode($orangeCode)
    {
        $this->orangeCode = $orangeCode;

        return $this;
    }

    /**
     * Get the value of Rate Band.
     *
     * @return string
     */
    public function getRateBand()
    {
        return $this->rateBand;
    }

    /**
     * Set the value of Rate Band.
     *
     * @param string rateBand
     *
     * @return self
     */
    public function setRateBand($rateBand)
    {
        $this->rateBand = $rateBand;

        return $this;
    }

    /**
     * Get the value of Partner.
     *
     * @return string
     */
    public function getPartner()
    {
        return $this->partner;
    }

    /**
     * Set the value of Partner.
     *
     * @param string partner
     *
     * @return self
     */
    public function setPartner($partner)
    {
        $this->partner = $partner;

        return $this;
    }

    /**
     * Get the value of Saari Code.
     *
     * @return string
     */
    public function getSaariCode()
    {
        return $this->saariCode;
    }

    /**
     * Set the value of Saari Code.
     *
     * @param string saariCode
     *
     * @return self
     */
    public function setSaariCode($saariCode)
    {
        $this->saariCode = $saariCode;

        return $this;
    }

    /**
     * Get the value of Has Rejection.
     *
     * @return string
     */
    public function getHasRejection()
    {
        return $this->hasRejection;
    }

    /**
     * Set the value of Has Rejection.
     *
     * @param string hasRejection
     *
     * @return self
     */
    public function setHasRejection($hasRejection)
    {
        $this->hasRejection = $hasRejection;

        return $this;
    }

    /**
     * Get the value of Creation Date.
     *
     * @return DateTime
     */
    public function getCreationDate()
    {
        return $this->creationDate;
    }

    /**
     * Set the value of Creation Date.
     *
     * @param DateTime creationDate
     *
     * @return self
     */
    public function setCreationDate(DateTime $creationDate)
    {
        $this->creationDate = $creationDate;

        return $this;
    }

    /**
     * Get the value of Change Date.
     *
     * @return DateTime
     */
    public function getChangeDate()
    {
        return $this->changeDate;
    }

    /**
     * Set the value of Change Date.
     *
     * @param DateTime changeDate
     *
     * @return self
     */
    public function setChangeDate(DateTime $changeDate)
    {
        $this->changeDate = $changeDate;

        return $this;
    }

    /**
     * Get the value of Created By.
     *
     * @return string
     */
    public function getCreatedBy()
    {
        return $this->createdBy;
    }

    /**
     * Set the value of Created By.
     *
     * @param string createdBy
     *
     * @return self
     */
    public function setCreatedBy($createdBy)
    {
        $this->createdBy = $createdBy;

        return $this;
    }

    /**
     * Get the value of Last Login Date.
     *
     * @return DateTime
     */
    public function getLastLoginDate()
    {
        return $this->lastLoginDate;
    }

    /**
     * Set the value of Last Login Date.
     *
     * @param DateTime lastLoginDate
     *
     * @return self
     */
    public function setLastLoginDate(DateTime $lastLoginDate)
    {
        $this->lastLoginDate = $lastLoginDate;

        return $this;
    }

    /**
     * Get the value of Account Validation Date.
     *
     * @return DateTime
     */
    public function getAccountValidationDate()
    {
        return $this->accountValidationDate;
    }

    /**
     * Set the value of Account Validation Date.
     *
     * @param DateTime accountValidationDate
     *
     * @return self
     */
    public function setAccountValidationDate(DateTime $accountValidationDate)
    {
        $this->accountValidationDate = $accountValidationDate;

        return $this;
    }

    /**
     * Get the value of Activation Key.
     *
     * @return string
     */
    public function getActivationKey()
    {
        return $this->activationKey;
    }

    /**
     * Set the value of Activation Key.
     *
     * @param string activationKey
     *
     * @return self
     */
    public function setActivationKey($activationKey)
    {
        $this->activationKey = $activationKey;

        return $this;
    }

    /**
     * Get the value of Is Marguerite.
     *
     * @return bool
     */
    public function getIsMarguerite()
    {
        return $this->isMarguerite;
    }

    /**
     * Set the value of Is Marguerite.
     *
     * @param bool isMarguerite
     *
     * @return self
     */
    public function setIsMarguerite($isMarguerite)
    {
        $this->isMarguerite = $isMarguerite;

        return $this;
    }

    /**
     * Get the value of Date Registration Marguerite.
     *
     * @return DateTime
     */
    public function getDateRegistrationMarguerite()
    {
        return $this->dateRegistrationMarguerite;
    }

    /**
     * Set the value of Date Registration Marguerite.
     *
     * @param DateTime dateRegistrationMarguerite
     *
     * @return self
     */
    public function setDateRegistrationMarguerite(DateTime $dateRegistrationMarguerite)
    {
        $this->dateRegistrationMarguerite = $dateRegistrationMarguerite;

        return $this;
    }

    /**
     * Get the value of Version Marguerite.
     *
     * @return string
     */
    public function getVersionMarguerite()
    {
        return $this->versionMarguerite;
    }

    /**
     * Set the value of Version Marguerite.
     *
     * @param string versionMarguerite
     *
     * @return self
     */
    public function setVersionMarguerite($versionMarguerite)
    {
        $this->versionMarguerite = $versionMarguerite;

        return $this;
    }

    /**
     * Get the value of Is Account Validated.
     *
     * @return bool
     */
    public function getIsAccountValidated()
    {
        return $this->isAccountValidated;
    }

    /**
     * Set the value of Is Account Validated.
     *
     * @param bool isAccountValidated
     *
     * @return self
     */
    public function setIsAccountValidated($isAccountValidated)
    {
        $this->isAccountValidated = $isAccountValidated;

        return $this;
    }

    /**
     * Get the value of Segment.
     *
     * @return string
     */
    public function getSegmentTVA()
    {
        return $this->segmentTVA;
    }

    /**
     * Set the value of Segment.
     *
     * @param string segmentTVA
     *
     * @return self
     */
    public function setSegmentTVA($segmentTVA)
    {
        $this->segmentTVA = $segmentTVA;

        return $this;
    }

    /**
     * Get the value of Order Ref.
     *
     * @return string
     */
    public function getOrderRef()
    {
        return $this->orderRef;
    }

    /**
     * Set the value of Order Ref.
     *
     * @param string orderRef
     *
     * @return self
     */
    public function setOrderRef($orderRef)
    {
        $this->orderRef = $orderRef;

        return $this;
    }

    /**
     * Get the value of Facture Euro.
     *
     * @return bool
     */
    public function getFactureEuro()
    {
        return $this->factureEuro;
    }

    /**
     * Set the value of Facture Euro.
     *
     * @param bool factureEuro
     *
     * @return self
     */
    public function setFactureEuro($factureEuro)
    {
        $this->factureEuro = $factureEuro;

        return $this;
    }

    /**
     * Get the value of Send Document By.
     *
     * @return string
     */
    public function getSendDocumentBy()
    {
        return $this->sendDocumentBy;
    }

    /**
     * Set the value of Send Document By.
     *
     * @param string sendDocumentBy
     *
     * @return self
     */
    public function setSendDocumentBy($sendDocumentBy)
    {
        $this->sendDocumentBy = $sendDocumentBy;

        return $this;
    }

    /**
     * Get the value of Flag Presence Annuaire.
     *
     * @return bool
     */
    public function getFlagPresenceAnnuaireMVNO()
    {
        return $this->flagPresenceAnnuaireMVNO;
    }

    /**
     * Set the value of Flag Presence Annuaire.
     *
     * @param bool flagPresenceAnnuaireMVNO
     *
     * @return self
     */
    public function setFlagPresenceAnnuaireMVNO($flagPresenceAnnuaireMVNO)
    {
        $this->flagPresenceAnnuaireMVNO = $flagPresenceAnnuaireMVNO;

        return $this;
    }

    /**
     * Get the value of Flag Only Nom.
     *
     * @return bool
     */
    public function getFlagOnlyNomMVNO()
    {
        return $this->flagOnlyNomMVNO;
    }

    /**
     * Set the value of Flag Only Nom.
     *
     * @param bool flagOnlyNomMVNO
     *
     * @return self
     */
    public function setFlagOnlyNomMVNO($flagOnlyNomMVNO)
    {
        $this->flagOnlyNomMVNO = $flagOnlyNomMVNO;

        return $this;
    }

    /**
     * Get the value of Flag Adresse Complete.
     *
     * @return bool
     */
    public function getFlagAdresseCompleteMVNO()
    {
        return $this->flagAdresseCompleteMVNO;
    }

    /**
     * Set the value of Flag Adresse Complete.
     *
     * @param bool flagAdresseCompleteMVNO
     *
     * @return self
     */
    public function setFlagAdresseCompleteMVNO($flagAdresseCompleteMVNO)
    {
        $this->flagAdresseCompleteMVNO = $flagAdresseCompleteMVNO;

        return $this;
    }

    /**
     * Get the value of Flag Antiprospection.
     *
     * @return bool
     */
    public function getFlagAntiprospectionMVNO()
    {
        return $this->flagAntiprospectionMVNO;
    }

    /**
     * Set the value of Flag Antiprospection.
     *
     * @param bool flagAntiprospectionMVNO
     *
     * @return self
     */
    public function setFlagAntiprospectionMVNO($flagAntiprospectionMVNO)
    {
        $this->flagAntiprospectionMVNO = $flagAntiprospectionMVNO;

        return $this;
    }

    /**
     * Get the value of Flag Presence Adresse Email.
     *
     * @return bool
     */
    public function getFlagPresenceAdresseEmail()
    {
        return $this->flagPresenceAdresseEmail;
    }

    /**
     * Set the value of Flag Presence Adresse Email.
     *
     * @param bool flagPresenceAdresseEmail
     *
     * @return self
     */
    public function setFlagPresenceAdresseEmail($flagPresenceAdresseEmail)
    {
        $this->flagPresenceAdresseEmail = $flagPresenceAdresseEmail;

        return $this;
    }

    /**
     * Get the value of Flag Presence Profession.
     *
     * @return bool
     */
    public function getFlagPresenceProfession()
    {
        return $this->flagPresenceProfession;
    }

    /**
     * Set the value of Flag Presence Profession.
     *
     * @param bool flagPresenceProfession
     *
     * @return self
     */
    public function setFlagPresenceProfession($flagPresenceProfession)
    {
        $this->flagPresenceProfession = $flagPresenceProfession;

        return $this;
    }

    /**
     * Get the value of Flag Reception.
     *
     * @return bool
     */
    public function getFlagReceptionCNI()
    {
        return $this->flagReceptionCNI;
    }

    /**
     * Set the value of Flag Reception.
     *
     * @param bool flagReceptionCNI
     *
     * @return self
     */
    public function setFlagReceptionCNI($flagReceptionCNI)
    {
        $this->flagReceptionCNI = $flagReceptionCNI;

        return $this;
    }

    /**
     * Get the value of Flag Reception.
     *
     * @return bool
     */
    public function getFlagReceptionJD()
    {
        return $this->flagReceptionJD;
    }

    /**
     * Set the value of Flag Reception.
     *
     * @param bool flagReceptionJD
     *
     * @return self
     */
    public function setFlagReceptionJD($flagReceptionJD)
    {
        $this->flagReceptionJD = $flagReceptionJD;

        return $this;
    }

    /**
     * Get the value of Siret.
     *
     * @return string
     */
    public function getSiret()
    {
        return $this->siret;
    }

    /**
     * Set the value of Siret.
     *
     * @param string siret
     *
     * @return self
     */
    public function setSiret($siret)
    {
        $this->siret = $siret;

        return $this;
    }

    /**
     * Get the value of Code Ape.
     *
     * @return string
     */
    public function getCodeApe()
    {
        return $this->codeApe;
    }

    /**
     * Set the value of Code Ape.
     *
     * @param string codeApe
     *
     * @return self
     */
    public function setCodeApe($codeApe)
    {
        $this->codeApe = $codeApe;

        return $this;
    }

    /**
     * Get the value of Flag Antiannuaire Inverse.
     *
     * @return bool
     */
    public function getFlagAntiannuaireInverseMVNO()
    {
        return $this->flagAntiannuaireInverseMVNO;
    }

    /**
     * Set the value of Flag Antiannuaire Inverse.
     *
     * @param bool flagAntiannuaireInverseMVNO
     *
     * @return self
     */
    public function setFlagAntiannuaireInverseMVNO($flagAntiannuaireInverseMVNO)
    {
        $this->flagAntiannuaireInverseMVNO = $flagAntiannuaireInverseMVNO;

        return $this;
    }

    /**
     * Get the value of Birth Date.
     *
     * @return DateTime
     */
    public function getBirthDate()
    {
        return $this->birthDate;
    }

    /**
     * Set the value of Birth Date.
     *
     * @param DateTime birthDate
     *
     * @return self
     */
    public function setBirthDate(DateTime $birthDate)
    {
        $this->birthDate = $birthDate;

        return $this;
    }

    /**
     * Get the value of Customer Rapprochement.
     *
     * @return array
     */
    public function getCustomerRapprochement()
    {
        return $this->customerRapprochement;
    }

    /**
     * Set the value of Customer Rapprochement.
     *
     * @param array customerRapprochement
     *
     * @return self
     */
    public function setCustomerRapprochement(array $customerRapprochement)
    {
        $this->customerRapprochement = $customerRapprochement;

        return $this;
    }

    public function __construct()
    {
        $this->handleKeys = array();
        $this->customerRapprochement = array();
    }
}
