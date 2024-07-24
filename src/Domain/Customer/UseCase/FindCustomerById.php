<?php

namespace PHPAsaas\Domain\Customer\UseCase;

use PHPAsaas\Domain\Customer\CustomerRepositoryInterface;

class FindCustomerById
{
    public function __construct(
        private CustomerRepositoryInterface $customerRepository
    ) {
    }

    public function execute(string $id)
    {
        $this->customerRepository->findById($id);
    }
}
