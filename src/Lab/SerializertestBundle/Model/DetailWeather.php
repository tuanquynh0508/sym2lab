<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Lab\SerializertestBundle\Model;

use JMS\Serializer\Annotation\Type;

/**
 * Description of DetailWeather
 *
 * @author Nguyen Nhu Tuan
 */
class DetailWeather {
	/**
     * @var integer
     * @Type("integer")
     */
	public $id;
	
	/**
     * @var string
     * @Type("string")
     */
	public $main;
	
	/**
     * @var string
     * @Type("string")
     */
	public $description;
	
	/**
     * @var string
     * @Type("string")
     */
	public $icon;
	
	public function getId() {
		return $this->id;
	}

	public function getMain() {
		return $this->main;
	}

	public function getDescription() {
		return $this->description;
	}

	public function getIcon() {
		return $this->icon;
	}

	public function setId($id) {
		$this->id = $id;
	}

	public function setMain($main) {
		$this->main = $main;
	}

	public function setDescription($description) {
		$this->description = $description;
	}

	public function setIcon($icon) {
		$this->icon = $icon;
	}
}
