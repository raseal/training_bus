<?php

declare(strict_types=1);

namespace TrainingBus\Notification\Application;

use Shared\Domain\Bus\Command\Command;

class SendInviteCommand implements Command
{
    private string $email;

    public function __construct(string $an_email)
    {
        $this->email = $an_email;
    }

    public function email(): string
    {
        return $this->email;
    }
}
