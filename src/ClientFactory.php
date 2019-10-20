<?php


namespace NimaEbrazi\HttpClient;

use NimaEbrazi\HttpClient\Contract\Client;

/**
 * Class ClientFactory
 * @author <nimaebrazi@gmail.com> Nima Ebrazi
 */
class ClientFactory
{
    /**
     * Get Guzzle client instance.
     *
     * @param array $config
     * @return Client
     */
    public static function guzzle(array $config = []): Client
    {
        return new GuzzleClient(
            new \GuzzleHttp\Client($config)
        );
    }
}