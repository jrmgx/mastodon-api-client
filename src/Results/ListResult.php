<?php

declare(strict_types=1);

namespace Vazaha\Mastodon\Results;

use Vazaha\Mastodon\Interfaces\ResultInterface;

/**
 * @property array<\Vazaha\Mastodon\Models\ListModel> $models
 *
 * @method null|\Vazaha\Mastodon\Models\ListModel   getModel()
 * @method array<\Vazaha\Mastodon\Models\ListModel> getModels()
 */
class ListResult extends Result implements ResultInterface
{
}