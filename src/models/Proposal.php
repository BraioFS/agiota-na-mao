<?php

class Proposal
{
    private $id;
    private $loanSharkId;
    private $clientId;
    private $pricing;
    private $installments;
    private $latitude;
    private $longitude;
    private $active;
    private $updatedAt;
    private $createdAt;

    public function __construct($id, $loanSharkId, $clientId, $pricing, $installments, $latitude, $longitude, $active, $updatedAt, $createdAt)
    {
        $this->id = $id;
        $this->loanSharkId = $loanSharkId;
        $this->clientId = $clientId;
        $this->pricing = $pricing;
        $this->installments = $installments;
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

    public function getLoanSharkId()
    {
        return $this->loanSharkId;
    }

    public function setLoanSharkId($loanSharkId)
    {
        $this->loanSharkId = $loanSharkId;
    }

    public function getClientId()
    {
        return $this->clientId;
    }

    public function setClientId($clientId)
    {
        $this->clientId = $clientId;
    }

    public function getPricing()
    {
        return $this->pricing;
    }

    public function setPricing($pricing)
    {
        $this->pricing = $pricing;
    }

    public function getInstallments()
    {
        return $this->installments;
    }

    public function setInstallments($installments)
    {
        $this->installments = $installments;
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