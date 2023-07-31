<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Requests\Lists;

use Vazaha\Mastodon\Enums\HttpMethod;
use Vazaha\Mastodon\Interfaces\RequestInterface;

/**
 * Delete a list.
 *
 * @implements \Vazaha\Mastodon\Interfaces\RequestInterface<\Vazaha\Mastodon\Results\EmptyResultResult>
 */
final class DeleteRequest extends \Vazaha\Mastodon\Requests\EmptyResultRequest implements RequestInterface
{
    public function __construct(
        /**
         * The ID of the List in the database.
         */
        public string $id,
    ) {
    }

    public function getEndpoint(): string
    {
        return sprintf('/api/v1/lists/%s', urlencode($this->id));
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
        return HttpMethod::DELETE;
    }
}
