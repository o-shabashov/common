<?php

use App\Enums\SearchEngines;

test('search engines enum', function () {
    expect(SearchEngines::active())->toBe(['typesense', 'meilisearch']);
});
