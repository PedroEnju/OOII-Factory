<?php

namespace Site;

use Helpers\ViewModel;
use Config\Post\ProviderFactoryConfig as Pfc;
use Symfony\Component\HttpFoundation\Request;
use Services\SearchHandler;
use Services\StringInputFilter;
use Services\LowerHandler;

class Blog {

    public function ultimasPostagens()
    {
        $provider = Pfc::getPostProviderFactory()->getPostProvider();
        return new ViewModel('blog.lista', ['posts' => $provider->getUltimos()] );
    }

    public function viewPost(Request $req)
    {
 		$idp = $req->attributes->get('post',0);
 		$provider = Pfc::getPostProviderFactory()->getPostProvider();
 		$res = $provider->getById($idp);
 		return new ViewModel('blog.detail', ['post'=>$res]);
 	}

 	public function pesquisar(Request $req) {
 		$h1 = new SearchHandler();
 		$h2 = new StringInputFilter();
 		$h1->setNext($h2);

 		$h3 = new LowerHandler();
 		$h2->setNext($h3);

 		$provider = Pfc::getPostProviderFactory()->getPostProvider();
 		$res = $provider->getData($h1->handleRequest($_POST));
 		return new ViewModel('blog.lista', ['posts' => $res]);
 	}

}
