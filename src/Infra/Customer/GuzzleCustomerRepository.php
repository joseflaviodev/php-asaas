<?php

namespace PHPAsaas\Infra\Customer;

use GuzzleHttp\Client;
use GuzzleRepository;
use PHPAsaas\Domain\Customer\CustomerRepositoryInterface;
use PHPAsaas\Domain\Customer\Dto\CreateCustomerDto;
use PHPAsaas\Domain\Customer\Dto\UpdateCustomerDto;

class GuzzleCustomerRepository extends GuzzleRepository implements CustomerRepositoryInterface
{
    public function __construct(
        Client $client,
        string $accessToken,
        bool   $sandbox = true
    ) {
        parent::__construct($client, $accessToken, $sandbox);
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
