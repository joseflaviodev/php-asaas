<?php

namespace PHPAsaas\Customer\UseCase;

use PHPAsaas\Customer\CustomerRepositoryInterface;
use PHPAsaas\Customer\Dto\UpdateCustomerDto;

class UpdateCustomer
{
    public function __construct(
        private CustomerRepositoryInterface $customerRepository
    ) {
    }

    public function execute(UpdateCustomerDto $updateCustomerDto)
    {
        $this->customerRepository->updateCustomer($updateCustomerDto);
    }
}
