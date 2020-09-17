<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Delivery extends Model
{
    public const ICON_DIRECTORY = '/public/delivery-icons';
    /**
     * @var mixed
     */

    public function getTimeToDelivery()
    {
        $timeNow = Carbon::now()->timezone('Europe/Moscow')->roundHours();
        $timeIncludDelivery = $timeNow->addHour($this->delay);
        $start = $this->start;
        $end = $this->end;


        if ($start < $end) {
            if ($timeIncludDelivery->toTimeString() > $start && $timeIncludDelivery->toTimeString() < $end) {
                return $timeIncludDelivery->format('H:i d.m');
            } else {
                return Carbon::createFromTimeString($start)->format('H:i d.m');
            }
        } else if($start > $end) {
            if ($timeIncludDelivery->toTimeString() < $start && $timeIncludDelivery->toTimeString() < $end) {
                return $timeIncludDelivery->format('H:i d.m');
            } else {
                return $timeIncludDelivery->format('H:i d.m');
            }
        } else {
            return Carbon::createFromTimeString($start)->addHour($this->delay)->format('H:i d.m');
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
