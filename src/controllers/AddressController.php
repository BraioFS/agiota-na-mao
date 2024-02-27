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

    public function getAddressByCoordinates($coordinates)
    {
        return $this->addressService->getAddressByCoordinates($coordinates);
    }

}
