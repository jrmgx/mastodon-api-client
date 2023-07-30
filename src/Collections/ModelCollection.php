<?php

declare(strict_types=1);

namespace Vazaha\Mastodon\Collections;

use Illuminate\Support\Collection;

/**
 * @template TKey of array-key
 * @template TModel of \Vazaha\Mastodon\Models\Model
 *
 * @extends Collection<TKey, TModel>
 */
abstract class ModelCollection extends Collection
{
    /**
     * @return class-string<\Vazaha\Mastodon\Models\Model>
     */
    abstract public static function getModelClass(): string;

    /**
     * @param array<int, mixed[]> $array
     */
    public static function fromArray(array $array): static
    {
        $modelClass = static::getModelClass();

        $models = array_map(
            static fn (array $modelData) => $modelClass::fromArray($modelData),
            $array,
        );

        /** @var static $collection */
        $collection = static::make($models);

        return $collection;
    }
}
