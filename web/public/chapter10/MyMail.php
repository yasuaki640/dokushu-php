<?php
declare(strict_types=1);

class MyMail
{
    private string $to;
    private string $subject;
    private string $message;
    private array $headers = [];

    public function getTo(): string
    {
        return $this->to;
    }

    public function setTo(string $to): void
    {
        $this->to = $to;
    }

    public function getSubject(): string
    {
        return $this->subject;
    }

    public function setSubject(string $subject): void
    {
        $this->subject = $subject;
    }

    public function getMessage(): string
    {
        return $this->message;
    }

    public function setMessage(string $message): void
    {
        $this->message = $message;
    }

    public function __set(string $name, string $value): void
    {
        $this->headers[$name] = $value;
    }

    public function __get(string $name): string
    {
        return $this->headers[$name];
    }

    public function __isset($name): bool
    {
        return isset($this->headers[$name]);
    }

    public function __unset($name): void
    {
        unset($this->headers[$name]);
    }

    public function send(): void
    {
        foreach ($this->headers as $key => $value) {
            $key = str_replace('_', '-', $key);
            $others .= "{$key}: {$value}\n";
        }
        mb_send_mail($this->to, $this->subject, $this->message, $others);
    }
}