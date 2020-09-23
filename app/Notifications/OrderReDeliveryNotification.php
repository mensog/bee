<?php

namespace App\Notifications;

use App\Order;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Support\HtmlString;

class OrderReDeliveryNotification extends OrderNotification
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
                    ->subject('Beeclub Заказ №' . $this->order->id . ' не доставлен' )
                    ->view('notifications.email', [
                        'order' => $this->order,
                        'titleNotification' => 'не доставлен',
                        'firstText' => new HtmlString('Не удалось доставить заказ.<br>Повторная доставка запланирована на завтра.'),
                        'status' => 'Не доставлен',
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
            'status' => 'Заказ №' . $this->order->id . ' не доставлен' ,
            'notice' => 'Не удалось доставить заказ.  Повторная доставка запланирована на завтра.',
        ];
    }
}
