<?php

namespace App\Notifications;

use App\Order;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\MailMessage;

class OrderRefundedNotification extends OrderNotification
{
    use Queueable;
    public $productReturn;
    /**
     * Create a new notification instance.
     *
     * @param Order $order
     */
    public function __construct(Order $order, $productReturn)
    {
        parent::__construct($order);
        $this->productReturn = $productReturn;
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
                'productReturn' => $this->productReturn,
                'titleNotification' => 'доставлен и частично возвращен',
                'firstText' => 'Товар арт.' . $this->productReturn->sku,
                'secondText' => 'в заказе №' . $this->order->id,
                'thirdText' => 'передан на возврат.',
                'status' => 'Доставлен и частично возвращен',
                'quantity' => $this->order->items()->pluck('quantity')->toArray(),
                'style' => '',
            ]);
        //Доработать
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
            'status' => 'Заказ №' . $this->order->id . ' доставлен и частично возвращен' ,
            'notice' => 'Товар арт.' . $this->productReturn->sku,
            'noticeSecond' => 'в заказе №' . $this->order->id . ' передан на возврат.',
        ];
    }
}
