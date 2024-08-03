<?php

namespace PHPAsaas\Domain\Customer\UseCase;

use PHPAsaas\Domain\Customer\CustomerRepositoryInterface;
use PHPAsaas\Domain\Customer\Dto\ResponseCustomerDto;

class FindCustomerById
{
    public function __construct(
        private CustomerRepositoryInterface $customerRepository
    ) {
    }

    public function execute(string $id): ?ResponseCustomerDto
    {
        return $this->customerRepository->findById($id);
    }
}
