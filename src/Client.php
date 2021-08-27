<?php

namespace Odinshat\UkPolApi;

use GuzzleHttp\ClientInterface;
use GuzzleHttp\Promise\PromiseInterface;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\UriInterface;

class Client implements ClientInterface
{

    /**
     * @param RequestInterface $request
     * @param array $options
     * @return ResponseInterface
     */
    public function send(RequestInterface $request, array $options = []): ResponseInterface
    {
        // TODO: Implement send() method.
    }

    /**
     * @param RequestInterface $request
     * @param array $options
     * @return PromiseInterface
     */
    public function sendAsync(RequestInterface $request, array $options = []): PromiseInterface
    {
        // TODO: Implement sendAsync() method.
    }

    /**
     * @param string $method
     * @param UriInterface|string $uri
     * @param array $options
     * @return ResponseInterface
     */
    public function request(string $method, $uri, array $options = []): ResponseInterface
    {
        // TODO: Implement request() method.
    }

    /**
     * @param string $method
     * @param UriInterface|string $uri
     * @param array $options
     * @return PromiseInterface
     */
    public function requestAsync(string $method, $uri, array $options = []): PromiseInterface
    {
        // TODO: Implement requestAsync() method.
    }

    /**
     * @param string|null $option
     * @return mixed
     */
    public function getConfig(?string $option = null)
    {
        // TODO: Implement getConfig() method.
    }
}