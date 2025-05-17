<?php

namespace App\Enums;

enum RolesEnum: string
{
    case MANAGER = 'manager';
    case RECEPTIONIST = 'receptionist';
    case HOUSEKEEPER = 'housekeeper';
    case CUSTOMER = 'customer';
}
