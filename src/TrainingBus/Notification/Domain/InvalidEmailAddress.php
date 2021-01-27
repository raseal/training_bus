<?php

declare(strict_types=1);

namespace TrainingBus\Notification\Domain;

use Shared\Domain\DomainError;

class InvalidEmailAddress extends DomainError
{
    private string $email_address;

    public function __construct(string $an_email_address)
    {
        $this->email_address = $an_email_address;

        parent::__construct();
    }

    function errorMessage(): string
    {
        return sprintf('The provided email address (%s) is invalid', $this->email_address);
    }
}
