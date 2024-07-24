<?php

namespace PHPAsaas\Customer\UseCase;

use PHPAsaas\Domain\Customer\CustomerRepositoryInterface;
use PHPAsaas\Domain\Customer\Dto\CreateCustomerDto;

class CreateCustomer
{
    public function __construct(
        private CustomerRepositoryInterface $customerRepository
    ) {
    }

    public function withAccessToken(string $accessToken): CreateCustomer
    {
        $this->customerRepository = $this->customerRepository->withAccessToken($accessToken);
        return $this;
    }

    public function execute(CreateCustomerDto $createCustomerDto)
    {
        $this->customerRepository->createCustomer($createCustomerDto);
    }
}
