<?php

namespace App\Enums;

enum LocationType: string
{
    case OnSite = 'on-site';
    case Hybrid = 'hybrid';
    case Online = 'online';
}
