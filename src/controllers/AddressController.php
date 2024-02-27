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

    public function getAddress($address)
    {
        return $this->addressService->getAddress($address);
    }

    public function getAddressByZipCode($zipCode)
    {
        return $this->addressService->getAddressByZipCode($zipCode);
    }

}
