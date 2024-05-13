<?php

namespace controller;

require_once('Estate.php');

class House extends Estate
{
/**
* @param
*
*/
    public function __construct($surface, $price, $location, $roomNumber, private ?string $field, private bool $isPool, private int $floor){
       parent::__construct($surface, $price, $location, $roomNumber); 
        // ou ...func_get_arg
       
    }
}