<?php

declare(strict_types=1);

namespace Vazaha\Mastodon\Models\Announcement;

use Vazaha\Mastodon\Models\Model;

/**
 * @see https://link.to.docs
 */
class StatusModel extends Model
{
    /**
     * The ID of an attached Status in the database.
     */
    public string $id;

    /**
     * The URL of an attached Status.
     */
    public string $url;
}