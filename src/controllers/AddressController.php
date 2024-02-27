<?php

class AddressController
{
    private $addressService;

    public function __construct()
    {
        $this->addressService = new AddressService();
    }

    public function getAddressById($id)
    {
        return $this->addressService->getAddressById($id);
    }

    public function getAddressByCoordinates($latitude, $longitude)
    {
        return $this->addressService->getAddressByCoordinates($latitude, $longitude);
    }

    public function getAddressByZipCode($zipCode)
    {
        return $this->addressService->getAddressByZipCode($zipCode);
    }

}
