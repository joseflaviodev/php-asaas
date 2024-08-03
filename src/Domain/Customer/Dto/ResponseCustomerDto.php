<?php

namespace PHPAsaas\Domain\Customer\Dto;

use DateTimeInterface;
use PersonType;

class ResponseCustomerDto
{
    public function __construct(
        public readonly  string            $id,
        public readonly  string            $name,
        public readonly  string            $cpfCnpj,
        public readonly  PersonType        $personType,
        public readonly  bool              $deleted,
        public readonly  bool              $notificationDisabled,
        public readonly  DateTimeInterface $dateCreated,
        public readonly ?string            $email,
        public readonly ?string            $phone,
        public readonly ?string            $mobilePhone,
        public readonly ?string            $address,
        public readonly ?string            $addressNumber,
        public readonly ?string            $complement,
        public readonly ?string            $province,
        public readonly ?int               $city,
        public readonly ?string            $cityName,
        public readonly ?string            $state,
        public readonly ?string            $country,
        public readonly ?string            $postalCode,
        public readonly ?array             $additionalEmails,
        public readonly ?string            $externalReference,
        public readonly ?string            $observations
    ) {
    }
}
