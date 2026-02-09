<?php

namespace App\Notifications\Auth;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\MailMessage;

class ResetPasswordNotification extends Notification
{
    use Queueable;

    protected string $token;
    protected string $appCode;

    public function __construct(string $token, string $appCode)
    {
        $this->token   = $token;
        $this->appCode = $appCode;
    }

    public function via($notifiable): array
    {
        return ['mail'];
    }

    public function toMail($notifiable): MailMessage
    {
        $resetUrl = url(sprintf(
            '/%s/reset-password/%s?email=%s',
            $this->appCode,
            $this->token,
            urlencode($notifiable->email)
        ));

        return (new MailMessage)
            ->subject($this->subjectByApp())
            ->greeting('Recuperação de senha')
            ->line('Você solicitou a redefinição de senha.')
            ->action('Redefinir senha', $resetUrl)
            ->line('Se você não solicitou este e-mail, ignore.');
    }

    protected function subjectByApp(): string
    {
        return match ($this->appCode) {
            'cms'        => 'CMS – Recuperação de senha',
            'system'     => 'Sistema – Recuperação de senha',
            'vendas'     => 'Vendas – Recuperação de senha',
            'governanca' => 'Governança – Recuperação de senha',
            default      => 'Recuperação de senha',
        };
    }
}
