<?php

declare(strict_types=1);

namespace TrainingBus\Notification\Application;

use Shared\Domain\Bus\Command\CommandHandler;
use TrainingBus\Notification\Domain\Email;
use TrainingBus\Notification\Domain\EmailSender;
use TrainingBus\Notification\Domain\ValueObjects\EmailAddress;

class SendInviteCommandHandler implements CommandHandler
{
    private EmailSender $email_sender;

    public function __construct(EmailSender $an_email_sender)
    {
        $this->email_sender = $an_email_sender;
    }

    public function __invoke(SendInviteCommand $command) : void
    {
        $email_address = new EmailAddress($command->email());
        $email = new Email($email_address);

        $this->email_sender->send($email);
    }
}
