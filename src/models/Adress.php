<?php

class Address
{
    private $id;
    private $zipCode;
    private $address;
    private $latitude;
    private $longitude;
    private $active;
    private $updatedAt;
    private $createdAt;

    public function __construct($id, $zipCode, $address, $latitude, $longitude, $active, $updatedAt, $createdAt)
    {
        $this->id = $id;
        $this->zipCode = $zipCode;
        $this->address = $address;
        $this->latitude = $latitude;
        $this->longitude = $longitude;
        $this->active = $active;
        $this->updatedAt = $updatedAt;
        $this->createdAt = $createdAt;
    }

    // Getters e Setters para todos os campos
    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getZipCode()
    {
        return $this->zipCode;
    }

    public function setZipCode($zipCode)
    {
        $this->zipCode = $zipCode;
    }
    public function getAddress()
    {
        return $this->address;
    }

    public function setAddress($address)
    {
        $this->address = $address;
    }

    public function getLatitude()
    {
        return $this->latitude;
    }

    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;
    }

    public function getLongitude()
    {
        return $this->longitude;
    }

    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;
    }

    public function isActive()
    {
        return $this->active;
    }

    public function setActive($active)
    {
        $this->active = $active;
    }

    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;
    }

    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
    }

}

?>