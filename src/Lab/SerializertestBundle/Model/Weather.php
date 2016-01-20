<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Lab\SerializertestBundle\Model;

use JMS\Serializer\Annotation\Type;
use Doctrine\Common\Collections\ArrayCollection;

use Lab\SerializertestBundle\Model\City;
use Lab\SerializertestBundle\Model\Daily;

/**
 * Description of Weather
 *
 * @author Nguyen Nhu Tuan
 */
class Weather {
	/**
     * @var City
     * @type("Lab\SerializertestBundle\Model\City")
     */
	public $city;
	
	/**
     * @var string
     * @Type("string")
     */
	public $cod;
	
	/**
     * @var double
     * @Type("double")
     */
    public $message;
	
	/**
     * @var integer
     * @Type("integer")
     */
    public $cnt;
	
	/**
     * @var array
     * @Type("ArrayCollection<Lab\SerializertestBundle\Model\Daily>")
     */
	public $list;
	
	public function __construct()
    {
        $this->list = new ArrayCollection();
    }
	
	public function getCity() {
		return $this->city;
	}

	public function getCod() {
		return $this->cod;
	}

	public function getMessage() {
		return $this->message;
	}

	public function getCnt() {
		return $this->cnt;
	}

	public function getList() {
		return $this->list;
	}

	public function setCity(City $city) {
		$this->city = $city;
	}

	public function setCod($cod) {
		$this->cod = $cod;
	}

	public function setMessage($message) {
		$this->message = $message;
	}

	public function setCnt($cnt) {
		$this->cnt = $cnt;
	}

	public function setList($list) {
		$this->list = $list;
	}

	public function addList(Daily $daily)
    {
        $this->list[] = $daily;
    }
}
