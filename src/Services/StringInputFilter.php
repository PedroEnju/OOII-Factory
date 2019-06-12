<?php

namespace Services;

use Contracts\InputHandlerInterface;

/**
 * @author Pedro Enju
 */
class StringInputFilter implements InputHandlerInterface
{
    
    private $next = null;

    public function handleRequest($post) {

        $newInput = \preg_replace("/[^a-zA-Z\s]+/", "", $post);
        if(!$this->getNext()) {
            return $newInput;
        }

        return $this->getNext()->handleRequest($newInput);

    }

    public function getNext() {
        return $this->next != null ? $this->next : false;
    }

    public function setNext(InputHandlerInterface $handler) {
        $this->next =  $handler;
    }

}