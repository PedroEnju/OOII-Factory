<?php

namespace Site;

use Helpers\ViewModel;

use Config\Post\ProviderFactoryConfig as Pfc;

class Blog {

    public function ultimasPostagens()
    {
        $provider = Pfc::getPostProviderFactory()->getPostProvider();
        return new ViewModel('blog.lista', ['posts' => $provider->getUltimos()] );
    }

}
