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

    public function getAddress($address)
    {
        return $this->addressRepository->getAddress($address);
    }

    public function getAddressByZipCode($zipCode)
    {
        return $this->addressRepository->getAddressByZipCode($zipCode);
    }

} ?>