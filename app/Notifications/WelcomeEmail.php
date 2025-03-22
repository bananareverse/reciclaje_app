<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\MailMessage;

class WelcomeEmail extends Notification
{
    use Queueable;

    public function __construct()
    {
        // Si necesitas pasar algún dato, lo puedes hacerlo aquí
    }

    public function via($notifiable)
    {
        // Definimos que la notificación será enviada por correo
        return ['mail'];
    }

    public function toMail($notifiable)
    {
        // Aquí definimos el contenido del correo
        return (new MailMessage)
                    ->greeting('¡Bienvenido!')
                    ->line('Gracias por registrarte en nuestra aplicación.')
                    ->action('Visitar nuestro sitio', url('/'))
                    ->line('¡Estamos felices de tenerte con nosotros!');
    }

    // Si necesitas almacenar la notificación en base de datos u otros canales,
    // puedes agregar otros métodos como toDatabase() o toBroadcast().
}
