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

    public function getAddressByCoordinates($coordinates)
    {
        return $this->addressRepository->getAddressByCoordinates($coordinates);
    }

} ?>