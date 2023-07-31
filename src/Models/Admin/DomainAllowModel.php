<?php

declare(strict_types=1);

namespace Vazaha\Mastodon\Models\Admin;

use Carbon\Carbon;
use Vazaha\Mastodon\Models\Model;

/**
 * @see https://link.to.docs
 */
class DomainAllowModel extends Model
{
    /**
     * The ID of the DomainAllow in the database.
     */
    public string $id;

    /**
     * The domain that is allowed to federate.
     */
    public string $domain;

    /**
     * When the domain was allowed to federate.
     */
    public Carbon $created_at;
}