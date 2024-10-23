<?php

namespace App\Enums;

enum SearchEngines
{
    case typesense;
    case meilisearch;
    case pgsql;
}
