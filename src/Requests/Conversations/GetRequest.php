<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Requests\Conversations;

use Vazaha\Mastodon\Enums\HttpMethod;
use Vazaha\Mastodon\Interfaces\RequestInterface;

/**
 * View all conversations.
 *
 * @implements \Vazaha\Mastodon\Interfaces\RequestInterface<\Vazaha\Mastodon\Results\ConversationResult>
 */
final class GetRequest extends \Vazaha\Mastodon\Requests\ConversationRequest implements RequestInterface
{
    public function __construct(
        /**
         * Maximum number of results to return. Defaults to 20 conversations. Max 40
         * conversations.
         */
        public ?int $limit = null,
    ) {
    }

    public function getEndpoint(): string
    {
        return '/api/v1/conversations';
    }

    public function getQueryParams(): array
    {
        return [
            'limit' => $this->limit,
        ];
    }

    public function getFormParams(): array
    {
        return [
        ];
    }

    public function getHttpMethod(): HttpMethod
    {
        return HttpMethod::GET;
    }
}
