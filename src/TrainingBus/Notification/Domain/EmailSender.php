<?php

declare(strict_types=1);

namespace TrainingBus\Notification\Domain;

interface EmailSender
{
    public function send(Email $email) : void;
}
