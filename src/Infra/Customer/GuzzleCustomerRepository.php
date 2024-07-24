<?php

namespace PHPAsaas\Infra\Customer;

use GuzzleHttp\Client;
use PHPAsaas\Domain\Customer\CustomerRepositoryInterface;
use PHPAsaas\Domain\Customer\Dto\CreateCustomerDto;
use PHPAsaas\Domain\Customer\Dto\UpdateCustomerDto;

class GuzzleCustomerRepository implements CustomerRepositoryInterface
{
    private string $baseUri;
    private array  $headers;

    public function __construct(
        private Client $client,
        private string $accessToken,
        private bool   $sandbox = true
    ) {
        $this->defineBaseUri();
        $this->defineDefaultHeaders();
    }

    private function defineBaseUri()
    {
        $this->baseUri = match ($this->sandbox) {
            true  => 'https://sandbox.asaas.com/api/v3/customers',
            false => 'https://api.asaas.com/api/v3/customers'
        };
    }

    private function defineDefaultHeaders()
    {
        $this->headers = [
            'accept'       => 'application/json',
            'content-type' => 'application/json',
            'access_token' => $this->accessToken
        ];
    }

    public function createCustomer(CreateCustomerDto $createCustomerDto)
    {
        $this->client->request('POST', $this->baseUri, [
            'body'    => json_encode($createCustomerDto),
            'headers' => $this->headers
        ]);
    }

    public function updateCustomer(UpdateCustomerDto $updateCustomerDto)
    {
    }
}
