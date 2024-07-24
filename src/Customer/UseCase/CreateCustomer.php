<?php

namespace PHPAsaas\Customer\UseCase;

use PHPAsaas\Customer\CustomerRepositoryInterface;
use PHPAsaas\Customer\Dto\CreateCustomerDto;

class CreateCustomer
{
    public function __construct(
        private CustomerRepositoryInterface $customerRepository
    ) {
    }

    public function execute(CreateCustomerDto $createCustomerDto)
    {
        $this->customerRepository->createCustomer($createCustomerDto);
    }
}
