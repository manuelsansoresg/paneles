<?php
namespace App\Lib;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class Banxico
{
    public function getExchangeRate()
    {
        $client = new Client();
        $url = 'https://www.banxico.org.mx/SieAPIRest/service/v1/series/SF43718/datos/oportuno';
        $response = $client->request('GET', $url, [
            'headers' => [
                'Bmx-Token' => env('BANXICO_TOKEN'),
            ]
        ]);

        $data = json_decode($response->getBody(), true);
        $dollarValue = $data['bmx']['series'][0]['datos'][0]['dato'];
        return $dollarValue;
    }
}
