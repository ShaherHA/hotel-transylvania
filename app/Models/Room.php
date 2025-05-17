<?php

namespace App\Models;

use App\Enums\RoomStatuses;
use App\Enums\RoomTypes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    /** @use HasFactory<\Database\Factories\RoomFactory> */
    use HasFactory;

    protected $guarded = [];

    protected $casts = [
        'room_type' => RoomTypes::class,
        'status' => RoomStatuses::class
    ];
}
