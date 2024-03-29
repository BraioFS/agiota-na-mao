<?php

class User
{
    private $id;
    private $name;
    private $email;
    private $passwordHash;
    private $profileId;
    private $isLoanShark;
    private $addressId;
    private $active;
    private $updatedAt;
    private $createdAt;

    public function __construct($id, $name, $email, $password, $profileId, $isLoanShark, $addressId, $active, $updatedAt, $createdAt)
    {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
        $this->passwordHash = $this->hashPassword($password);
        $this->profileId = $profileId;
        $this->isLoanShark = $isLoanShark;
        $this->addressId = $addressId;
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

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getPassword()
    {
        return $this->passwordHash;
    }

    public function setPassword($password)
    {
        $this->passwordHash = $this->hashPassword($password);
    }

    public function getProfileId()
    {
        return $this->profileId;
    }

    public function setProfileId($profileId)
    {
        $this->profileId = $profileId;
    }

    public function getIsLoanShark()
    {
        return $this->isLoanShark;
    }

    public function setIsLoanShark($isLoanShark)
    {
        $this->isLoanShark = $isLoanShark;
    }

    public function getAddressId()
    {
        return $this->addressId;
    }

    public function setAddressId($addressId)
    {
        $this->addressId = $addressId;
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

    private function hashPassword($password)
    {
        return password_hash($password, PASSWORD_DEFAULT);
    }

    public function verifyPassword($password)
    {
        return password_verify($password, $this->passwordHash);
    }

}

?>