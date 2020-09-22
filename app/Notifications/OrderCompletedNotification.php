<?php

namespace App\Notifications;

use App\Order;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Support\HtmlString;

class OrderCompletedNotification extends OrderNotification
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
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
                    ->view('notifications.email', [
                        'order' => $this->order,
                        'titleNotification' => 'доставлен',
                        'firstText' => new HtmlString('Заказ успешно доставлен. Понравился товар?<br>Оставьте о нем отзыв!'),
                        'status' => 'Доставлен',
                        'quantity' => $this->order->items()->pluck('quantity')->toArray(),
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
            'status' => 'Заказ №' . $this->order->id . ' доставлен',
            'notice' => 'Заказ успешно доставлен. Понравился товар? Оставьте о нем отзыв!',
        ];
    }
}
