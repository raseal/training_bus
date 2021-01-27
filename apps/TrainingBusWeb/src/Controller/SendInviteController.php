<?php

declare(strict_types=1);

namespace TrainingBusWeb\Controller;

use Shared\Domain\Bus\Command\CommandBus;
use Symfony\Component\HttpFoundation\Response;
use TrainingBus\Notification\Application\SendInviteCommand;

class SendInviteController
{
    private CommandBus $command_bus;

    public function __construct(CommandBus $a_command_bus)
    {
        $this->command_bus = $a_command_bus;
    }

    public function sendInvite(string $email) : Response
    {
        $command = new SendInviteCommand($email);

        $this->command_bus->dispatch($command);

        return new Response("Email sent to `$email`");
    }
}
