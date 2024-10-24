<?php

namespace App\Enums;

use EmreYarligan\EnumConcern\EnumConcern;

enum UserPlatforms
{
    use EnumConcern;

    case shopify;
}
