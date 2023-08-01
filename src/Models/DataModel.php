<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Models;

/**
 * Represents qualitative data about the server.
 */
class DataModel extends Model
{
    /**
     * The unique keystring for this data item.
     */
    public string $key;

    /**
     * A human-readable key for this data item.
     */
    public string $human_key;

    /**
     * The value for this data item.
     */
    public string $value;

    /**
     * The units associated with this data item&#039;s value, if applicable.
     */
    public ?string $unit = null;

    /**
     * A human-readable formatted value for this data item.
     */
    public ?string $human_value = null;
}
