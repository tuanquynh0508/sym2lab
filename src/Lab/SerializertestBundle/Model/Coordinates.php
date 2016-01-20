<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Lab\SerializertestBundle\Model;

use JMS\Serializer\Annotation\Type;

/**
 * Description of Coordinates
 *
 * @author Nguyen Nhu Tuan
 */
class Coordinates {
	/**
     * @var double
     * @Type("double")
     */
	public $lon;
	
	/**
     * @var double
     * @Type("double")
     */
	public $lat;
	
	public function getLon() {
		return $this->lon;
	}

	public function getLat() {
		return $this->lat;
	}

	public function setLon($lon) {
		$this->lon = $lon;
	}

	public function setLat($lat) {
		$this->lat = $lat;
	}
}
