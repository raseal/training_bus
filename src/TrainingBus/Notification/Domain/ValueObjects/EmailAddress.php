<?php

declare(strict_types=1);

namespace TrainingBus\Notification\Domain\ValueObjects;

use TrainingBus\Notification\Domain\InvalidEmailAddress;

class EmailAddress
{
    private string $email_address;

    public function __construct(string $an_email_address)
    {
        $this->ensureValidEmailAddress($an_email_address);
        $this->email_address = $an_email_address;
    }

    public function emailAddress(): string
    {
        return $this->email_address;
    }

    private function ensureValidEmailAddress(string $address) : void
    {
        if (false === filter_var($address, FILTER_VALIDATE_EMAIL)) {
            throw new InvalidEmailAddress($address);
        }
    }
}
