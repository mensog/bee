<?php

namespace App\Notifications;

use App\Order;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Support\HtmlString;

class OrderPaidNotification extends OrderNotification
{
    use Queueable;

    protected $order;
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
     * @param mixed $notifiable
     * @param $order
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
                    ->view('notifications.email', [
                        'order' => $this->order,
                        'titleNotification' => 'оплачен',
                        'firstText' => new HtmlString('Мы уже начали работать над вашим заказом!<br>Отслеживайте заказ в разделе «Заказы» в'),
                        'route' => 'lk',
                        'linkName' => 'Личном кабинете.',
                        'status' => 'Оплачен',
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
            //
        ];
    }
}
