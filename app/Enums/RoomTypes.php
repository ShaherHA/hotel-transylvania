<?php

namespace App\Enums;

enum RoomTypes :string
{
    case SINGLE = 'single';
    case DOUBLE = 'double';
    case DELUXE = 'deluxe';
    case SUITE = 'suite';
}
