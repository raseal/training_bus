<?php

declare(strict_types=1);

namespace TrainingBus\Notification\Domain;

use TrainingBus\Notification\Domain\ValueObjects\EmailAddress;

class Email
{
    private EmailAddress $email_address;

    public function __construct(EmailAddress $an_email_address)
    {
        $this->email_address = $an_email_address;
    }

    public function emailAddress(): EmailAddress
    {
        return $this->email_address;
    }
}
