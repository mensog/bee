<?php

namespace App\Notifications;

use App\Order;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Support\HtmlString;

class OrderCanceledNotification extends OrderNotification
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @param Order $order
     */
    public function __construct(Order $order)
    {
       parent::__construct($order);
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {


        return (new MailMessage)
                    ->line('не оплачен')
                    ->line(new HtmlString('Попробуйте оплатить заказ повторно.<br>Перейдите по ссылке для повторной оплаты'))
                    ->view('notifications.email', [
                        'order' => $this->order,
                        'route' => 'place_order',
                        'status' => 'Ожидает оплату',
                        'linkName' => 'ссылка',
                        'quantity' => $this->order->items()->pluck('quantity')->toArray(),
                        'weight' => 0,
                        'style' => '',
                    ]);
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
