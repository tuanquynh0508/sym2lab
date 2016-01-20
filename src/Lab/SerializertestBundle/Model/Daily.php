<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Lab\SerializertestBundle\Model;

use JMS\Serializer\Annotation\Type;
use Doctrine\Common\Collections\ArrayCollection;

use Lab\SerializertestBundle\Model\Temperature;
use Lab\SerializertestBundle\Model\DetailWeather;

/**
 * Description of Daily
 *
 * @author Nguyen Nhu Tuan
 */
class Daily {
	/**
     * @var double
     * @Type("double")
     */
	public $dt;
	
	/**
     * @var Temperature
     * @type("Lab\SerializertestBundle\Model\Temperature")
     */
	public $temp;
	
	/**
     * @var double
     * @Type("double")
     */
	public $pressure;
	
	/**
     * @var double
     * @Type("double")
     */
	public $humidity;
	
	/**
     * @var array
     * @Type("ArrayCollection<Lab\SerializertestBundle\Model\DetailWeather>")
     */
	public $weather;
	
	/**
     * @var double
     * @Type("double")
     */
	public $speed;
	
	/**
     * @var integer
     * @Type("integer")
     */
	public $deg;
	
	/**
     * @var integer
     * @Type("integer")
     */
	public $clouds;
	
	public function __construct()
    {
        $this->weather = new ArrayCollection();
    }
	
	public function getDt() {
		return $this->dt;
	}

	public function getTemp() {
		return $this->temp;
	}

	public function getPressure() {
		return $this->pressure;
	}

	public function getHumidity() {
		return $this->humidity;
	}

	public function getWeather() {
		return $this->weather;
	}

	public function getSpeed() {
		return $this->speed;
	}

	public function getDeg() {
		return $this->deg;
	}

	public function getClouds() {
		return $this->clouds;
	}

	public function setDt($dt) {
		$this->dt = $dt;
	}

	public function setTemp(Temperature $temp) {
		$this->temp = $temp;
	}

	public function setPressure($pressure) {
		$this->pressure = $pressure;
	}

	public function setHumidity($humidity) {
		$this->humidity = $humidity;
	}

	public function setWeather($weather) {
		$this->weather = $weather;
	}

	public function setSpeed($speed) {
		$this->speed = $speed;
	}

	public function setDeg($deg) {
		$this->deg = $deg;
	}

	public function setClouds($clouds) {
		$this->clouds = $clouds;
	}
	
	public function addWeather(DetailWeather $weather)
    {
        $this->weather[] = $weather;
    }

}
