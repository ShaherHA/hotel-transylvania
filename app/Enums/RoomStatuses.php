<?php

namespace App\Enums;

enum RoomStatuses :string
{
    case AVAILABLE = 'available';
    case OCCUPIED = 'occupied';
    case NEEDS_CLEANING = 'needs cleaning';
    case OUT_OF_SERVICE = 'out of service';
}
