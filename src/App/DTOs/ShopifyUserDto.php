<?php

namespace App\DTOs;

use Carbon\Carbon;
use WendellAdriel\ValidatedDTO\Casting\CarbonCast;
use WendellAdriel\ValidatedDTO\SimpleDTO;

class ShopifyUserDto extends SimpleDTO
{
    public int     $id;
    public string  $name;
    public string  $email;
    public ?Carbon $email_verified_at;
    public string  $password;
    public ?Carbon $created_at;
    public ?Carbon $updated_at;
    public ?bool   $shopify_grandfathered;
    public ?string $shopify_namespace;
    public ?bool   $shopify_freemium;
    public ?int    $plan_id;
    public ?Carbon $deleted_at;
    public ?Carbon $password_updated_at;
    public ?int    $theme_support_level;
    public ?int    $cassie_id;
    public ?string $cassie_access_token;

    protected function casts(): array
    {
        return [
            'email_verified_at'   => new CarbonCast(),
            'created_at'          => new CarbonCast(),
            'updated_at'          => new CarbonCast(),
            'deleted_at'          => new CarbonCast(),
            'password_updated_at' => new CarbonCast(),
        ];
    }

    protected function defaults(): array
    {
        return [];
    }
}
