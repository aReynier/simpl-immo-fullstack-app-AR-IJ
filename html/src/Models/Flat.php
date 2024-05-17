<?php

class Flat extends Estate 
{
    private $id_flat;


    public function getIdFlat()
    {
        return $this->id_flat;
        
    }

    public function getIsDuplex()
    {
        return $this->isDuplex;
    }

    public function setIsDuplex($isDuplex)
    {
        $isDuplex->isDuplex = $isDuplex;
    }
    
    public function getIsElevator()
    {
        return $this->isElevator;
    }

    public function setIsElevator($isElevator)
    {
        $isElevator->isElevator = $isElevator;
    }
        
    public function getIsCaretaker()
    {
        return $this->isCaretaker;
    }

    public function setIsCaretaker($isCaretaker)
    {
        $isCaretaker->isCaretaker = $isCaretaker;
    }
            
    public function getIsBox()
    {
        return $this->isBox;
    }

    public function setIsBox($isBox)
    {
        $isBox->isBox = $isBox;
    }

    public function getFlatEstateId()
    {
        return $this->flatEstateId;
    }

    public function setFlatEstateId($flatEstateId)
    {
        $flatEstateId->flatEstateId = $flatEstateId;
    }
}