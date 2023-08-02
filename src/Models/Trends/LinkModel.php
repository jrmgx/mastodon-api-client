<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Models\Trends;

use Vazaha\Mastodon\Models\Model;

/**
 * Represents a rich preview card that is generated using OpenGraph tags from a URL.
 */
class LinkModel extends Model
{
    /**
     * Usage statistics for given days (typically the past week).
     *
     * @var array<mixed>
     */
    public array $history;
}
