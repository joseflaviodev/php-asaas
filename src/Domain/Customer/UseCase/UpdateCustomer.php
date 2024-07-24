<?php

namespace PHPAsaas\Domain\Customer\UseCase;

use PHPAsaas\Domain\Customer\CustomerRepositoryInterface;
use PHPAsaas\Domain\Customer\Dto\UpdateCustomerDto;

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
