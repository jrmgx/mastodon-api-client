<?php

declare(strict_types=1);

namespace Vazaha\Mastodon\Models;

final class Application extends Model
{
    public string $name;

    public ?string $website = null;

    public string $vapid_key;

    public ?string $client_id = null;

    public ?string $client_secret = null;
}