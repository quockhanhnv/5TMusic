<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

class Reservation extends Model
{
    protected $guarded = [];


    protected $status = [
        UNACCEPTED_RESERVATION => [
            'class' => 'btn btn-primary',
            'name'  => UNACCEPTED_RESERVATION_NAME
        ],
        ACCEPTED_RESERVATION => [
            'class' => 'btn btn-info',
            'name'  => ACCEPTED_RESERVATION_NAME
        ],
        CANCELED_RESERVATION => [
            'class' => 'btn btn-danger',
            'name'  => CANCELED_RESERVATION_NAME
        ],
    ];

    public function getStatus()
    {
        return Arr::get($this->status, $this->reservation_status,"[N\A]");
    }

    public function course()
    {
        return $this->belongsTo(Course::class, 'reservation_course_id');
    }
}
