<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Delivery extends Model
{
    public const ICON_DIRECTORY = '/public/delivery-icons';

    public function getTimeToDelivery()
    {
        $timeNow = Carbon::now()->timezone('Europe/Moscow')->roundHours();
        $startDelivery = Carbon::createFromTimeString($this->start);
        $endDelivery = Carbon::createFromTimeString($this->end);

        if ($timeNow->toTimeString() < $startDelivery->toTimeString()) {
            return $startDelivery->addHour($this->delay)->format('H:i d.m');
        }

        if ($timeNow->toTimeString() < $endDelivery->subHour($this->delay)->toTimeString()) {
            return $timeNow->addHour($this->delay)->format('H:i d.m');
        }

        else {
            return $startDelivery->addDay()->format('H:i d.m');
        }
    }

    public function deleteIcon()
    {
        if (!is_null($this->icon_path) && Storage::exists($this->icon_path)) {
            Storage::delete($this->icon_path);
        }
        $this->icon_path = null;
        $this->save();
    }
}
