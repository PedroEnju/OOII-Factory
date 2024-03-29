<?php

namespace Services;

use Contracts\PostProviderInterface;

class ManualPostProvider implements PostProviderInterface {

	public function getUltimos() {
		$out = [];
		for ($i=0; $i < 10; $i++) { 
			$out[] = [
				"titulo"	=> "Post" . ($i + 1),
				"conteudo"	=> "Post para teste " . ($i + 1),
				"miniatura"	=> "https://picsum.photos/200?" . rand(0, 100),
				"autor"		=> "Fulano de Tal" 
			];
		}
		return $out;
	}

}