<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Requests\Accounts;

use Vazaha\Mastodon\Enums\HttpMethod;
use Vazaha\Mastodon\Interfaces\RequestInterface;

/**
 * Block account.
 *
 * @implements \Vazaha\Mastodon\Interfaces\RequestInterface<\Vazaha\Mastodon\Results\RelationshipResult>
 */
final class BlockRequest extends \Vazaha\Mastodon\Requests\RelationshipRequest implements RequestInterface
{
    public function __construct(
        /**
         * The ID of the Account in the database.
         */
        public string $id,
    ) {
    }

    public function getEndpoint(): string
    {
        return sprintf('/api/v1/accounts/%s/block', urlencode($this->id));
    }

    public function getQueryParams(): array
    {
        return [
        ];
    }

    public function getFormParams(): array
    {
        return [
        ];
    }

    public function getHttpMethod(): HttpMethod
    {
        return HttpMethod::POST;
    }
}
