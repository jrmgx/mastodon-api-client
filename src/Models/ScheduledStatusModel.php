<?php

declare(strict_types=1);

namespace Vazaha\Mastodon\Models;

use Carbon\Carbon;
use Vazaha\Mastodon\Collections\MediaAttachmentCollection;

/**
 * @see https://link.to.docs
 */
class ScheduledStatusModel extends Model
{
    /**
     * ID of the scheduled status in the database.
     */
    public string $id;

    /**
     * The timestamp for when the status will be posted.
     */
    public Carbon $scheduled_at;

    /**
     * The parameters that were used when scheduling the status, to be used when
     * the status is posted.
     *
     * @var mixed[]
     */
    public array $params;

    /**
     * Media that will be attached when the status is posted.
     */
    public MediaAttachmentCollection $media_attachments;
}