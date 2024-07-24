<?php

namespace PHPAsaas\Customer;

use PHPAsaas\Customer\Dto\CreateCustomerDto;
use PHPAsaas\Customer\Dto\UpdateCustomerDto;

interface CustomerRepositoryInterface
{
    public function createCustomer(CreateCustomerDto $createCustomerDto);
    public function updateCustomer(UpdateCustomerDto $updateCustomerDto);
}
