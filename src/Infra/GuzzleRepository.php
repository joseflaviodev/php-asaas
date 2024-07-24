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
        $this->defineBaseUri();
        $this->defineDefaultHeaders();
    }

    protected function defineBaseUri()
    {
        $this->baseUri = match ($this->sandbox) {
            true  => 'https://sandbox.asaas.com/api/v3/customers',
            false => 'https://api.asaas.com/api/v3/customers'
        };
    }

    protected function defineDefaultHeaders()
    {
        $this->headers = [
            'accept'       => 'application/json',
            'content-type' => 'application/json',
            'access_token' => $this->accessToken
        ];
    }
}
