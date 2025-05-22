<?php

namespace App\Enums;

use App\EnumTrait;

enum RoomTypes :string
{
    use EnumTrait;
    case SINGLE = 'single';
    case DOUBLE = 'double';
    case DELUXE = 'deluxe';
    case SUITE = 'suite';
}
