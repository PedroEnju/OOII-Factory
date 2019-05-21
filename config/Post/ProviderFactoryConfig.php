<?php

namespace Config\Post;

use Factories\ManualPostProviderFactory;

class ProviderFactoryConfig {

	public static function getPostProviderFactory() {
		return new ManualPostProviderFactory();
	}

}