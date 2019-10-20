<?php


namespace NimaEbrazi\HttpClient\Contract;


use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\UriInterface;

/**
 * Class Client
 * @author <nimaebrazi@gmail.com> Nima Ebrazi
 */
interface Client
{
    /**
     * Make http request.
     *
     * @param string $method
     * @param string|UriInterface $uri
     * @param array $options
     * @return ResponseInterface
     */
    public function request($method, $uri, array $options = []);

    /**
     * GET Http method.
     *
     * @param string|UriInterface $uri
     * @param array $options
     * @return ResponseInterface
     */
    public function get($uri, array $options = []);

    /**
     * @param string|UriInterface $uri
     * @param array $options
     * @return ResponseInterface
     */
    public function head($uri, array $options = []);

    /**
     * POST Http method.
     *
     * @param string|UriInterface $uri
     * @param array $options
     * @return ResponseInterface
     */
    public function post($uri, array $options = []);

    /**
     * PUT Http method.
     *
     * @param string|UriInterface $uri
     * @param array $options
     * @return ResponseInterface
     */
    public function put($uri, array $options = []);

    /**
     * Delete Http method.
     *
     * @param string|UriInterface $uri
     * @param array $options
     * @return ResponseInterface
     */
    public function delete($uri, array $options = []);

    /**
     * Patch Http method.
     *
     * @param string|UriInterface $uri
     * @param array $options
     * @return ResponseInterface
     */
    public function path($uri, array $options = []);
}