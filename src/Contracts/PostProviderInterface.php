<?php

namespace Contracts;

interface PostProviderInterface {   

    /**
    * @return PostInterface[]
    */
    public function getUltimos();

}