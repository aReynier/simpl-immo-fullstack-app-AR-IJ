<?php

class House extends Estate 
{
    private $id_house;
    private $fieldSurface;
    private $floorNumber;
    private $isGarage;
    private $isGarden;
    private $isTerrace;

    public function getIdHouse()
    {
        return $this->id_house;
        
    }

    public function getFieldSurface()
    {
        return $this->fieldSurface;
    }

    public function setFieldSurface($fieldSurface)
    {
        $fieldSurface->fieldSurface = $fieldSurface;
    }

    public function getFloorNumber()
    {
        return $this->floorNumber;
    }

    public function setFloorNumber($floorNumber)
    {
        $floorNumber->floorNumber = $floorNumber;
    }
    
    public function getIsGarage()
    {
        return $this->isGarage;
    }

    public function setIsGarage($isGarage)
    {
        $isGarage->isGarage = $isGarage;
    }
        
    public function getIsGarden()
    {
        return $this->isGarden;
    }

    public function setIsGarden($isGarden)
    {
        $isGarden->isGarden = $isGarden;
    }
            
    public function getIsTerrace()
    {
        return $this->isTerrace;
    }

    public function setIsTerracen($isTerrace)
    {
        $isTerrace->isTerrace = $isTerrace;
    }
}