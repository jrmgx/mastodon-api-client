<?php

declare(strict_types=1);

namespace Vazaha\Mastodon\Models\Status;

use Vazaha\Mastodon\Models\Model;

/**
 * @see https://link.to.docs
 */
class TagModel extends Model
{
    /**
     * The value of the hashtag after the # sign.
     */
    public string $name;

    /**
     * A link to the hashtag on the instance.
     */
    public string $url;
}