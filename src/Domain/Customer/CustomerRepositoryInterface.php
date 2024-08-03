<?php

namespace PHPAsaas\Domain\Customer;

use PHPAsaas\Domain\Customer\Dto\CreateCustomerDto;
use PHPAsaas\Domain\Customer\Dto\ResponseCustomerDto;
use PHPAsaas\Domain\Customer\Dto\UpdateCustomerDto;

interface CustomerRepositoryInterface
{
    public function createCustomer(CreateCustomerDto $createCustomerDto): ResponseCustomerDto;
    public function updateCustomer(UpdateCustomerDto $updateCustomerDto): ResponseCustomerDto;
    public function findById(string $id): ?ResponseCustomerDto;
}
