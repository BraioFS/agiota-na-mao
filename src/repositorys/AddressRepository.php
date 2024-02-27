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
        //TODO - realizar a conexão com a api correta
        $url = 'https://nominatim.openstreetmap.org/search?format=json&q=' . urlencode($address);

        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

        $response = curl_exec($curl);

        if ($response === false) {
            die(curl_error($curl));
        }

        $data = json_decode($response, true);

        if (empty($data)) {
            return null;
        }

        $lat = $data[0]['lat'];
        $lon = $data[0]['lon'];

        return array('latitude' => $lat, 'longitude' => $lon);
    }

    public function getAddressByZipCode($zipCode)
    {
        //TODO - requisição api para pegar a coodenada por cep
        return null;
    }

} ?>