<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Tests\Unit\Generated;

use PHPUnit\Framework\TestCase;
use Vazaha\Mastodon\Models\RelationshipModel;

class RelationshipTest extends TestCase
{
    protected string $json;

    protected function setUp(): void
    {
        $this->json = <<<'JSON'
{
   "endorsed" : false,
   "muting_notifications" : false,
   "notifying" : false,
   "id" : "1",
   "muting" : false,
   "blocking" : false,
   "domain_blocking" : false,
   "note" : "",
   "following" : true,
   "requested" : false,
   "blocked_by" : false,
   "showing_reblogs" : true,
   "followed_by" : true
}

JSON;
    }

    public function testModelInstantation(): void
    {
        self::assertTrue(true);

        $array = json_decode($this->json, true);

        if (!is_array($array)) {
            return;
        }

        if (array_is_list($array)) {
            $array = $array[0] ?? [];
        }

        $model = RelationshipModel::fromArray($array);

        foreach ($array as $property => $value) {
            $property = RelationshipModel::sanitizePropertyName($property);

            self::assertObjectHasProperty($property, $model);

            $modelValue = $model->{$property};

            if (!is_string($modelValue) && !is_int($modelValue)) {
                // TODO find some other way to test this
                continue;
            }

            self::assertEquals($value, $model->{$property});
        }
    }
}