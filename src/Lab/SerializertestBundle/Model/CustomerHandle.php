<?php

namespace Lab\SerializertestBundle\Model;

use JMS\Serializer\Annotation\Type;

class CustomerHandle
{
    /**
     * @var string
     * @Type("string")
     */
    public $address1;

    /**
     * @var string
     * @Type("string")
     */
    public $address2;

    /**
     * @var string
     * @Type("string")
     */
    public $city;

    /**
     * @var string
     * @Type("string")
     */
    public $civility;

    /**
     * @var string
     * @Type("string")
     */
    public $company;

    /**
     * @var string
     * @Type("string")
     */
    public $country;

    /**
     * @var string
     * @Type("string")
     */
    public $email;

    /**
     * @var string
     * @Type("string")
     */
    public $fax;

    /**
     * @var string
     * @Type("string")
     */
    public $firstName;

    /**
     * @var string
     * @Type("string")
     */
    public $gsm;

    /**
     * @var string
     * @Type("string")
     */
    public $handleKey;

    /**
     * @var string
     * @Type("string")
     */
    public $intraTVA;

    /**
     * @var string
     * @Type("string")
     */
    public $enbaled;

    /**
     * @var string
     * @Type("string")
     */
    public $name;

    /**
     * @var string
     * @Type("string")
     */
    public $phone;

    /**
     * @var string
     * @Type("string")
     */
    public $profileType;

    /**
     * @var string
     * @Type("string")
     */
    public $siren;

    /**
     * @var string
     * @Type("string")
     */
    public $type;

    /**
     * @var string
     * @Type("string")
     */
    public $zipCode;

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
    public $customLabel;

    /**
     * @var bool
     * @Type("boolean")
     */
    public $modifiable;

    /**
     * @var string
     * @Type("string")
     */
    public $dateValidationEmail;

    /**
     * @var string
     * @Type("string")
     */
    public $dateValidationGSM;

    /**
     * @var DateTime
     * @Type("DateTime")
     */
    public $activationKeyGenDate;

    /**
     * @var string
     * @Type("string")
     */
    public $emailState;

    /**
     * @var string
     * @Type("string")
     */
    public $gsmState;

    /**
     * @var string
     * @Type("string")
     */
    public $idBaseAdresse;

    /**
     * @var string
     * @Type("string")
     */
    public $voie;

    /**
     * @var string
     * @Type("string")
     */
    public $numVoie;

    /**
     * Get the value of Address.
     *
     * @return string
     */
    public function getAddress1()
    {
        return $this->address1;
    }

    /**
     * Set the value of Address.
     *
     * @param string address1
     *
     * @return self
     */
    public function setAddress1($address1)
    {
        $this->address1 = $address1;

        return $this;
    }

    /**
     * Get the value of Address.
     *
     * @return string
     */
    public function getAddress2()
    {
        return $this->address2;
    }

    /**
     * Set the value of Address.
     *
     * @param string address2
     *
     * @return self
     */
    public function setAddress2($address2)
    {
        $this->address2 = $address2;

        return $this;
    }

    /**
     * Get the value of City.
     *
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set the value of City.
     *
     * @param string city
     *
     * @return self
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get the value of Civility.
     *
     * @return string
     */
    public function getCivility()
    {
        return $this->civility;
    }

    /**
     * Set the value of Civility.
     *
     * @param string civility
     *
     * @return self
     */
    public function setCivility($civility)
    {
        $this->civility = $civility;

        return $this;
    }

    /**
     * Get the value of Company.
     *
     * @return string
     */
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * Set the value of Company.
     *
     * @param string company
     *
     * @return self
     */
    public function setCompany($company)
    {
        $this->company = $company;

        return $this;
    }

    /**
     * Get the value of Country.
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set the value of Country.
     *
     * @param string country
     *
     * @return self
     */
    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Get the value of Email.
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of Email.
     *
     * @param string email
     *
     * @return self
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of Fax.
     *
     * @return string
     */
    public function getFax()
    {
        return $this->fax;
    }

    /**
     * Set the value of Fax.
     *
     * @param string fax
     *
     * @return self
     */
    public function setFax($fax)
    {
        $this->fax = $fax;

        return $this;
    }

    /**
     * Get the value of First Name.
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set the value of First Name.
     *
     * @param string firstName
     *
     * @return self
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get the value of Gsm.
     *
     * @return string
     */
    public function getGsm()
    {
        return $this->gsm;
    }

    /**
     * Set the value of Gsm.
     *
     * @param string gsm
     *
     * @return self
     */
    public function setGsm($gsm)
    {
        $this->gsm = $gsm;

        return $this;
    }

    /**
     * Get the value of Handle Key.
     *
     * @return string
     */
    public function getHandleKey()
    {
        return $this->handleKey;
    }

    /**
     * Set the value of Handle Key.
     *
     * @param string handleKey
     *
     * @return self
     */
    public function setHandleKey($handleKey)
    {
        $this->handleKey = $handleKey;

        return $this;
    }

    /**
     * Get the value of Intra.
     *
     * @return string
     */
    public function getIntraTVA()
    {
        return $this->intraTVA;
    }

    /**
     * Set the value of Intra.
     *
     * @param string intraTVA
     *
     * @return self
     */
    public function setIntraTVA($intraTVA)
    {
        $this->intraTVA = $intraTVA;

        return $this;
    }

    /**
     * Get the value of Enbaled.
     *
     * @return string
     */
    public function getEnbaled()
    {
        return $this->enbaled;
    }

    /**
     * Set the value of Enbaled.
     *
     * @param string enbaled
     *
     * @return self
     */
    public function setEnbaled($enbaled)
    {
        $this->enbaled = $enbaled;

        return $this;
    }

    /**
     * Get the value of Name.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of Name.
     *
     * @param string name
     *
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of Phone.
     *
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set the value of Phone.
     *
     * @param string phone
     *
     * @return self
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get the value of Profile Type.
     *
     * @return string
     */
    public function getProfileType()
    {
        return $this->profileType;
    }

    /**
     * Set the value of Profile Type.
     *
     * @param string profileType
     *
     * @return self
     */
    public function setProfileType($profileType)
    {
        $this->profileType = $profileType;

        return $this;
    }

    /**
     * Get the value of Siren.
     *
     * @return string
     */
    public function getSiren()
    {
        return $this->siren;
    }

    /**
     * Set the value of Siren.
     *
     * @param string siren
     *
     * @return self
     */
    public function setSiren($siren)
    {
        $this->siren = $siren;

        return $this;
    }

    /**
     * Get the value of Type.
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set the value of Type.
     *
     * @param string type
     *
     * @return self
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get the value of Zip Code.
     *
     * @return string
     */
    public function getZipCode()
    {
        return $this->zipCode;
    }

    /**
     * Set the value of Zip Code.
     *
     * @param string zipCode
     *
     * @return self
     */
    public function setZipCode($zipCode)
    {
        $this->zipCode = $zipCode;

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
     * Get the value of Custom Label.
     *
     * @return string
     */
    public function getCustomLabel()
    {
        return $this->customLabel;
    }

    /**
     * Set the value of Custom Label.
     *
     * @param string customLabel
     *
     * @return self
     */
    public function setCustomLabel($customLabel)
    {
        $this->customLabel = $customLabel;

        return $this;
    }

    /**
     * Get the value of Modifiable.
     *
     * @return bool
     */
    public function getModifiable()
    {
        return $this->modifiable;
    }

    /**
     * Set the value of Modifiable.
     *
     * @param bool modifiable
     *
     * @return self
     */
    public function setModifiable($modifiable)
    {
        $this->modifiable = $modifiable;

        return $this;
    }

    /**
     * Get the value of Date Validation Email.
     *
     * @return string
     */
    public function getDateValidationEmail()
    {
        return $this->dateValidationEmail;
    }

    /**
     * Set the value of Date Validation Email.
     *
     * @param string dateValidationEmail
     *
     * @return self
     */
    public function setDateValidationEmail($dateValidationEmail)
    {
        $this->dateValidationEmail = $dateValidationEmail;

        return $this;
    }

    /**
     * Get the value of Date Validation.
     *
     * @return string
     */
    public function getDateValidationGSM()
    {
        return $this->dateValidationGSM;
    }

    /**
     * Set the value of Date Validation.
     *
     * @param string dateValidationGSM
     *
     * @return self
     */
    public function setDateValidationGSM($dateValidationGSM)
    {
        $this->dateValidationGSM = $dateValidationGSM;

        return $this;
    }

    /**
     * Get the value of Activation Key Gen Date.
     *
     * @return DateTime
     */
    public function getActivationKeyGenDate()
    {
        return $this->activationKeyGenDate;
    }

    /**
     * Set the value of Activation Key Gen Date.
     *
     * @param DateTime activationKeyGenDate
     *
     * @return self
     */
    public function setActivationKeyGenDate(DateTime $activationKeyGenDate)
    {
        $this->activationKeyGenDate = $activationKeyGenDate;

        return $this;
    }

    /**
     * Get the value of Email State.
     *
     * @return string
     */
    public function getEmailState()
    {
        return $this->emailState;
    }

    /**
     * Set the value of Email State.
     *
     * @param string emailState
     *
     * @return self
     */
    public function setEmailState($emailState)
    {
        $this->emailState = $emailState;

        return $this;
    }

    /**
     * Get the value of Gsm State.
     *
     * @return string
     */
    public function getGsmState()
    {
        return $this->gsmState;
    }

    /**
     * Set the value of Gsm State.
     *
     * @param string gsmState
     *
     * @return self
     */
    public function setGsmState($gsmState)
    {
        $this->gsmState = $gsmState;

        return $this;
    }

    /**
     * Get the value of Id Base Adresse.
     *
     * @return string
     */
    public function getIdBaseAdresse()
    {
        return $this->idBaseAdresse;
    }

    /**
     * Set the value of Id Base Adresse.
     *
     * @param string idBaseAdresse
     *
     * @return self
     */
    public function setIdBaseAdresse($idBaseAdresse)
    {
        $this->idBaseAdresse = $idBaseAdresse;

        return $this;
    }

    /**
     * Get the value of Voie.
     *
     * @return string
     */
    public function getVoie()
    {
        return $this->voie;
    }

    /**
     * Set the value of Voie.
     *
     * @param string voie
     *
     * @return self
     */
    public function setVoie($voie)
    {
        $this->voie = $voie;

        return $this;
    }

    /**
     * Get the value of Num Voie.
     *
     * @return string
     */
    public function getNumVoie()
    {
        return $this->numVoie;
    }

    /**
     * Set the value of Num Voie.
     *
     * @param string numVoie
     *
     * @return self
     */
    public function setNumVoie($numVoie)
    {
        $this->numVoie = $numVoie;

        return $this;
    }
}
