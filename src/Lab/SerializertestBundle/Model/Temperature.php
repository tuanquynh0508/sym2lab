<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Lab\SerializertestBundle\Model;

use JMS\Serializer\Annotation\Type;

/**
 * Description of Temperature
 *
 * @author Nguyen Nhu Tuan
 */
class Temperature {
	/**
     * @var double
     * @Type("double")
     */
	public $day;
	
	/**
     * @var double
     * @Type("double")
     */
    public $min;
	
	/**
     * @var double
     * @Type("double")
     */
    public $max;
	
	/**
     * @var double
     * @Type("double")
     */
    public $night;
	
	/**
     * @var double
     * @Type("double")
     */
    public $eve;
	
	/**
     * @var double
     * @Type("double")
     */
    public $morn;
	
	public function getDay() {
		return $this->day;
	}

	public function getMin() {
		return $this->min;
	}

	public function getMax() {
		return $this->max;
	}

	public function getNight() {
		return $this->night;
	}

	public function getEve() {
		return $this->eve;
	}

	public function getMorn() {
		return $this->morn;
	}

	public function setDay($day) {
		$this->day = $day;
	}

	public function setMin($min) {
		$this->min = $min;
	}

	public function setMax($max) {
		$this->max = $max;
	}

	public function setNight($night) {
		$this->night = $night;
	}

	public function setEve($eve) {
		$this->eve = $eve;
	}

	public function setMorn($morn) {
		$this->morn = $morn;
	}

}
