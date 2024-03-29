<?php

namespace Services;

/**
 * @author Pedro Enju
 */
class LowerHandler extends SearchHandler
{
    
    public function handleRequest($post) {

        $newInput = strtolower($post);
        if(!$this->getNext()) {
            return $newInput;
        }

        return $this->getNext()->handleRequest($newInput);

    }

}