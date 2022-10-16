<?php

namespace App\Enums;

enum RoleUser: string
{
    case User = 'user';
    case Admin = 'admin';
    case SuperAdmin = 'superadmin';
}
