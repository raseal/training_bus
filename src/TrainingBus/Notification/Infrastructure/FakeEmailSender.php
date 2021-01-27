<?php

declare(strict_types=1);

namespace TrainingBus\Notification\Infrastructure;

use TrainingBus\Notification\Domain\Email;
use TrainingBus\Notification\Domain\EmailSender;

class FakeEmailSender implements EmailSender
{
    public function send(Email $email): void
    {
        // This class simulates an email sender
    }
}
