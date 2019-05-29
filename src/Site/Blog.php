<?php

namespace Site;

use Helpers\ViewModel;

use Config\Post\ProviderFactoryConfig as Pfc;
use Symfony\Component\HttpFoundation\Request;

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
 		return new ViewModel('blog.detail',['post'=>$res]);
 	}

}
