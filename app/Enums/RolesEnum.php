<?php

namespace App\Enums;

use App\EnumTrait;

enum RolesEnum: string
{
    use EnumTrait;
    case MANAGER = 'manager';
    case RECEPTIONIST = 'receptionist';
    case HOUSEKEEPER = 'housekeeper';
    case CUSTOMER = 'customer';
}
