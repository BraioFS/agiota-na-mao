<?php

class Log
{
    private $id;
    private $message;
    private $active;
    private $updatedAt;
    private $createdAt;

    public function __construct($id, $message, $active, $updatedAt, $createdAt)
    {
        $this->id = $id;
        $this->message = $message;
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

    public function getMessage()
    {
        return $this->message;
    }

    public function setMessage($message)
    {
        $this->message = $message;
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