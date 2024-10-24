<?php

namespace App\Enums;

use EmreYarligan\EnumConcern\EnumConcern;

enum SearchEngines
{
    use EnumConcern;

    case typesense;
    case meilisearch;
    case pgsql;

    public const string FALLBACK = self::pgsql->name;

    public static function active(): array
    {
        return self::except([self::FALLBACK])->keys()->toArray();
    }
}
