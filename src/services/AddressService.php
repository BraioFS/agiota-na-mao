<?php
class AddressService
{
    private $addressRepository;

    public function __construct()
    {
        $this->addressRepository = new AddressRepository();
    }

    public function getAddressById($id)
    {
        return $this->addressRepository->getAddressById($id);
    }

    public function getAddressByCoordinates($latitude, $longitude)
    {
        return $this->addressRepository->getAddressByCoordinates($latitude, $longitude);
    }

    public function getAddressByZipCode($zipCode)
    {
        return $this->addressRepository->getAddressByZipCode($zipCode);
    }

} ?>