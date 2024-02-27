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

    public function getAddress($address)
    {
        //TODO - requisição api para pegar a coordenada por latitude e longitude
        return null;
    }

    public function getAddressByZipCode($zipCode)
    {
        //TODO - requisição api para pegar a coodenada por cep
        return null;
    }

} ?>