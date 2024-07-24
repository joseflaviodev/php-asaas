<?php

use GuzzleHttp\Client;

abstract class GuzzleRepository
{
    protected string $baseUri;
    protected array  $headers;

    public function __construct(
        protected Client $client,
        protected string $accessToken,
        protected bool   $sandbox
    ) {
        $this->setBaseUri();
        $this->setDefaultHeaders();
    }

    protected function setBaseUri()
    {
        $this->baseUri = match ($this->sandbox) {
            true  => 'https://sandbox.asaas.com/api/v3/customers',
            false => 'https://api.asaas.com/api/v3/customers'
        };
    }

    protected function setDefaultHeaders()
    {
        $this->headers = [
            'accept'       => 'application/json',
            'content-type' => 'application/json',
            'access_token' => $this->accessToken
        ];
    }
}
