<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Requests\Admin\Dimensions;

use DateTimeInterface;
use Vazaha\Mastodon\Enums\HttpMethod;
use Vazaha\Mastodon\Interfaces\RequestInterface;

/**
 * Get dimensional data.
 *
 * @implements \Vazaha\Mastodon\Interfaces\RequestInterface<\Vazaha\Mastodon\Results\Admin\DimensionResult>
 */
final class GetRequest extends \Vazaha\Mastodon\Requests\Admin\DimensionRequest implements RequestInterface
{
    public function __construct(
        /**
         * Request specific dimensions by their keystring. Supported dimensions
         * include:.
         *
         * @var array<string> $keys
         */
        public array $keys,

        /**
         * The start date for the time period. If a time is provided, it will be
         * ignored.
         */
        public ?DateTimeInterface $start_at = null,

        /**
         * The end date for the time period. If a time is provided, it will be
         * ignored.
         */
        public ?DateTimeInterface $end_at = null,

        /**
         * The maximum number of results to return for sources, servers, languages,
         * tag or instance dimensions.
         */
        public ?int $limit = null,
    ) {
    }

    public function getEndpoint(): string
    {
        return '/api/v1/admin/dimensions';
    }

    public function getQueryParams(): array
    {
        return [
        ];
    }

    public function getFormParams(): array
    {
        return [
            'keys' => $this->keys,
            'start_at' => $this->start_at,
            'end_at' => $this->end_at,
            'limit' => $this->limit,
        ];
    }

    public function getHttpMethod(): HttpMethod
    {
        return HttpMethod::POST;
    }
}