<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Lab\SerializertestBundle\Model;

use JMS\Serializer\Annotation\Type;

use Lab\SerializertestBundle\Model\Coordinates;

/**
 * Description of City
 *
 * @author Nguyen Nhu Tuan
 */
class City {
	/**
     * @var integer
     * @Type("integer")
     */
	public $id;
	
	/**
     * @var string
     * @Type("string")
     */
	public $name;
	
	/**
     * @var Coordinates
     * @type("Lab\SerializertestBundle\Model\Coordinates")
     */
	public $coord;
	
	/**
     * @var string
     * @Type("string")
     */
	public $country;
	
	/**
     * @var integer
     * @Type("integer")
     */
	public $population;
	
	public function getId() {
		return $this->id;
	}

	public function getName() {
		return $this->name;
	}

	public function getCoord() {
		return $this->coord;
	}

	public function getCountry() {
		return $this->country;
	}

	public function getPopulation() {
		return $this->population;
	}

	public function setId($id) {
		$this->id = $id;
	}

	public function setName($name) {
		$this->name = $name;
	}

	public function setCoord(Coordinates $coord) {
		$this->coord = $coord;
	}

	public function setCountry($country) {
		$this->country = $country;
	}

	public function setPopulation($population) {
		$this->population = $population;
	}

}
