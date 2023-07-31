<?php

declare(strict_types=1);

namespace Vazaha\Mastodon\Models;

use Carbon\Carbon;
use Vazaha\Mastodon\Collections\FilterKeywordCollection;
use Vazaha\Mastodon\Collections\FilterStatusCollection;

/**
 * @see https://link.to.docs
 */
class FilterModel extends Model
{
    /**
     * The ID of the Filter in the database.
     */
    public string $id;

    /**
     * A title given by the user to name the filter.
     */
    public string $title;

    /**
     * The contexts in which the filter should be applied.
     */
    public string $context;

    /**
     * When the filter should no longer be applied.
     */
    public ?Carbon $expires_at = null;

    /**
     * The action to be taken when a status matches this filter.
     */
    public string $filter_action;

    /**
     * The keywords grouped under this filter.
     */
    public FilterKeywordCollection $keywords;

    /**
     * The statuses grouped under this filter.
     */
    public FilterStatusCollection $statuses;
}