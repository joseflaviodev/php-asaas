<?php

namespace PHPAsaas\Domain\Customer;

use PHPAsaas\Domain\Customer\Dto\CreateCustomerDto;
use PHPAsaas\Domain\Customer\Dto\UpdateCustomerDto;

interface CustomerRepositoryInterface
{
    public function createCustomer(CreateCustomerDto $createCustomerDto);
    public function updateCustomer(UpdateCustomerDto $updateCustomerDto);
}
