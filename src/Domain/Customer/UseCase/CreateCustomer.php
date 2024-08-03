<?php

namespace PHPAsaas\Domain\Customer\UseCase;

use PHPAsaas\Domain\Customer\CustomerRepositoryInterface;
use PHPAsaas\Domain\Customer\Dto\CreateCustomerDto;
use PHPAsaas\Domain\Customer\Dto\ResponseCustomerDto;

class CreateCustomer
{
    public function __construct(
        private CustomerRepositoryInterface $customerRepository
    ) {
    }

    public function execute(CreateCustomerDto $createCustomerDto): ResponseCustomerDto
    {
        return $this->customerRepository->createCustomer($createCustomerDto);
    }
}
