<?php

namespace PHPAsaas\Domain\Customer\UseCase;

use PHPAsaas\Domain\Customer\CustomerRepositoryInterface;
use PHPAsaas\Domain\Customer\Dto\CreateCustomerDto;

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
