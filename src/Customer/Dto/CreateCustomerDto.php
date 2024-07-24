<?php

namespace PHPAsaas\Customer\Dto;

class CreateCustomerDto
{
    public function __construct(
        public readonly  string $name,
        public readonly  string $cpfCnpj,
        public readonly ?string $email,
        public readonly ?string $phone,
        public readonly ?string $mobilePhone,
        public readonly ?string $address,
        public readonly ?string $addressNumber,
        public readonly ?string $complement,
        public readonly ?string $province,
        public readonly ?string $postalCode,
        public readonly ?string $externalReference,
        public readonly ?bool   $notificationDisabled,
        public readonly ?array  $additionalEmails,
        public readonly ?string $municipalInscription,
        public readonly ?string $stateInscription,
        public readonly ?string $observations,
        public readonly ?string $groupName,
        public readonly ?string $company
    ) {
    }
}