<?php

namespace Factories;

abstract class AbstractFactoryPostProvider {

	public function getPostProvider() {
		return $this->create();
	}

	public abstract function create();

}