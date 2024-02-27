<?php
class AddressRepository
{
    private $addresses;

    public function __construct()
    {
        $this->addresses = [];
    }


    public function getAddressById($id)
    {
        foreach ($this->addresses as $addresse) {
            if ($addresse['id'] == $addresse) {
                return $addresse;
            }
        }
        return null;
    }

    public function getAddressByCoordinates($coordinates)
    {
        //TODO - requisição api nos correios
        return null;
    }

} ?>