<?php

namespace PHPAsaas\Domain\Customer\Dto;

use JsonSerializable;

class UpdateCustomerDto implements JsonSerializable
{
    public function __construct(
        public  string $id,
        public ?string $name,
        public ?string $cpfCnpj,
        public ?string $email,
        public ?string $phone,
        public ?string $mobilePhone,
        public ?string $address,
        public ?string $addressNumber,
        public ?string $complement,
        public ?string $province,
        public ?string $postalCode,
        public ?string $externalReference,
        public ?bool   $notificationDisabled,
        public ?array  $additionalEmails,
        public ?string $municipalInscription,
        public ?string $stateInscription,
        public ?string $observations,
        public ?string $groupName,
        public ?string $company
    ) {
    }

    public function jsonSerialize(): array
    {
        return array_filter(
            array: get_object_vars($this),
            callback: fn ($value) => $value !== null
        );
    }
}
