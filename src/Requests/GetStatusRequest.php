<?php

declare(strict_types=1);

namespace Vazaha\Mastodon\Requests;

use Vazaha\Mastodon\Interfaces\RequestInterface;
use Vazaha\Mastodon\Requests\Concerns\GetRequest;

/**
 * @see https://link.to.docs
 *
 * @implements \Vazaha\Mastodon\Interfaces\RequestInterface<\Vazaha\Mastodon\Results\StatusResult>
 */
final class GetStatusRequest extends StatusRequest implements RequestInterface
{
    use GetRequest;

    public function __construct(
        protected string $statusId,
    ) {
    }

    public function getEndpoint(): string
    {
        return sprintf('/api/v1/statuses/%s', urlencode($this->statusId));
    }

    public function getQueryParams(): array
    {
        return [];
    }
}