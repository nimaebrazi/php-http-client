<?php


namespace NimaEbrazi\HttpClient;


use GuzzleHttp\Client;
use NimaEbrazi\HttpClient\Contract\Client as ClientInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\UriInterface;

/**
 * Class GuzzleClient
 * @author <nimaebrazi@gmail.com> Nima Ebrazi
 */
class GuzzleClient implements ClientInterface
{
    /**
     * @var Client
     */
    protected $guzzleClient;

    /**
     * GuzzleClient constructor.
     * @param Client $guzzleClient
     */
    public function __construct(Client $guzzleClient)
    {
        $this->guzzleClient = $guzzleClient;
    }

    /**
     * Make http request.
     *
     * @param string $method
     * @param string|UriInterface $uri
     * @param array $options
     * @return ResponseInterface
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function request($method, $uri, array $options = [])
    {
        return $this->guzzleClient->request($method, $uri, $options);
    }

    /**
     * GET Http method.
     *
     * @param string|UriInterface $uri
     * @param array $options
     * @return ResponseInterface
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function get($uri, array $options = [])
    {
        return $this->guzzleClient->request('GET', $uri, $options);
    }

    /**
     * Head Http method.
     *
     * @param string|UriInterface $uri
     * @param array $options
     * @return ResponseInterface
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function head($uri, array $options = [])
    {
        return $this->guzzleClient->request('HEAD', $uri, $options);
    }

    /**
     * POST Http method.
     *
     * @param string|UriInterface $uri
     * @param array $options
     * @return ResponseInterface
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function post($uri, array $options = [])
    {
        return $this->guzzleClient->request('POST', $uri, $options);
    }

    /**
     * PUT Http method.
     *
     * @param string|UriInterface $uri
     * @param array $options
     * @return ResponseInterface
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function put($uri, array $options = [])
    {
        return $this->guzzleClient->request('PUT', $uri, $options);
    }

    /**
     * Delete Http method.
     *
     * @param string|UriInterface $uri
     * @param array $options
     * @return ResponseInterface
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function delete($uri, array $options = [])
    {
        return $this->guzzleClient->request('DELETE', $uri, $options);
    }

    /**
     * Patch Http method.
     *
     * @param string|UriInterface $uri
     * @param array $options
     * @return ResponseInterface
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function path($uri, array $options = [])
    {
        return $this->guzzleClient->request('PATCH', $uri, $options);
    }
}