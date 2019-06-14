<?php

//Hint - Dependency Inversion Principle

interface SendInterface
{
    public function send();
}

class GoogleMailer implements SendInterface
{
    public function send()
    {
        return 'Welcome Goolge';
    }
}

class SendgridMailer implements SendInterface
{
    public function send()
    {
        return 'Welcome Sendgrid';
    }
}

class MailchimpMailer implements SendInterface
{
    public function send()
    {
        return 'Welcome Mailchimp';
    }
}

class SendWelcomeMessage
{
    private $mailer;

    public function __construct(SendInterface $mailer)
    {
        $this->mailer = $mailer;
    }
}