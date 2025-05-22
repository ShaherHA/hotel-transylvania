<?php

namespace App\Enums;

use App\EnumTrait;

enum RoomStatuses :string
{
    use EnumTrait;
    case AVAILABLE = 'available';
    case OCCUPIED = 'occupied';
    case NEEDS_CLEANING = 'needs cleaning';
    case OUT_OF_SERVICE = 'out of service';
}
