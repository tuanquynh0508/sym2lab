<?php

namespace Lab\FormtestBundle\Form\Model;

use Doctrine\Common\Collections\ArrayCollection;

class GroupContact
{
    /**
     * @var string
     */
    private $title;

    /**
     * @var ArrayCollection
     */
    private $listPhoneNumbers;

    /**
     * Constructor class.
     */
    public function __construct()
    {
        $this->title            = '';
        $this->listPhoneNumbers = new ArrayCollection();
    }

    /**
     * Gets the value of title.
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Sets the value of title.
     *
     * @param string $title the title
     *
     * @return self
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Gets the value of listPhoneNumbers.
     *
     * @return ArrayCollection
     */
    public function getListPhoneNumbers()
    {
        return $this->listPhoneNumbers;
    }

    /**
     * Sets the value of listPhoneNumbers.
     *
     * @param ArrayCollection $listPhoneNumbers the list phone numbers
     *
     * @return self
     */
    public function setListPhoneNumbers(ArrayCollection $listPhoneNumbers)
    {
        $this->listPhoneNumbers = $listPhoneNumbers;

        return $this;
    }

    /**
     * Adds a list phone numbers.
     *
     * @param string $phoneNumber
     *
     * @return void
     */
    public function addListPhoneNumbers($phoneNumber)
    {
        if (!$this->listPhoneNumbers->contains($phoneNumber))
        {
            $this->listPhoneNumbers->add($phoneNumber);
        }
    }

    /**
     * Removes a list phone numbers.
     *
     * @param string $phoneNumber
     *
     * @return void
     */
    public function removeListPhoneNumbers($phoneNumber)
    {
        if ($this->listPhoneNumbers->contains($phoneNumber))
        {
            $this->listPhoneNumbers->removeElement($phoneNumber);
        }
    }
}
